<?php

include "model_pegawai.php";
include "view_pegawai.php";

class controller_pegawai{
    function get(){
        $model_pegawai = new model_pegawai();
        $data = $model_pegawai->getPegawai();
        // $data['nama']= $model_pegawai->getNama();
        // $data['nip']= $model_pegawai->getNip();
        $view_pegawai = new view_pegawai();
        $view_pegawai->show_pegawai($data);
    }
    function update($nip, $nama){
      $model_pegawai = new model_pegawai();
      $model_pegawai-> update($nip,$nama);

      echo "berhasil! <a href=\"pegawai.php\">kembali ke halaman awal</a>";


    }

    function delete($nip){
      $model_pegawai = new model_pegawai();
      $model_pegawai-> delete($nip);
      echo "berhasil! <a href=\"pegawai.php\">kembali ke halaman awal</a>";

    }

    function edit($nip){
        $model_pegawai = new model_pegawai();
        $data= $model_pegawai->getBynip($nip);
        $view_pegawai = new view_pegawai();
        $view_pegawai->edit_pegawai($data);
    }

    function tambah(){
      $view_pegawai = new view_pegawai();
      $view_pegawai->tambah_pegawai();
      echo "berhasil! <a href=\"pegawai.php\">kembali ke halaman awal</a>";

    }
}

?>
