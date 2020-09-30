<?php

class Home extends Controller {
    public function index(){
        $data['title'] = 'Home';
        $data['api'] = $this->model('Api_model')->test12();
        $this->view('templates/header',$data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    public function test() {
        $data = $this->model('Api_model')->test6();
        $this->view('templates/header');
        $this->view('home/test', $data);
        $this->view('templates/footer');
    }
}