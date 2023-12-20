<?php
include 'koneksi.php';

if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "add"){
        
        $nama_produk=$_POST['nama_produk'];
        $keterangan=$_POST['keterangan'];
        $jumlah=$_POST['jumlah'];
        $harga=$_POST['harga'];

        $query="INSERT INTO produk VALUES (null, '$nama_produk','$keterangan','$harga','$jumlah')";
        $sql= mysqli_query($koneksi,$query);

        if ($sql){
            header("location: index.php");
            //echo 'data berhasil ditambahkan <a href="index.php">home</a>';
        }else{
            echo 'gagal';
        }

    }else if($_POST['aksi'] == "edit"){

        $id_produk=$_POST['id_produk'];
        $nama_produk=$_POST['nama_produk'];
        $keterangan=$_POST['keterangan'];
        $jumlah=$_POST['jumlah'];
        $harga=$_POST['harga'];
        //echo "edit data";

        $query="UPDATE produk SET nama_produk='$nama_produk', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah' where id_produk = '$id_produk';";
        $sql= mysqli_query($koneksi, $query);

        if ($sql){
            header("location: index.php");
            //echo 'data berhasil ditambahkan <a href="index.php">home</a>';
        }else{
            echo 'gagal';
        }
    }
}

if(isset($_GET['hapus'])){
    $id_produk = $_GET ['hapus'];
    $query = "DELETE FROM produk where id_produk='$id_produk';";
    $sql = mysqli_query($koneksi, $query);

    if ($sql){
        header("location: index.php");
        //echo 'data berhasil ditambahkan <a href="index.php">home</a>';
    }else{
        echo 'gagal';
    }
    //echo "hapus data";
}
?>