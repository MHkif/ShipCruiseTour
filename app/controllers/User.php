<?php
class User extends Controller
{
  private $userModel;
  private $dataModel;
  private $cruiseModel;
  private $rooms;
  private $cruises;
  private $ships;
  private $ports;
  private $destinations;

  public function __construct()
  {

    $this->userModel = $this->model('Users');
    $this->dataModel = $this->model('DataModel');
    $this->cruiseModel = $this->model('CruiseModel');
    $this->ships = $this->dataModel->getData("ship");
    $this->ports = $this->dataModel->getData("port");
    $this->cruises = $this->dataModel->getData("cruise");
    $this->destinations  = $this->dataModel->getData("destinations");
    $this->rooms = $this->dataModel->getData("room_type");
  }



  public function register()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Init data
      $data = [
        'first_name' => trim($_POST['first_name']),
        'last_name' => trim($_POST['last_name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm']),
        'first_name_err' => '',
        'last_name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];


      if ($this->userModel->findUserByEmail($data['email'])) {
        $data['email_err'] = 'Email is already taken';
        // die($data['email_err']);
      }
      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {

        // $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Register User
        if ($this->userModel->register($data)) {
          redirect('pages/login');
        } else {
          die("Not Registred");
          $this->view('pages/register', $data);
          // redirect('pages/register');
        }
      } else {
        // die("Something missing");
        $this->view('pages/register', $data);
      }
    }
  }



  public function login()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


      $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'email_err' => '',
        'password_err' => '',

      ];


      if ($this->userModel->findUserByEmail($data['email'])) {

        $loggedInUser = $this->userModel->login($data['email'], $data['password']);
        if ($loggedInUser) {
          // die('Logged in');
          // Create Session
          $this->createUserSession($loggedInUser);
        } else {
          $data['password_err'] = 'Passowrd Incorrect';
          // die($data['password_err']);
          $this->view('pages/login', $data);
          // redirect('pages/login');
        }
      } else {
        $data['email_err'] = 'This user does not exist';
        // die($data['email_err']);
        $this->view('pages/login', $data);
        // redirect('pages/login');
      }
    }
  }


  public function searchCruise()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $params = [
        // 'destination' => trim($_POST['destination']),
        'port' => trim($_POST['port']),
        'cruiseDate' => $_POST['cruiseDate'],

      ];

      $data = [];

      if (!empty($params['port']) && !empty($params['cruiseDate'])) {
        // die(print_r($params));

        if ($this->cruiseModel->SearchCruises($params)) {
          // die('HOLLA');
          $cruises = $this->cruiseModel->SearchCruises($params);

          $data = [
            'cruises' => $cruises,

            // 'destinations' => $this->destinations,
            'ports' => $this->ports,
            'ships' => $this->ships
          ];
          // die(print_r($cruises));
          $this->view('pages/cruise', $data);
          // die(print_r($result));
        } else {
          redirect('pages/cruise');
        }
      }
      die("Fields Empty");
      // redirect('pages/cruise');
    } else {
      die('Here We Go Again');
    }
  }



  public function filterMonth()
  {
    // die(var_dump(intval($date[1])));
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $params = [
        // 'destination' => trim($_POST['destination']),
        'date' => trim($_POST['filterDate']),

      ];

     

      if (!empty($params['date'])) {
        // die(var_dump(intval(explode("-", $params['date'])[1])));

        if ($filterByMonth = $this->cruiseModel->filterByMonth(intval(explode("-", $params['date'])[1]))) {

          $data = [
            'title' => SITENAME,
            'filter' => $filterByMonth,
            "cruises" => $this->cruises,
            'ports' => $this->ports,
            'ships' => $this->ships,
            'destinations' => $this->destinations,
          ];

          $this->view('pages/index', $data);
          // die(print_r($result));
        } else {
          redirect('pages/');
        }
      }
      // die("Fields Empty");
      redirect('pages/');
    }
  }

  public function filterShip()
  {
    // die(var_dump($_POST['filterShip']));
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $params = [
        // 'destination' => trim($_POST['destination']),
        'ship' => trim($_POST['filterShip']),

      ];



      if (!empty($params['ship'])) {
        if ($filterByShip = $this->cruiseModel->filterByShip($params['ship'])) {


          $data = [
            'title' => SITENAME,
            'filter' => $filterByShip,
            "cruises" => $this->cruises,
            'ports' => $this->ports,
            'ships' => $this->ships,
            'destinations' => $this->destinations,
          ];

          $this->view('pages/index', $data);
        } else {
          redirect('pages/index');
        }
      }
      die("Fields Empty");
      // redirect('pages/cruise');
    }
  }

  public function filterPort()
  {
    // die(var_dump($_POST['filterShip']));
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $params = [
        // 'destination' => trim($_POST['destination']),
        'port' => trim($_POST['filterPort']),

      ];

      $data = [];

      if (!empty($params['port'])) {
        // die(print_r($params));

        if ($filterByPort = $this->cruiseModel->filterByPort($params['port'])) {


          $data = [
            'title' => SITENAME,
            'filter' => $filterByPort,
            "cruises" => $this->cruises,
            'ports' => $this->ports,
            'ships' => $this->ships,
            'destinations' => $this->destinations,
          ];

          $this->view('pages/index', $data);
        } else {
          redirect('pages/index');
        }
      }
      die("Fields Empty");
      // redirect('pages/cruise');
    }
  }



  public function createUserSession($user)
  {
    if ($user->role) {

      $_SESSION['role'] = $user->role;
      $_SESSION['admin_id'] = $user->id;
      $_SESSION['admin_email'] = $user->email;
      $_SESSION['admin_name'] = $user->first_name;
      redirect('admin/cruisePanel');
    } else {

      $_SESSION['role'] = $user->role;
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->first_name . " " . $user->last_name;
      redirect('pages');
    }
  }

  public function logout()
  {

    if ($_SESSION['role']) {
      unset($_SESSION['admin_id']);
      unset($_SESSION['admin_email']);
      unset($_SESSION['admin_name']);
    } else {
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
    }
    unset($_SESSION['role']);
    session_destroy();
    redirect('pages');
  }
}
