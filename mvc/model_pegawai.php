<?php



class model_pegawai{
    public $konek;


    function __construct(){
      $this-> konek = mysqli_connect("localhost", "root", "", "pegawai");
    }
    function getPegawai(){
      $query = mysqli_query($this-> konek, "select * from pegawai");

      return $query;
    }

    function getNama(){
        // select * from mahasiswa where ....
        $query = mysqli_query($this-> konek, "select nama from pegawai");

        return $query;
    }

    function getNip(){
        $query = mysqli_query($this-> konek, "select nip from pegawai");

        // select * from mahasiswa where ....
        return $query;
    }
    function getBynip($nip){
      $query = mysqli_query($this-> konek, "select * from pegawai where nip = '$nip'");

        // select * from pegawai where nip = $nip
      return $query;
    }

    function tambah($nip, $nama){
      $query =  mysqli_query($this-> konek, "insert into pegawai values('$nip', '$nama')");
    }

    function update($nip, $nama){
      $query =  mysqli_query($this-> konek, "update pegawai set nama='$nama' where nip = '$nip'");
    }

    function delete($nip){
      $query =  mysqli_query($this-> konek, "delete from pegawai where nip = '$nip'");
    }
}

?>
