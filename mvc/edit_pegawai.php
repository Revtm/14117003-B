<?php
  include 'controller_pegawai.php';
  $nama = $_POST['nama'];
  $nip = $_POST['nip'];

  $pegawai = new controller_pegawai;
  $pegawai-> update($nip,$nama);
 ?>
