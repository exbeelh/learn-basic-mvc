<?php
class About extends Controller {
    
    public function index ($name, $job, $age) {
        $data['title'] = "About Me";
        $data['name'] = $name;
        $data['job'] = $job;
        $data['age'] = $age;
        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() {
        $data['title'] = "This is About page!";
        $this->view('templates/header');
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}