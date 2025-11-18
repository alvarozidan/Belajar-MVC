<?php

class About{

    public function index($nama = 'Admin', $pekerjaan = 'administrasi'){
        echo "Helo guwa $nama dan pekerjaan saya adalah $pekerjaan";
    }

    public function page(){
        echo 'About/page';
    }
}