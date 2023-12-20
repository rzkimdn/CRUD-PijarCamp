
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
        <p class="h3 mt-4 mb-4">CRUD DATABASE PRODUK</p>
        <p class="h5">TAMBAH DATABASE PRODUK</p>
       <form method="POST" action="proses.php">
        <div class="mb-3 row">
              <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
              <div class="col-sm-10">
                <input type="text" name="nama_produk" class="form-control" id="nama_produk">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
              <div class="col-sm-10">
                <input type="text" name="keterangan" class="form-control" id="keterangan">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
              <div class="col-sm-10">
                <input type="text" name="jumlah" class="form-control" id="jumlah">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="harga" class="col-sm-2 col-form-label">Harga</label>
              <div class="col-sm-10">
                <input type="text" name="harga" class="form-control" id="harga">
              </div>
          </div>
          <a href="index.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Back</a>
          <button type="submit" name="aksi" value="add" class="btn btn-primary"><i class="fa fa-floppy-o" area-hidden="true"></i> Tambah</button>
        </form> 
    </div>

      </body>
</html>