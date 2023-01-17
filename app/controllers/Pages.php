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
    $this->rooms = $this->dataModel->getRoomData();
    $this->ports = $this->dataModel->getData("port");
    $this->itinerary = $this->dataModel->getData("itinerary");
    $this->cruises =  $this->dataModel->getCruises();
    $this->destinations  = $this->dataModel->getData("destinations");
  }


  public function index()
  {
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
}
