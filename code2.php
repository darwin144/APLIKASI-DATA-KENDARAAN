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

if(isset($_POST['update_kendaraan'])){

    $Nomor = mysqli_escape_string($con, $_POST['Nomor']);
    $nomor_registrasi_kendaraan =  mysqli_escape_string($con, $_POST['Nomor_Registrasi_Kendaraan']);
    $nama_pemilik =  mysqli_escape_string($con, $_POST['Nama_pemilik']);
    $alamat =  mysqli_escape_string($con, $_POST['Alamat']);

    $query = "UPDATE data_kendaraan SET Nomor_Registrasi_Kendaraan ='$nomor_registrasi_kendaraan', Nama_pemilik='$nama_pemilik', Alamat ='$alamat' WHERE Nomor ='$Nomor'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "UPDATED SUCCESSFULLY";
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


if(isset($_POST['save_kendaraan'])){
    $nomor_registrasi_kendaraan =  mysqli_escape_string($con, $_POST['nomor_registrasi_kendaraan']);
    $nama_pemilik =  mysqli_escape_string($con, $_POST['nama_pemilik']);
    $alamat =  mysqli_escape_string($con, $_POST['alamat']);
    
    $query = "INSERT INTO data_kendaraan (nomor_registrasi_kendaraan,nama_pemilik,alamat) VALUES ('$nomor_registrasi_kendaraan','$nama_pemilik','$alamat')";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "KENDARAAN CREATED DATA SUCCESSFULLY";
        header("Location: Kendaraan_CreateData.php");
        exit(0);

    }
    else
    {
        $_SESSION['message'] = "KENDARAAN NOT CREATED ";
        header("Location: Kendaraan_CreateData.php");
        exit(0);
    }

}
?>