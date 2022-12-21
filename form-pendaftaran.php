<?php

$title = 'Formulir Pendaftaran';
include 'layout/head.php';

?>

<div class="container mt-4">
    <h1>Formulir Pendaftaran Murid TA 2022/2023</h1>

    <form action="" method="post">
    <div class="row mt-4">
        <div class="col-sm mt-3">
            <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap </label>
            <input type="text" class="form-control" id="nama" name="nama" style="width: 55%" placeholder="NAMA PESERTA" required>
            </div>

            <div class="mb-3">
            <label for="nisn" class="form-label">NISN (Nomor Induk Siswa Nasional)</label>
            <input type="number" class="form-control" id="nisn" name="nisn" style="width:55%" placeholder="NISN PESERTA"  required>
            </div>

            <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" style="width: 55%" required>
                <option selected value="">--</option>
                <option value="Perempuan">Perempuan</option>
                <option value="Laki-laki">Laki-laki</option>
            </select>
            </div>
        </div>
            
        <div class="col-sm mt-3">
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Sesuai KK</label>
                <textarea class="form-control" id="alamat" rows="3" style="width: 50%"></textarea>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail Orangtua (Ayah/Ibu)</label>
                <input type="text" class="form-control" id="email" name="email" style="width: 50%" placeholder=""  required>
            </div>

            <div class="mb-3">
                <label for="no_telp" class="form-label">No HP Aktif (No WA)</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" style="width: 40%" placeholder=""  required>
            </div>

        </div>
  </div>

    <button type="submit" name="tambah" class="btn btn-success mt-4" style="float: left;">
      <i class="fa-solid fa-plus"></i> Tambah
    </button>

  </form>

  <a href="javascript:window.history.go(-1);" class="btn btn-warning mt-4" style="margin-left: 4pt">
      <i class="fa-solid fa-circle-arrow-left"></i> Kembali
  </a>
</div>


<?php

include 'layout/footer.php';

?>