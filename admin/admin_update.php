<?php
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$password = md5($_POST['password']);

$rand = rand();
$allowed = array('png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if ($pwd == "" && $filename == "") {
	$query = "UPDATE admin SET admin_nama=?, admin_username=? WHERE admin_id=?";
	$stmt = $koneksi->prepare($query);
	$stmt->bind_param("ssi", $nama, $username, $id);
	$stmt->execute();
	header("location:admin.php");
} elseif ($pwd == "") {
	if (!in_array($ext, $allowed)) {
		header("location:admin.php");
	} else {
		$newFileName = $rand . '_' . $filename;
		if (move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/admin/' . $newFileName)) {
			$query = "UPDATE admin SET admin_nama=?, admin_username=?, admin_foto=? WHERE admin_id=?";
			$stmt = $koneksi->prepare($query);
			$stmt->bind_param("sssi", $nama, $username, $newFileName, $id);
			$stmt->execute();
			header("location:admin.php");
		} else {
			header("location:admin.php");
		}
	}
} elseif ($filename == "") {
	$query = "UPDATE admin SET admin_nama=?, admin_username=?, admin_password=? WHERE admin_id=?";
	$stmt = $koneksi->prepare($query);
	$stmt->bind_param("sssi", $nama, $username, $password, $id);
	$stmt->execute();
	header("location:admin.php");
} else {
	if (!in_array($ext, $allowed)) {
		header("location:admin.php");
	} else {
		$newFileName = $rand . '_' . $filename;
		if (move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/admin/' . $newFileName)) {
			$query = "UPDATE admin SET admin_nama=?, admin_username=?, admin_password=?, admin_foto=? WHERE admin_id=?";
			$stmt = $koneksi->prepare($query);
			$stmt->bind_param("ssssi", $nama, $username, $password, $newFileName, $id);
			$stmt->execute();
			header("location:admin.php");
		} else {
			header("location:admin.php");
		}
	}
}
