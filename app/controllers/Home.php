<?php

class Home extends Controller {
    public function index(){
        $data = $this->model('Api_model')->test5();
        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    public function show() {
        echo $_POST['data'];
    }
}