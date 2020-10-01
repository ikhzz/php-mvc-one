<?php

class Home extends Controller {
    public function index(){
        $data['title'] = 'Home';

        if(!(isset($_POST['movieSearch']))) {
            $data['api'] = $this->model('Api_model')->test12('1', 'movie');
        } else {
            $data['api'] = $this->model('Api_model')->test12($_POST['page'], $_POST['type']);
        }

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