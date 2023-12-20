<?php
$host= 'localhost';
$user= 'root';
$pass= '';
$db= 'pijarcamp';
$koneksi=mysqli_connect($host,$user,$pass,$db);
if($koneksi){
 // echo'koneksi berhasil';
}
mysqli_select_db($koneksi, $db);

?>