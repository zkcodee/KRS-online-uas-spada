<?php

include_once("core.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nim = $_POST["nim"];
  $namaMahasiswa = $_POST["namaMahasiswa"];
  $semester = $_POST["semester"];
  $kelas = $_POST["kelas"];
  $jurusan = $_POST["jurusan"];

  $result = tambahMahasiswa($nim, $namaMahasiswa, $semester, $kelas, $jurusan);

  if ($result) {
	echo "<script>alert('Input Data Berhasil');</script>";
  } else {
	echo "<script>alert('Maaf, proses gagal. Silahkan ulangi lagi');</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRS ONLINE - TAMBAH MAHASISWA</title>
  </head>
  <body>
    <h1 style="text-align: center">Tambah Mahasiswa</h1>

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
        <div style="display: flex; flex-direction: row; gap: 10px">
          <div style="display: flex; flex-direction: column">
            <label for="nim">Nim Mahasiswa</label>
            <input type="number" placeholder="172300*" name="nim" id="nim" />
          </div>

          <div style="display: flex; flex-direction: column">
            <label for="namaMahasiswa">Nama Mahasiswa</label>
            <input
              type="text"
              placeholder="Ganjar Baswedan"
              name="namaMahasiswa"
              id="namaMahasiswa"
            />
          </div>
        </div>

        <div style="display: flex; flex-direction: row; gap: 10px">
          <div style="display: flex; flex-direction: column">
            <label for="semester">Semester</label>
            <input
              type="number"
              placeholder="14"
              name="semester"
              id="semester"
            />
          </div>

          <div style="display: flex; flex-direction: column">
            <label for="kelas">Kode Kelas</label>
            <input type="text" placeholder="17.3A.05" name="kelas" id="kelas" />
          </div>
        </div>

        <div style="display: flex; flex-direction: column">
          <label for="jurusan">Jurusan</label>
          <select name="jurusan" id="jurusan">
            <option value="Teknik & Informatika">Teknik & Informatika</option>
            <option value="Ekonomi & Bisnis">Ekonomi & Bisnis</option>
            <option value="Komunikasi & Bahasa">Komunikasi & Bahasa</option>
          </select>
        </div>

        <button type="submit">Kirim</button>
      </div>
    </form>
  </body>
</html>
