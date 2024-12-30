<?php

include_once("core.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nim = $_POST['pilihMahasiswa'];
	$idMatkul = $_POST['pilihMataKuliah'];

	$result = tambahKRS($nim, $idMatkul);

	if ($result) {
		echo "<script>alert('Berhasil menambahkan KRS')</script>";
	} else {
		echo "<script>alert('Gagal menambahkan KRS')</script>";
	}
  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRS ONLINE - TAMBAH KRS</title>
  </head>
  <body>
    <h1 style="text-align: center">Buat & Update KRS</h1>

    <form action="" method="post">
      <div
        style="
          display: flex;
          justify-content: center;
          gap: 10px;
          flex-direction: column;
          align-items: center;
        "
      >

	  <div style="display:flex; flex-direction:row; gap:10px;">
        <div style="display: flex; flex-direction: column">
          <label for="pilihMahasiswa">Pilih Mahasiswa</label>
		  <select name="pilihMahasiswa" id="pilihMahasiswa">
			<?php
			$data = getAllMahasiswa();

			if ($data == null) {
				echo "<h1 style='text-align: center'>Data Kosong</h1>";
			} else {
				foreach ($data as $mahasiswa) {
			?>
			<option value="<?= $mahasiswa['nim']; ?>"><?= $mahasiswa['nama_mahasiswa']; ?></option>
			<?php }} ?>
		</select>
        </div>

        <div style="display: flex; flex-direction: column">
          <label for="pilihMataKuliah">Pilih Mata Kuliah</label>
		  <select name="pilihMataKuliah" id="pilihMataKuliah">
			<?php
			$data = getAllMataKuliah();

			if ($data == null) {
				echo "<h1 style='text-align: center'>Data Kosong</h1>";
			} else {
				foreach ($data as $mataKuliah) {
			?>
			<option value="<?= $mataKuliah['id_matkul']; ?>"><?= $mataKuliah['nama_matkul']; ?></option>
			<?php }} ?>
		</select>
        </div>
		</div>
        <button type="submit">Kirim</button>
      </div>
    </form>
  </body>
</html>
