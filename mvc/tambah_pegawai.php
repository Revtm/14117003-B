<?php
include "controller_pegawai.php";

if(isset($_POST['nip']) && isset($_POST['nama'])){
  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $pegawai = new controller_pegawai();
  $pegawai->addon($nip, $nama);
}else{
  $pegawai = new controller_pegawai();
  $pegawai->tambah();
}

?>
