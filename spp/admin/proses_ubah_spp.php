<?php
    if($_POST){
        $id_spp=$_POST["id_spp"];
        $id_kelas=$_POST["id_kelas"];
        $angkatan=$_POST["angkatan"];
        $tahun=$_POST["tahun"];
        $nominal=$_POST["nominal"];

            include "koneksi.php";
            $update=mysqli_query($koneksi, "UPDATE spp set id_spp='".$id_spp."', id_kelas='".$id_kelas."',angkatan='".$angkatan."', tahun='".$tahun."', nominal='".$nominal."' where id_spp= '".$id_spp."'") or die(mysqli_error($koneksi));
                if($update){
        echo "<script>alert('Berhasil update');location.href='tampil_spp.php';</script>";
        }      else {
        echo "<script>alert('Gagal update');location.href='ubah_spp.php?id_spp=".$id_spp."';</script>";
        }
    }
 
        
          
    ?>

