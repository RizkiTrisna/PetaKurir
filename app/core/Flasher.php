<?php

class Flasher {

    //static agar tidak perlu melakukan instasiasi ketika memanggil function

    public static function setFlash($pesan, $aksi, $tipe){
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash(){
        if(isset($_SESSION['flash'])){
            echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show" role="alert">
                    Data peta '.$_SESSION['flash']['pesan'].' <strong>'.$_SESSION['flash']['aksi'].'</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
        unset($_SESSION['flash']);
    }
}