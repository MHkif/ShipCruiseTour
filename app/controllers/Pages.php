<?php
class Pages extends Controller
{
  private $dataModel;
  private $destinations;
  private $cruiseModel;
  private $ships;
  private $rooms;
  private $ports;
  private $roomType;
  private $itinerary;
  private $cruises;

  public function __construct()
  {
    $this->dataModel = $this->model('DataModel');
    $this->cruiseModel = $this->model('CruiseModel');
    $this->ships = $this->dataModel->getData("ship");
    $this->roomType = $this->dataModel->getData("room_type");
    $this->rooms = $this->dataModel->getData("room_type");
    $this->ports = $this->dataModel->getData("port");
    $this->itinerary = $this->dataModel->getData("itinerary");
    $this->cruises =  $this->dataModel->getCruises();

    $this->destinations  = $this->dataModel->getData("destinations");
  }


  public function index()
  {
    if (!isLoggedIn()) {
      redirect('pages/login');
    }
    $data = [
      'title' => SITENAME,
      'destinations' => $this->destinations,
      'ports' => $this->ports,
      'cruises' => $this->cruises,
      'ships' => $this->ships
    ];


    $this->view('pages/index', $data);
  }

  public function cruise()
  {
    $data = [
      'cruises' => $this->cruises,
      'rooms' => $this->rooms,
      'destinations' => $this->destinations,
      'ports' => $this->ports,
      'ships' => $this->ships
    ];

    $this->view('pages/cruise', $data);
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
            'cruises' => $filterByMonth,
            'rooms' => $this->rooms,
            'destinations' => $this->destinations,
            'ports' => $this->ports,
            'ships' => $this->ships
          ];

          $this->view('pages/cruise', $data);
          // die(print_r($result));
        } else {
          redirect('pages/cruise');
        }
      }
      // die("Fields Empty");
      redirect('pages/cruise');
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
            'cruises' => $filterByShip,
            'rooms' => $this->rooms,
            'destinations' => $this->destinations,
            'ports' => $this->ports,
            'ships' => $this->ships
          ];

          $this->view('pages/cruise', $data);
          // die(print_r($result));
        } else {
          redirect('pages/cruise');
        }
      }
      // die("Fields Empty");
      redirect('pages/cruise');
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
            'cruises' => $filterByPort,
            'rooms' => $this->rooms,
            'destinations' => $this->destinations,
            'ports' => $this->ports,
            'ships' => $this->ships
          ];

          $this->view('pages/cruise', $data);
          // die(print_r($result));
        } else {
          redirect('pages/cruise');
        }
      }
      // die("Fields Empty");
      redirect('pages/cruise');
    }
  }
  public function destinations()
  {
    $data = [
      'title' => 'Destinations',
      'destinations' => $this->destinations,
    ];

    $this->view('pages/destinations', $data);
  }

  public function myRaservations()
  {


    $reservations = $this->dataModel->getUserReservations($_SESSION['user_id']);
    // die(print_r($reservations));
    $data = [
      'reservations' => $reservations,
    ];
    $this->view('pages/myRaservations', $data);
  }

  public function reservations($param)
  {
    $id = $param[0];


    $cruise =  $this->model("DataModel")->getCruiseById($id);


    $data = [
      'cruise' => $cruise,
      'rooms' => $this->rooms,
      'ports' => $this->ports,
      'ships' => $this->ships
    ];

    $this->view('pages/reservations', $data, 'formLayout');
  }


  public function login()
  {
    $this->view('pages/login');
  }

  public function register()
  {
    $this->view('pages/register');
  }
}
