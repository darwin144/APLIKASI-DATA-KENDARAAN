<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  
  <body>

    <div class="container">
      <?php
      include('message.php');
      ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Data Kendaraan
                            <a href="index.php" class="btn btn-danger float-end">Back </a>

                        </h4>
                    </div>
                    <div class="card-body">
                      <form action="code2.php" method="POST">
                        <div class="mb-3">
                          <label> No. Registrasi Kendaraan</label>
                          <input type="text" name="nomor_registrasi_kendaraan" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label> Nama pemilik</label>
                          <input type="dropdown" name="nama_pemilik" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="warna_kendaraan">Warna Kendaraan</label>
                          <select class="form-control" name="warna_kendaraan">
                            <option>Merah</option>
                            <option>Hitam</option>
                            <option>Biru</option>
                            <option>Abu-abu</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label"> Alamat Pemilik kendaraan</label>
                          <textarea class="form-control" name="alamat"  rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                          <button type="submit" name="save_kendaraan" class="btn btn-primary"> Simpan </button>
                          <a href="index.php" class="btn btn-danger ">Kembali </a>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>