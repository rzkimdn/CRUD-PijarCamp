<?php
include 'koneksi.php';

if(isset($_POST['update'])){
    // $id = mysqli_real_escape_string($koneksi, $_POST['id_produk']);
    //echo $id;
    
        $id_produk=$_POST['id_produk'];
        $nama_produk=$_POST['nama_produk'];
        $keterangan=$_POST['keterangan'];
        $jumlah=$_POST['jumlah'];
        $harga=$_POST['harga'];
        echo "$id_produk";

        $query="UPDATE produk SET nama_produk='$nama_produk', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah' where id_produk = '$id_produk';";
        $sql= mysqli_query($koneksi, $query);

        if ($sql){
            header("location: index.php");
          //echo 'data berhasil ditambahkan <a href="index.php">home</a>';
        }else{
            echo 'gagal';
        }
}
?>