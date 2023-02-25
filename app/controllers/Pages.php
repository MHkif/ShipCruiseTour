<?php
class Pages extends Controller
{
  private $dataModel;
  private $destinations;
  private $clientModel;
  private $ships;
  private $rooms;
  private $ports;
  private $roomType;
  private $itinerary;
  private $cruises;

  public function __construct()
  {
    $this->dataModel = $this->model('DataModel');
    $this->clientModel = $this->model('Clients');
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
