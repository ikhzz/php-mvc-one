<?php

class Home extends Controller {
  public function index(){
    $data['title'] = 'Home';

    if(!(isset($_POST['movieSearch']))) {
      $data['api'] = $this->model('Api_model')->topRated('1', 'movie');
    } else {
      $data['api'] = $this->model('Api_model')->topRated($_POST['page'], $_POST['type']);
    }

    if(isset($_POST['page']) && isset($_POST['type'])) {
      $data['page'] = $_POST['page'];
      $data['type'] = $_POST['type'];
    }
        
    $this->view('templates/header',$data);
    $this->view('home/index', $data);
    $this->view('templates/footer');      
  }

  public function upcoming() {
    $data['title'] = 'Upcoming';

    if(!(isset($_POST['movieSearch']))) {
      $data['api'] = $this->model('Api_model')->upComing('1');
    } else {
      $data['api'] = $this->model('Api_model')->upComing($_POST['page']);
    }

    if(isset($_POST['page'])) {
      $data['page'] = $_POST['page'];
    }

    $this->view('templates/header', $data);
    $this->view('home/upcoming', $data);
    $this->view('templates/footer'); 
  }
}