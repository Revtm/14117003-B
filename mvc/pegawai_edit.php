<?php
include "controller_pegawai.php";

if(isset($_POST['nama'])&&isset($_POST['nip'])){
  $nama = $_POST['nama'];
  $nip = $_POST['nip'];

  $pegawai = new controller_pegawai;
  $pegawai-> update($nip,$nama);

}else if(isset($_GET['nip'])){
  $nip = $_GET['nip'];
  $pegawai = new controller_pegawai();
  $pegawai->edit($nip);
}else{

}

?>
