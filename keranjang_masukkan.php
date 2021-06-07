<?php 
include 'koneksi.php';

$id_produk = $_GET['id'];

$data = mysqli_query($koneksi,"select * from produk where id_produk='$id_produk'");
$d = mysqli_fetch_assoc($data);


// session_destroy();

if(isset($_SESSION['keranjang'])){
	$jumlah_isi_keranjang = count($_SESSION['keranjang']);

	$sudah_ada = 0;
	for($a = 0;$a < $jumlah_isi_keranjang; $a++){

		// cek apakah produk sudah ada dalam keranjang
		if($_SESSION['keranjang'][$a]['produk'] == $id_produk){

			$sudah_ada = 1;
			
		}
	}

	if($sudah_ada == 0){
		$_SESSION['keranjang'][$jumlah_isi_keranjang] = array(
			'produk' => $id_produk,
			'jumlah' => 1
		);

	}

}else{
	// $_SESSION['keranjang'] = array();
	// array_push($_SESSION['keranjang'], $id_produk);

	$_SESSION['keranjang'][0] = array(
		'produk' => $id_produk,
		'jumlah' => 1
	);
}

//$_SESSION['keranjang'] = [];

//print_r(count($_SESSION['keranjang']));
header("location:halaman_user.php?halaman=keranjang&alert=sukses");
?>