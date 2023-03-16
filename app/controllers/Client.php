<?php


class Client extends Controller
{
  private $clientModel;
  private $dataModel;
  private $reservationModel;
  private $cruiseModel;
  private $ships;
  private $rooms;
  private $ports;
  private $roomType;
  private $itinerary;

  public function __construct()
  {
    $this->dataModel = $this->model('DataModel');
    $this->clientModel = $this->model('Clients');
    $this->reservationModel = $this->model('ReservationModel');
    $this->cruiseModel = $this->model('CruiseModel');
    $this->ships = $this->dataModel->getData("ship");
    $this->roomType = $this->dataModel->getData("room_type");
    $this->rooms = $this->dataModel->getRoomData();
    $this->ports = $this->dataModel->getData("port");
    $this->itinerary = $this->dataModel->getData("itinerary");
  }


  public function register()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form


      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Init data
      $data = [
        'fName' => trim($_POST['fName']),
        'lName' => trim($_POST['lName']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'fName_err' => '',
        'lName_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Validate Email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      } else {
        // Check email
        if ($this->clientModel->findUserByEmail($data['email'])) {
          $data['email_err'] = 'Email is already taken';
        }
      }

      // Validate Name
      if (empty($data['fName'])) {
        $data['fName_err'] = 'Please enter your First Name';
      }
      if (empty($data['lName'])) {
        $data['lName_err'] = 'Please enter your Last Name';
      }

      // Validate Password
      if (empty($data['password'])) {
        $data['password_err'] = 'Pleae enter Password';
      } elseif (strlen($data['password']) < 6) {
        $data['password_err'] = 'Password must be at least 6 characters';
      }

      // Validate Confirm Password
      if (empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Pleae Confirm Password';
      } else {
        if ($data['password'] != $data['confirm_password']) {
          $data['confirm_password_err'] = 'Passwords do not match';
        }
      }

      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
        // Validated

        // Hash Password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // Register User
        if ($this->clientModel->register($data)) {
          flash('register_success', 'You are registered and can log in');
          redirect('client/login');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load view with errors
        $this->view('client/register', $data);
      }
    } else {
      // Init data
      $data = [
        'fName' => '',
        'lName' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Load view
      $this->view('client/register', $data);
    }
  }

  public function login()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form
      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Init data
      $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'email_err' => '',
        'password_err' => '',
      ];

      // Validate Email
      if (empty($data['email'])) {
        $data['email_err'] = 'Pleae enter Email';
      }

      // Validate Password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter Password';
      }

      // Check for user/email
      if ($this->clientModel->findUserByEmail($data['email'])) {
        // User found
      } else {
        // User not found
        $data['email_err'] = 'Client Not Found';
      }

      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['password_err'])) {
        // Validated
        // Check and set logged in user
        $loggedInUser = $this->clientModel->login($data['email'], $data['password']);

        if ($loggedInUser) {
          // Create Session
          $this->createUserSession($loggedInUser);
        } else {
          $data['password_err'] = 'Password incorrect';

          $this->view('client/login', $data);
        }
      } else {
        // Load view with errors
        $this->view('client/login', $data);
      }
    } else {
      // Init data
      $data = [
        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => '',
      ];

      // Load view
      $this->view('client/login', $data);
    }
  }

  public function createUserSession($user)
  {
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_name'] = $user->name;
    redirect('pages');
  }

  public function logout()
  {
    unset($_SESSION['user_id']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    session_destroy();
    redirect('client/login');
  }

  public function myRaservations()
  {

    $reservations = $this->dataModel->getUserReservations($_SESSION['client_id']);
    $data = [
      'reservations' => $reservations,
    ];
    $this->view('pages/myRaservations', $data);
  }

  public function reservations($cruise_id)
  {


    $cruise = $this->cruiseModel->getCruise($cruise_id);
    // die(var_dump($cruise->id));
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $reservation_price = $this->reservationModel->getWholePrice($cruise_id, $_POST['type_of_room']);
      // exit;
      $data = [
        'price' => $reservation_price,
        'cruise_id' => $cruise_id,
        // 'type_of_room' => $_POST['type_of_room'],
        'user_id' => $_SESSION['user_id']
      ];

      $target_ship_id = $this->reservationModel->getShipId($cruise_id);


      $room_data = [
        'type_of_room' => $_POST['type_of_room'],
        'ship_id' => $target_ship_id
      ];



      // die(var_dump($cruise_id));
      if ($this->reservationModel->getShipCapacity($cruise_id)) {

        $room_number = $this->reservationModel->getReservedRooms($target_ship_id);
        $room_data['room_number'] = $room_number;
        if ($room_id = $this->reservationModel->createRoomAfterBooking($room_data)) {
          // if ($this->reservationModel->add($data)) {
          if ($this->reservationModel->increaseShip($data['cruise_id'])) {
            // $room_number = $this->reservationModel->getReservedRooms($target_ship_id);
            // $room_data['room_number'] = $room_number;
            // if ($this->reservationModel->createRoomAfterBooking($room_data)) {
            $data['room_id'] = $room_id;
            if ($this->reservationModel->add($data)) {
              flash('message', 'Booked With Success');
              redirect('pages/myRaservations');
            }
          }
        } else {
          flash('message', 'Error Booking!', 'alert alert-danger');
          redirect('pages/myRaservations');
        }
      } else {
        flash('message', 'This Ship is Full', 'alert alert-danger');
        redirect('pages/myRaservations');
      }
    } else {
      $cruise = $this->cruiseModel->getCruise($cruise_id);
      $room_types = $this->cruiseModel->getRoomTypes();
      $data = [
        'room_types' => $room_types,
        'cruise' => $cruise
      ];

      $this->view('pages/reservations', $data);
    }
  }


  public function cancel($reservation_id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      if ($this->reservationModel->getShipIdBeforeDeletingUserReservation($reservation_id) != false) {
        $ship_id = $this->reservationModel->getShipIdBeforeDeletingUserReservation($reservation_id);
        if ($this->reservationModel->cancelUserReservation($reservation_id) && $this->reservationModel->decreaseShip($ship_id)) {
          // flash('message', 'Canceled With Success');
          // die('Canceled With Success');
          redirect('pages/myRaservations');
        } else {
          flash('message', 'Out of Date!', 'alert alert-danger');

          redirect('pages/myRaservations');
          // echo json_encode(['error' => 'out of date!']);
        }
      }
    }
  }
}
