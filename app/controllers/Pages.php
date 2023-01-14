<?php
  class Pages extends Controller {
    private $dataModel;
    public function __construct(){
      $this->dataModel = $this->model('DataModel');
    }
    
    public function index(){
      $destinations = $this->dataModel->getData("destinations");
      $ports = $this->dataModel->getData("port");
      $data = [
        'title' => SITENAME,
        'destinations' => $destinations,
        'ports' => $ports,
      ];

     
      $this->view('pages/index', $data);
    }

    public function cruise(){
      $data = [
        'title' => 'Find Cruises',
      ];

      $this->view('pages/cruise', $data);
    }
    
    public function destinations(){
      $data = [
        'title' => 'Destinations',
      ];

      $this->view('pages/destinations', $data);
    }
  }