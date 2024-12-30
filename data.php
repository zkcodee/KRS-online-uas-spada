<?php

include_once("core.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRS ONLINE - DATA LENGKAP</title>
  </head>
  <body>
    <h1 style="text-align: center">DATA LENGKAP MAHASISWA</h1>

	<?php 
	$data = getAllDataMahasiswa();

	if($data == null){
		echo "<h1 style='text-align: center'>Data Kosong</h1>";
	} else{
	?>

    <div style="display: flex; justify-content: center">
      <table border="1">
        <thead>
          <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama Mahasiswa</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Semester</th>
			<th>Aksi</th>
          </tr>
        </thead>
        <tbody>
			<?php
			$no = 1;
			foreach($data as $mahasiswa){
			?>
          <tr style="text-align: center">
            <td><?= $no; ?></td>
            <td><?= $mahasiswa['nim']; ?></td>
            <td><?= $mahasiswa['nama_mahasiswa']; ?></td>
            <td><?= $mahasiswa['jurusan']; ?></td>
            <td><?= $mahasiswa['kelas']; ?></td>
            <td><?= $mahasiswa['semester']; ?></td>
			<td>
				<?php if(checkMahasiswaFromKRS($mahasiswa['nim'])){ ?>
					<a href="detail-mahasiswa.php?id=<?= $mahasiswa['nim']; ?>" target="content">Lihat KRS</a>
				<?php } else { ?>
					<a href="tambah-krs.php" target="content">Tambah KRS</a>
				<?php } ?>
		</tr>
		<?php $no++; }?>
        </tbody>
      </table>

	  <?php } ?>
    </div>
  </body>
</html>
