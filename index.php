<?php
include 'koneksi.php';

$query = "SELECT * from produk;";
$sql = mysqli_query($koneksi, $query);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
  <body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="Pijar Camp.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Pijar Camp Seleksi
          </a>
        </div>
    </nav>
     <div class="container">
        <p class="h3 mt-4">CRUD DATABSE PRODUK</p>
        <a href="tambah.php" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
           <?php 
           while($result = mysqli_fetch_assoc($sql)){
           ?>
              <tr>
                <th scope="row"><?php echo $result['id_produk'];?></th>
                <td><?php echo $result['nama_produk'];?></td>
                <td><?php echo $result['keterangan'];?></td>
                <td><?php echo $result['harga'];?></td>
                <td><?php echo $result['jumlah'];?></td>
                <td><a href="edit.php?ubah=<?php echo $result['id_produk'];?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                    <a href="proses.php?hapus=<?php echo $result['id_produk'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
              </tr>
            </tbody>
           <?php
           }
           ?>
          </table>
    </div>

      </body>
</html>