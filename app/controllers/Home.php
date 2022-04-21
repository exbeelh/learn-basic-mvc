<?php
class Home extends Controller {

    public function index() 
    {
        $data['title'] = "Home";
        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}