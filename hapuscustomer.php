<?php 
$id = $_GET['id'];
$koneksi->query("DELETE FROM customer WHERE id_customer='$id'");

echo "<script>alert('Customer Berhasil Dihapus');</script>";
echo "<script>location='halaman_admin.php?halaman=customer';</script>";
?> 