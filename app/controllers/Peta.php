<?php
class Peta extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Peta';
        $data['peta'] = $this->model('Peta_model')->getAllPeta();
        $this->view('templates/header', $data);
        $this->view('peta/index', $data);
        $this->view('templates/footer');
    }

    public function detail($index)
    {
        $data['judul'] = 'Detail Peta';
        $data['peta'] = $this->model('Peta_model')->getDetail($index);

        $this->view('templates/header', $data);
        $this->view('peta/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Peta_model')->tambahDataPeta($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/peta');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'warning');
            header('Location: ' . BASEURL . '/peta');
            exit;
        }
    }
    public function ubah()
    {
        if ($this->model('Peta_model')->ubahDataPeta($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/peta');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'warning');
            header('Location: ' . BASEURL . '/peta');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('Peta_model')->hapusDataPeta($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/peta');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'warning');
            header('Location: ' . BASEURL . '/peta');
            exit;
        }
    }
    public function cari()
    {
        if (($data_cari = $this->model('Peta_model')->cari($_POST)) > 0) {
            $data['judul'] = 'Daftar Peta';
            $data['peta'] = $data_cari;
            $this->view('templates/header', $data);
            $this->view('peta/index', $data);
            $this->view('templates/footer');
            exit;
        } else {
            echo "<script>alert('Data Tidak Ditemukan');</script>";
            // header('Location: '. BASEURL .'/peta');
        }
    }

    function getUbah()
    {
        echo json_encode($this->model('Peta_model')->getDetail($_POST['id']));
        // echo "ehehehe";
    }

}
