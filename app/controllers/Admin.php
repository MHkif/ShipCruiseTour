<?php
class Admin extends Controller
{
  private $adminModel;
  public function __construct()
  {
    $this->adminModel = $this->model('Admins');
  }

  public function dashboard()
  {
    // if(isLoggedIn()){
    //   redirect('pages');
    // }

    $data = [
      'title' => SITENAME,
    ];

    $this->view('admin/dashboard', $data);
  }
  public function reservations()
  {
    // if(isLoggedIn()){
    //   redirect('pages');
    // }

    $data = [
      'title' => SITENAME,
    ];

    $this->view('admin/reservations', $data);
  }

  public function cruisePanel()
  {
    // if(isLoggedIn()){
    //   redirect('pages');
    // }

    $data = [
      'title' => SITENAME,
    ];

    $this->view('admin/cruisePanel', $data);
  }

  public function statistics()
  {
    // if(isLoggedIn()){
    //   redirect('pages');
    // }

    $data = [
      'title' => SITENAME,
    ];

    $this->view('admin/statistics', $data);
  }

  public function inboxPanel()
  {
    // if(isLoggedIn()){
    //   redirect('pages');
    // }

    $data = [
      'title' => SITENAME,
    ];

    $this->view('admin/inboxPanel', $data);
  }

  public function usersPanel()
  {
    // if(isLoggedIn()){
    //   redirect('pages');
    // }

    $data = [
      'title' => SITENAME,
    ];

    $this->view('admin/usersPanel', $data);
  }

  public function shipPanel()
  {
    // if(isLoggedIn()){
    //   redirect('pages');
    // }

    $data = [
      'title' => SITENAME,
    ];

    $this->view('admin/shipPanel', $data);
  }

  public function portPanel()
  {
    // if(isLoggedIn()){
    //   redirect('pages');
    // }

    $data = [
      'title' => SITENAME,
    ];

    $this->view('admin/portPanel', $data);
  }

  public function roomPanel()
  {
    // if(isLoggedIn()){
    //   redirect('pages');
    // }

    $data = [
      'title' => SITENAME,
    ];

    $this->view('admin/roomPanel', $data);
  }

  public function settings()
  {
    // if(isLoggedIn()){
    //   redirect('pages');
    // }

    $data = [
      'title' => SITENAME,
    ];

    $this->view('admin/settings', $data);
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
        if ($this->adminModel->findUserByEmail($data['email'])) {
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
        if ($this->adminModel->register($data)) {
          flash('register_success', 'You are registered and can log in');
          redirect('admin/login');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load view with errors
        $this->view('admin/register', $data);
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
      $this->view('admin/register', $data);
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
      // print_r($data);
      // exit;
    

      // Validate Email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter Email';
      }

      // Validate Password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter Password';
      }

      // Check for user/email
      if ($this->adminModel->findUserByEmail($data['email'])) {
        
      } else {
        // User not found
        $data['email_err'] = 'Admin Not Found';
      }

      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['password_err'])) {
        // Validated
        // Check and set logged in user
        $loggedInUser = $this->adminModel->login($data['email'], $data['password']);

        if ($loggedInUser) {
          // Create Session
          $checkUser = $this->adminModel->checkUser($loggedInUser->id);
          if($checkUser){
            $this->createAdminSession($loggedInUser);
          }else{

            $this->createUserSession($loggedInUser);
          }
        } else {
          $data['password_err'] = 'Password incorrect';

          // $this->view('admin/login', $data);
        }
      } else {
        // Load view with errors
        // $this->view('admin/login', $data);
        // Show Modal
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
      // $this->view('admin/login', $data);
    }
  }

  public function createUserSession($user)
  {
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_name'] = $user->name;
    // redirect('dashboard');
  }

  public function createAdminSession($user)
  {
    if($user->role){
      $_SESSION['role'] = $user->role;
      $_SESSION['admin_id'] = $user->id;
      $_SESSION['admin_email'] = $user->email;
      $_SESSION['admin_name'] = $user->name;
      redirect('admin/dashboard');
    }else{
      die("Not an Admin");
      exit;
    }

   
  }
  public function logout()
  {
    $checkUser = $this->adminModel->checkUser($loggedInUser->id);
    if($checkUser){
      $this->createAdminSession($loggedInUser);
    }else{

      $this->createUserSession($loggedInUser);
    }
    unset($_SESSION['user_id']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    session_destroy();
    redirect('pages/');
  }
}
