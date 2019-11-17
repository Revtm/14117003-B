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

    //panggil update untuk edit data di database
    function update($nip, $nama){
      $model_pegawai = new model_pegawai();
      $berhasil = new view_pegawai();

      $berhasil-> berhasil($model_pegawai-> update($nip,$nama));

    }

    //panggil halaman edit
    function edit($nip){
        $model_pegawai = new model_pegawai();
        $data= $model_pegawai->getBynip($nip);
        $view_pegawai = new view_pegawai();
        $view_pegawai->edit_pegawai($data);
    }


    //panggil delete untuk hapus data di database
    function delete($nip){
      $model_pegawai = new model_pegawai();
      $berhasil = new view_pegawai();
      $berhasil-> berhasil($model_pegawai-> delete($nip));
    }


    function tambah(){
      $view_pegawai = new view_pegawai();
      $view_pegawai->tambah_pegawai();
    }

    function addon($nip, $nama){
      $model_pegawai = new model_pegawai();
      $berhasil = new view_pegawai();
      $berhasil-> berhasil($model_pegawai-> tambah($nip, $nama));
    }
}

?>
