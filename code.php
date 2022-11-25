<?php
session_start();
require 'dbconnection.php';

if(isset($_POST['save_kendaraan'])){
    $nomor_registrasi_kendaraan =  mysqli_escape_string($con, $_POST['nomor_registrasi_kendaraan']);
    $nama_pemilik =  mysqli_escape_string($con, $_POST['nama_pemilik']);
    $alamat =  mysqli_escape_string($con, $_POST['alamat']);
    $merk_kendaraan =  mysqli_escape_string($con, $_POST['merk_kendaraan']);
    $tahun_pembuatan =  mysqli_escape_string($con, $_POST['tahun_pembuatan']);
    $kapasitas_silinder =  mysqli_escape_string($con, $_POST['kapasitas_silinder']);
    $warna_kendaraan =  mysqli_escape_string($con, $_POST['warna_kendaraan']);
    $bahan_bakar =  mysqli_escape_string($con, $_POST['bahan_bakar']);

    $query = "INSERT INTO data_kendaraan (nomor_registrasi_kendaraan,nama_pemilik,alamat,merk_kendaraan,tahun_pembuatan,kapasitas_silinder,warna_kendaraan,bahan_bakar) VALUES ($nomor_registrasi_kendaraan,$nama_pemilik,$alamat,$merk_kendaraan,$tahun_pembuatan,$kapasitas_silinder,$warna_kendaraan,$bahan_bakar)";

    $query_run = mysqli_query($con,$query);

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