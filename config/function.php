<?php

include 'koneksi.php';

//fungsi menambahkan data dari formulir pendaftaran
function create_data($post)
{
    global $db;

    $nama = $post['nama'];
    $nisn = $post['nisn'];  
    $jenis_kelamin = $post['jenis_kelamin'];
    $tanggal_lahir = $post['tanggal_lahir'];
    $alamat = $post['alamat'];
    $email = $post['email'];
    $no_telp = $post['no_telp'];
    $status = "";

    //query tambah data
    $query = "INSERT INTO pendaftaran VALUES('$nama', '$nisn', '$jenis_kelamin', 
    '$tanggal_lahir', '$alamat', '$email', '$no_telp', '$status')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

?>