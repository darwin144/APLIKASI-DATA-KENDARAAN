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

    <div class="container">
      <?php
      include('message.php');
      ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Data Kendaraan</h4>
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

                                    <div class="mb-3">
                                        <label> Nomor Registrasi Kendaraan</label>
                                        <p class="form-control"> 
                                            <?=$kendaraan['Nomor_Registrasi_Kendaraan'] ;?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label> Nama pemilik</label>
                                        <p class="form-control"> 
                                            <?=$kendaraan['Nama_pemilik'] ;?>
                                         </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Alamat" class="form-label"> Alamat Pemilik kendaraan</label>
                                        <p class="form-control"> 
                                             <?=$kendaraan['Alamat'] ;?>
                                         </p>
                                    </div>
                                    <div class="mb-3">
                                        <a href="index.php" class="btn btn-danger ">Kembali </a>
                                    </div>
                                
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