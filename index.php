<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRS ONLINE - SISTEM BASIS DATA</title>
  </head>
  <body>
    <h1 style="text-transform: uppercase; text-align: center">krs online</h1>

    <div
      style="
        display: flex;
        flex-direction: row;
        gap: 20px;
        justify-content: center;
      "
    >
      <a href="data.php" target="content">Home</a>
      <a href="tambah-mahasiswa.php" target="content">Tambah Mahasiswa</a>
      <a href="tambah-matakuliah.php" target="content">Tambah Mata Kuliah</a>
      <a href="tambah-krs.php" target="content">Buat & Update KRS</a>
    </div>

    <div
      style="
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
      "
    >
      <iframe
        id="content-frame"
        name="content"
        frameborder="0"
        width="100%"
        height="700px"
        scrolling="no"
        src="data.php"
      ></iframe>
    </div>
  </body>
</html>
