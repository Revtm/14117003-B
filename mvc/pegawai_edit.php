<?php
include "controller_pegawai.php";
$nip = $_GET['nip'];
$pegawai = new controller_pegawai();
$pegawai->edit($nip);
?>