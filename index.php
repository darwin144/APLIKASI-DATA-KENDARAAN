<?php
  session_start();
  require 'dbconnection.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">

       <?php include('message.php'); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Aplikasi Data Kendaraan
              <div class="mb-3">
                <h6 > Nomor Registrasi </h6>
                <input type="text" name="Nomor_Registrasi"  class="form-control">
              </div>
              <div class="mb-3">
                <label> Nama Pemilik </label>
                <input type="text" name="Nomor_Registrasi"  class="form-control">
              </div>  
              <div class="XXX">
                  <button type="submit" name="search" class="btn btn-primary float-end mx-auto"> Search </button>
                  <a href="Kendaraan_CreateData.php" class="btn btn-primary float-end "> Add Data</a>
                </div>             
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-triped">
                <thead>
                  <tr>
                    <th> No</th>
                    <th> Nomor Registrasi</th>
                    <th> Nama Pemilik</th>
                    <th> Alamat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM data_kendaraan ORDER BY Nomor ASC";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                      foreach($query_run as $kendaraan)
                      {
                        ?>
                          <tr>
                            <td><?= $kendaraan['Nomor']; ?></td>
                            <td><?= $kendaraan['Nomor_Registrasi_Kendaraan']; ?></td>
                            <td><?= $kendaraan['Nama_pemilik']; ?></td>
                            <td><?= $kendaraan['Alamat']; ?></td>
                            <td>
                              <a href="detail.php?id=<?= $kendaraan['Nomor']; ?>" class="btn btn-info btn-sm">Detail</a>
                              <a href="Edit.php?id=<?= $kendaraan['Nomor']; ?>" class="btn btn-success btn-sm">Edit</a>
                              <form action="code2.php" method="POST" class="d-inline">
                                <button onclick="javascript:return confirm('Are you sure you want to delete this comment?')" type="submit" name="delete" value="<?=$kendaraan['Nomor']?>" class="btn btn-danger btn-sm" >Delete</a>
                            </td>
                          </tr>
                        <?php
                      }
                    }
                    else
                    {
                      echo "<h5>No Data Found</h5>";
                    }
                  ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
    <script >
      function ConfirmDelete(self){
        var id =self.getAttribut('value');
        document.get 
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>