<?php
class Peta extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Peta';
        $data['peta'] = $this->model('Peta_model')->getAllPeta();
        $this->view('templates/header',$data);
        $this->view('peta/index', $data);
        $this->view('templates/footer');
    }
}
