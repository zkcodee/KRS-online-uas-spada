<?php

include_once("connect.php");

function getAllDataMahasiswa(){
	global $conn;

	$query = "SELECT * FROM mahasiswa";

	$result = $conn->query($query);

	if ($result->num_rows > 0) {
		$data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	} else {
		return [];
	}
}

function checkMahasiswaFromKRS($nim){
	global $conn;

	$query = "SELECT * FROM krs WHERE nim_mahasiswa = '$nim'";

	$result = $conn->query($query);

	if ($result->num_rows > 0) {
		return true;
	} else {
		return false;
	}
}

function tambahMahasiswa($nim, $namaLengkap, $semester, $kodeKelas, $jurusan){
	global $conn;

	$query = "INSERT INTO mahasiswa (nim, nama_mahasiswa, kelas, jurusan, semester) VALUES ('$nim', '$namaLengkap', '$kodeKelas', '$jurusan', '$semester')";

	$result = $conn->query($query);

	if ($result) {
		return true;
	} else {
		return false;
	}

}

function tambahMataKuliah($idMataKuliah, $namaMataKuliah, $sks){
	global $conn;

	$query = "INSERT INTO mata_kuliah (id_matkul, nama_matkul, sks) VALUES ('$idMataKuliah', '$namaMataKuliah', '$sks')";

	$result = $conn->query($query);

	if ($result) {
		return true;
	} else {
		return false;
	}
}

function getAllMahasiswa(){
	global $conn;

	$query = "SELECT * FROM mahasiswa";

	$result = $conn->query($query);

	if ($result->num_rows > 0) {
		$data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	} else {
		return [];
	}
}

function getAllMataKuliah(){
	global $conn;

	$query = "SELECT * FROM mata_kuliah";

	$result = $conn->query($query);

	if ($result->num_rows > 0) {
		$data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	} else {
		return [];
	}
}

function tambahKRS($nim, $idMatkul){
	global $conn;

	$call = "SELECT id_krs FROM krs ORDER BY id_krs DESC LIMIT 1";
	
	$res = $conn->query($call);
	$lastId = $res->fetch_assoc();
	$lastId = $lastId['id_krs'] + 1;


	$query = "INSERT INTO krs (id_krs, nim_mahasiswa, id_matkul) VALUES ('$lastId', '$nim', '$idMatkul')";

	$result = $conn->query($query);

	if ($result) {
		return true;
	} else {
		return false;
	}
}

function getDetailMahasiswa($nim){
	global $conn;

	$query = "SELECT m.nim, m.nama_mahasiswa, m.jurusan, m.kelas, m.semester, mk.nama_matkul, mk.sks FROM krs k JOIN mahasiswa m ON k.nim_mahasiswa = m.nim JOIN mata_kuliah mk ON k.id_matkul = mk.id_matkul WHERE m.nim = '$nim';";

	$result = $conn->query($query);

	if ($result->num_rows > 0) {
		$data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	} else {
		return [];
	}
}