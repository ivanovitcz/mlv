<?php 
include 'koneksi.php';



$tanggal = date('Y-m-d');

$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];



mysqli_query($koneksi,"insert into customer values(NULL,'$nama','$alamat','$email','$telepon')")or die(mysqli_error($koneksi));

$last_id = mysqli_insert_id($koneksi);





$jumlah_isi_keranjang = count($_SESSION['keranjang']);
$total = 0;
for($a = 0; $a < $jumlah_isi_keranjang; $a++){
	$id_produk = $_SESSION['keranjang'][$a]['produk'];
	$jml = $_SESSION['keranjang'][$a]['jumlah'];

	$isi = mysqli_query($koneksi,"select * from produk where id_produk='$id_produk'");
	$i = mysqli_fetch_assoc($isi);
  $total += $i['harga_produk'] * $jml;
	$produk = $i['id_produk'];
	$jumlah = $_SESSION['keranjang'][$a]['jumlah'];
	
}

mysqli_query($koneksi,"insert into pemesanan values(NULL,'$last_id','$tanggal','$total')")or die(mysqli_error($koneksi));
$last_id_pemesanan = mysqli_insert_id($koneksi);

for($a = 0; $a < $jumlah_isi_keranjang; $a++){
	$id_produk = $_SESSION['keranjang'][$a]['produk'];

	$isi = mysqli_query($koneksi,"select * from produk where id_produk='$id_produk'");
	$i = mysqli_fetch_assoc($isi);

	$produk = $i['id_produk'];
	$jumlah = $_SESSION['keranjang'][$a]['jumlah'];
	
	mysqli_query($koneksi,"insert into pemesanan_produk values(NULL,'$last_id_pemesanan','$produk','$jumlah')");

	unset($_SESSION['keranjang'][$a]);
}


header("location:halaman_user.php?alert=sukses");