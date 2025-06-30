<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}
$id = $_GET['id_komentar'];
$sql = "DELETE FROM tbl_komentar WHERE id_komentar = '$id'";
$query = mysqli_query($db, $sql);
if ($query) {
    echo "<script>alert('Artikel berhasil dihapus.');
window.location='data_komentar.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus artikel.');
history.back();</script>";
}
?>