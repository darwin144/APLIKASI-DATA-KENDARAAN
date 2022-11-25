<?php
    session_start();
    require 'dbconnection.php';
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
                        <h4>Edit Data Kendaraan
                            <a href="index.php" class="btn btn-danger float-end">Back </a>

                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id'])){
                            $Nomor =mysqli_real_escape_string($con,$_GET['id']);
                            $query = "SELECT * FROM data_kendaraan WHERE Nomor='$Nomor'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $kendaraan= mysqli_fetch_array($query_run);
                                ?>
                                <form action="code2.php" method="POST">
                                    <input type="hidden" name="Nomor" value="<?=$kendaraan['Nomor']; ?>">

                                    <div class="mb-3">
                                      <label> Nomor Registrasi Kendaraan</label>
                                        <input type="text" name="Nomor_Registrasi_Kendaraan" value="<?=$kendaraan['Nomor_Registrasi_Kendaraan'] ;?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> Nama pemilik</label>
                                        <input type="text" name="Nama_pemilik" value="<?=$kendaraan['Nama_pemilik'] ;?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Alamat" class="form-label"> Alamat Pemilik kendaraan</label>
                                        <input type="Textarea" row="2" name="Alamat" value="<?=$kendaraan['Alamat'] ;?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_kendaraan" class="btn btn-primary"> Update </button>
                                        <a href="index.php" class="btn btn-danger ">Kembali </a>
                                    </div>
                                </form>
                                <?php
                            }
                            else
                            {
                                echo 'No Data';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>