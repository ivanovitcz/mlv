<?php 
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$_GET[id]'");

$fotoproduk = $pecah['foto_produk'];
// if(file_exists("./foto_produk/$fotoproduk"))
// {
//     unlink("./foto_produk/$fotoproduk");
// }
$id = $_GET['id'];
$koneksi->query("DELETE FROM produk WHERE id_produk='$id'");

echo "<script>alert('Produk Berhasil Dihapus');</script>";
echo "<script>location='halaman_admin.php?halaman=produk';</script>";
?> 