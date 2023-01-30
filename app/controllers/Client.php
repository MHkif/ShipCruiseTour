<?php


class Client extends Controller
{
  private $clientModel;
  private $dataModel;
  private $ships;
  private $rooms;
  private $ports;
  private $roomType;
  private $itinerary;

  public function __construct()
  {
    $this->dataModel = $this->model('DataModel');
    $this->clientModel = $this->model('Clients');
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

  public function reserveCruise($data)
  {
    $id = $data[0];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // print_r($id);
      // exit;

      $params = [
        'user_id' => $_SESSION['user_id'],
        'reservePrice' => trim($_POST['price']),
        'cruiseId' => $id,
        'room_id' => trim($_POST['room_id'])

      ];

      $data = [];

      $result = $this->clientModel->reserve($params);
      if ($result) {
        // print_r($result);
        // exit;

        redirect('pages/cruise');
        // die(print_r($result));
      } else {
        redirect('pages/cruise');
      }
    } else {
      die('Here We Go Again');
    }
  }





  public function cancelation($data)
  {
    
    $id = $data[0];

    $result = $this->clientModel->cancelReservation($id);
    if ($result) {

      redirect('pages/myRaservations');
    } else {
      redirect('pages/myRaservations');
    }
  }
}
