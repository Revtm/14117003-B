<?php
    class view_pegawai{
        function show_pegawai($data){
          echo "<a href=\"tambah_pegawai.php\" >[Tambah Pegawai]</a> </br>";

            foreach ($data as $x) {
              $nip = $x['nip'];
              $nama = $x['nama'];

                echo $nama;
                echo "<br />";
                echo $nip;
                echo "</br >";
                echo "<a href=\"pegawai_edit.php?nip=$nip\" >[edit]</a>";
                echo "<a href=\"pegawai_delete.php?nip=$nip\" >[delete]</a>";
                echo "</br></br>";
            }
        }

        function edit_pegawai($data){
          foreach ($data as $x){
            $nama = $x['nama'];
            $nip = $x['nip'];
          }

            echo "
            <form action=\"edit_pegawai.php\" method=\"post\">
              nip: <input type=\"text\" name=\"nip\" value=\"$nip\" readonly>
              nama: <input type=\"text\" name=\"nama\" value=\"$nama\">
              <button type=\"submit\" name=\"submit\">submit</button> </br>
            </form>
            ";
        }

        function tambah_pegawai(){
            echo "
            <form action=\"pegawai_tambah.php\" method=\"post\">
              nip: <input type=\"text\" name=\"nip\" >
              nama: <input type=\"text\" name=\"nama\" >
              <button type=\"submit\" name=\"submit\">submit</button> </br>
            </form>
            ";
        }
    }
?>
