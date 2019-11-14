<?php
include "model_pegawai.php";
$nip = $_POST['nip'];
$nama = $_POST['nama'];

$pegawai = new model_pegawai();
$pegawai->tambah($nip, $nama);

echo "berhasil! <a href=\"pegawai.php\">kembali ke halaman awal</a>";

?>
