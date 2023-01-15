<?php
class User extends Controller
{
  private $userModel;
  public function __construct()
  {
    $this->userModel = $this->model('Users');
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
        'first_name' => trim($_POST['first_name']),
        'last_name' => trim($_POST['last_name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'first_name_err' => '',
        'last_name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Validate Email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      } else {
        // Check email
        if ($this->userModel->findUserByEmail($data['email'])) {
          $data['email_err'] = 'Email is already taken';
          echo "Email is already taken";
        }
      }

      // Validate Name
      if (empty($data['first_name'])) {
        $data['first_name_err'] = 'Please enter your First Name';
      }
      if (empty($data['last_name'])) {
        $data['last_name_err'] = 'Please enter your Last Name';
      }

      // Validate Password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter a Password';
      } elseif (strlen($data['password']) < 6) {
        $data['password_err'] = 'Password must be at least 6 characters';
      }

      // Validate Confirm Password
      if (empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Please Confirm your Password';
      } else {
        if ($data['password'] != $data['confirm_password']) {
          $data['confirm_password_err'] = 'Passwords do not match';
        }
      }

      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
        // Validated

        // Hash Password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // Register User
        if ($this->userModel->register($data)) {
          flash('register_success', 'You are registered and can log in');
          redirect('pages');
        } else {
          var_dump('Something went wrong, User Not Registered');
        }
      } else {
        // Load view with errors
        // $this->view('admin/register', $data);
        var_dump('Something went wrong, Load view with errors');
        // redirect('pages/');
        // Show Modal
      }
    } else {
      // Init data
      $data = [
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'first_name_err' => '',
        'last_name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];
      var_dump('Load the Else view, that must be removed');
      // Load view
      // $this->view('pages', $data);
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
      if ($this->userModel->findUserByEmail($data['email'])) {
        var_dump('User Found');
        // Here we have a user but we need to check his password

      } else {
        // User not found
        $data['email_err'] = 'User Not Found';
        var_dump('User Not Found Redirecting to pages');
        // here you have to passe data Not Found
        // redirect('pages');
      }

      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['password_err'])) {
        // Validated
        // Check and set logged in user
        $loggedInUser = $this->userModel->login($data['email'], $data['password']);

        if ($loggedInUser) {
          // Create Session
          // die('Yes Matched Passwords');
          $this->createUserSession($loggedInUser);
        } else {
          $data['password_err'] = 'Password incorrect';
          var_dump('Password incorrect');
          // here you have to passe data Password incorrect
          // redirect('pages');
        }
      } else {
        // Load view with errors
        // $this->view('admin/login', $data);
        var_dump('Email & Password  incorrect');
        // redirect('pages/');
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
      $this->view('pages', $data);
    }
  }



  public function createUserSession($user)
  {
    // echo '<pre>';
    // var_dump($user);
    // echo '</pre>';
    // exit;
    if ($user->role) {
      // echo '<pre>';
      // var_dump($user);
      // echo ' Here is An Admin';
      // echo '</pre>';
      // exit;
      $_SESSION['role'] = $user->role;
      $_SESSION['admin_id'] = $user->id;
      $_SESSION['admin_email'] = $user->email;
      $_SESSION['admin_name'] = $user->first_name;
      redirect('admin/dashboard');
    } else {
      //   echo '<pre>';

      // var_dump($user);
      // echo '</pre>';
      // exit;
      $_SESSION['role'] = $user->role;
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->first_name;
      redirect('pages');
    }
  }
  public function logout()
  {

    // $checkUser = $this->userModel->checkUser($loggedInUser->id);
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
