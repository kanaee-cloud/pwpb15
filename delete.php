<?php
    include 'lib/library.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nis            = $_POST['nis'];
        $nama_siswa   = $_POST['nama_siswa'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $kelas          = $_POST['kelas'];
        $jurusan        = $_POST['jurusan'];
        $alamat         = $_POST['alamat'];
        $golongan_darah = $_POST['golongan_darah'];
        $ibu_kandung = $_POST['ibu_kandung'];

        $sql = "DELETE FROM siswa WHERE nis = '$nis' ";

        $mysqli->query($sql) or die ($mysqli->error);

        header('location: index.php');
    }
    
    $nis = $_GET['nis'];

    if(empty($nis)) header('location: index.php');

    $sql = "SELECT * FROM siswa WHERE nis = $nis";
    $query = $mysqli->query($sql);
    $siswa = $query->fetch_array();

    if(empty($siswa)) header('location: index.php');

?>