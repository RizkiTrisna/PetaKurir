<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home Index';
        $data['peta'] = $this->model('Peta_model')->getAllPeta();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
