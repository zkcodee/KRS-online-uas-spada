<?php

include_once("core.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idMataKuliah = $_POST["idMataKuliah"];
  $namaMataKuliah = $_POST["namaMataKuliah"];
  $sks = $_POST["sks"];

  $result = tambahMataKuliah($idMataKuliah, $namaMataKuliah, $sks);

  if ($result) {
	echo "<script>alert('Data berhasil ditambahkan')</script>";
  } else {
	echo "<script>alert('Data gagal ditambahkan')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRS ONLINE - TAMBAH MATA KULIAH</title>
  </head>
  <body>
    <h1 style="text-align: center">Tambah Mata Kuliah</h1>

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
        <div style="display: flex; flex-direction: column">
          <label for="idMataKuliah">ID Mata Kuliah</label>
          <input
            type="number"
            placeholder="44"
            name="idMataKuliah"
            id="idMataKuliah"
          />
        </div>

        <div style="display: flex; flex-direction: column">
          <label for="namaMataKuliah">Nama Mata Kuliah</label>
          <input
            type="text"
            placeholder="Logik Algoritma"
            name="namaMataKuliah"
            id="namaMataKuliah"
          />
        </div>

        <div style="display: flex; flex-direction: column">
          <label for="sks">SKS</label>
          <input type="number" placeholder="4" name="sks" id="sks" />
        </div>

        <button type="submit">Kirim</button>
      </div>
    </form>
  </body>
</html>
