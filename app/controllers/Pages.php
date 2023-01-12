<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      // if(isLoggedIn()){
      //   redirect('pages');
      // }

      $data = [
        'title' => SITENAME,
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