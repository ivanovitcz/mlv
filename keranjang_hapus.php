<?php 
include 'koneksi.php';

$id_produk = $_GET['id'];

if(isset($_SESSION['keranjang'])){


	for($a=0;$a<count($_SESSION['keranjang']);$a++){
		if($_SESSION['keranjang'][$a]['produk'] == $id_produk){
			unset($_SESSION['keranjang'][$a]);

			// urutkan kembali
			sort($_SESSION['keranjang']);
		}
	}

	
}

header("location:halaman_user.php?halaman=keranjang&alert=sukses");

?>