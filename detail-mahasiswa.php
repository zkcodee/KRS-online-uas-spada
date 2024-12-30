<?php

include_once("core.php");

$request_uri = $_SERVER['REQUEST_URI'];
$nim = substr($request_uri, strrpos($request_uri, 'detail-mahasiswa.php?id=') + strlen('detail-mahasiswa.php?id='));

$data = getDetailMahasiswa($nim);

if($data == null){
	echo "<h1 style='text-align: center'>Data Kosong</h1>";
} else{
	$mahasiswa = $data[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KRS ONLINE - DETAIL MAHASISWA</title>
</head>
<body>
<h1 style="text-align: center">DATA DETAIL MAHASISWA</h1>

<div style="text-align: center;">
	<p><strong>Nama:</strong> <?= $mahasiswa['nama_mahasiswa']; ?></p>	
	<p><strong>NIM:</strong> <?= $mahasiswa['nim'];?></p>
	<p><strong>Jurusan:</strong> <?= $mahasiswa['jurusan']; ?></p>
	<p><strong>Kelas:</strong> <?= $mahasiswa['kelas']; ?></p>
	<p><strong>Semester:</strong> <?= $mahasiswa['semester']; ?></p>
</div>

<h3 style="text-align: center">Mata Kuliah yang Diambil</h3>
<div style="display: flex; justify-content: center;">
    <table border="1">
        <thead>
            <tr>
				<th>No</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            <?php
			$no = 1;
            foreach ($data as $item) {
                ?>
                <tr>
					<td><?= $no++;?></td>
                    <td><?php echo $item['nama_matkul']; ?></td>
                    <td><?php echo $item['sks']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
	<?php } ?>


</body>
</html>