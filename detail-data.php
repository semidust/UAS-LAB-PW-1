<?php 

$title = 'Pendaftaran';
include 'layout/header.php'; 
include 'config/function.php';

//mengambil nomor dari data yg dipilih
$nomor = (int)$_GET['nomor'];

$pendaftaran = select("SELECT * FROM pendaftaran WHERE nomor = $nomor")[0];

?>
 
  <div class="container mt-4">
    <h3>Data <?= $pendaftaran['nama'] ?></h3>
    <br>
    <table class="table table-striped">
        <tr>
            <td><b>Nama Lengkap</b></td>
            <td><?= $pendaftaran['nama']; ?></td>
        </tr>

        <tr>
            <td><b>NISN (Nomor Induk Siswa Nasional)</b></td>
            <td><?= $pendaftaran['nisn']; ?></td>
        </tr>

        <tr>
            <td><b>Jenis Kelamin</b></td>
            <td><?= $pendaftaran['jenis_kelamin']; ?></td>
        </tr>

        <tr>
            <td><b>Tanggal Lahir</b></td>
            <td><?= $pendaftaran['tanggal_lahir']; ?></td>
        </tr>

        <tr>
            <td><b>Alamat Sesuai KK</b></td>
            <td><?= $pendaftaran['alamat']; ?></td>
        </tr>

        <tr>
            <td><b>E-mail Orangtua (Ayah/Ibu)</b></td>
            <td><?= $pendaftaran['email']; ?></td>
        </tr>
        
        <tr>
            <td><b>No HP Aktif (No WA)</b></td>
            <td><?= $pendaftaran['no_telp']; ?></td>
        </tr>

        <tr>
            <td><b>Status</b></td>
            <td><?= $pendaftaran['status']; ?></td>
        </tr>

        

    </table>
    
    	
    <a href="javascript:window.history.go(-1);" class="btn btn-dark mt-4">
        <i class="fa-solid fa-circle-arrow-left"></i> Kembali
    </a>

  </div>
  
<?php include 'layout/footer.php'; ?>