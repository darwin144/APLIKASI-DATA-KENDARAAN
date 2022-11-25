<?php

session_start();
require 'dbconnection.php';

    if(isset($_POST['delete'])){
        $kendaraan = mysqli_real_escape_string($con, $_POST['delete']);

        $query = "DELETE FROM data_kendaraan WHERE Nomor ='$kendaraan' ";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] = "DELETE SUCCESSFULLY";
            header("Location: index.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "404 ";
            header("Location: index.php");
            exit(0);
        }
    }
?>