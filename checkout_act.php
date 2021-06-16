<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'koneksi.php';
require_once "vendor/autoload.php";

//sing perlu diganti Username, Password, Port
$mail = new PHPMailer(true);
$mail->isSMTP();                        // Set mailer to use SMTP
$mail->Host       = 'smtp.mailtrap.io;';    // Specify main SMTP server
$mail->SMTPAuth   = true;               // Enable SMTP authentication
$mail->Username   = '1318715aaf0e49';     // SMTP username
$mail->Password   = '6ecbf497df30af';         // SMTP password
$mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
$mail->Port       = 2525;                // TCP port to connect to

//email pengirim
$mail->setFrom('admin@akac.com', 'Name');

//email penerima
$mail->addAddress($_POST['email']);           // Add a recipient



$tanggal = date('Y-m-d');

$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];



mysqli_query($koneksi,"insert into customer values(NULL,'$nama','$alamat','$email','$telepon')")or die(mysqli_error($koneksi));

$last_id = mysqli_insert_id($koneksi);


//isi email
$mail->isHTML(true);                                  
$mail->Subject = 'Invoice Pesanan '.$nama;
$tanggal_email = date('d-m-Y');

$isi_email =  "
<div style='text-align: center;border-top:1px solid #000;border-bottom:1px solid #000;'>
    <div style='font-size: 24px;color: #666;'>INVOICE</div>
</div>
";

$isi_email .= "
<br>
<table style='line-height: 1.5;'>
    <tr>
        <td style='text-align:left;'><b>Penerima</b></td>
        <td>:</td>
        <td>AKu</td>
    <tr>
        <td style='text-align:left;'><b>Email</b></td>
        <td>:</td>
        <td>AKu</td>
    </tr>
    <tr>
        <td style='text-align:left;'><b>Alamat</b></td>
        <td>:</td>
        <td>AKu</td>
    </tr>
    <tr>
        <td style='text-align:left;'><b>No. HP</b></td>
        <td>:</td>
        <td>AKu</td>
    </tr>
    <tr>
        <td><b>Tanggal Pesan</b></td>
        <td>:</td>
        <td>".$tanggal_email."</td>
    </tr>
</table>
<br>
<div style='text-align: center;border-top:1px solid #000;border-bottom:1px solid #000;'>
    <div style='font-size: 24px;color: #666;'>ISI PESANAN</div>
</div>
<br>
<center>
<table style='line-height: 2;'>
  <tr style='font-weight: bold;border:1px solid #cccccc;background-color:#f2f2f2;'>
      <td style='border:1px solid #cccccc;width:200px; text-align: center;'>Produk</td>
      <td style = 'text-align:center;width:100px;border:1px solid #cccccc;width:85px'>Harga</td>
      <td style = 'text-align:center;width:100px;border:1px solid #cccccc;width:75px;'>Jumlah</td>
      <td style = 'text-align:center;width:100px;border:1px solid #cccccc;'>Subtotal</td>
  </tr>
";



$jumlah_isi_keranjang = count($_SESSION['keranjang']);
$total = 0;
for($a = 0; $a < $jumlah_isi_keranjang; $a++){
	$id_produk = $_SESSION['keranjang'][$a]['produk'];
	$jml = $_SESSION['keranjang'][$a]['jumlah'];

	$isi = mysqli_query($koneksi,"select * from produk where id_produk='$id_produk'");
	$i = mysqli_fetch_assoc($isi);
  $total += $i['harga_produk'] * $jml;
	$produk = $i['id_produk'];
	$nama_produk = $i['nama_produk'];
	$harga_produk = $i['harga_produk'];
  $jumlah = $_SESSION['keranjang'][$a]['jumlah'];
  
  $isi_email .= "
  <tr> <td style='border:1px solid #cccccc;'>".$nama_produk."</td>
  <td style = 'text-align:right; border:1px solid #cccccc;'>Rp ".number_format($harga_produk,0,',','.')."</td>
  <td style = 'text-align:right; border:1px solid #cccccc;'>".$jumlah."</td>
  <td style = 'text-align:right; border:1px solid #cccccc;'>Rp ".number_format($harga_produk*$jumlah,0,',','.')."</td>
</tr>
  ";
	
}

$isi_email .= "
<tr style = 'font-weight: bold;'>
<td></td><td></td>
<td style = 'text-align:right;'>Total </td>
<td style = 'text-align:right;'>Rp ".number_format($total,0,',','.')."</td>
</tr>
</table>
</center>
<br>
<br>
<p>Terima Kasih untuk pesanannya, pesanan Anda bisa diambil di </p>
<p>Jalan Edelweis No. C9, Gumpang, Kartasura, Dusun I, Gumpang, Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57169 </p>
<p>Pada hari Senin-Sabtu : Pukul 08.00-17.00 WIB</p>
<p>Nomor WhatsApp</p>
<p>+62 85647450517</p>
  ";






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


//kirim email
$mail->Body    = $isi_email;
$mail->send();
?>

<script>
window.location.href = "halaman_user.php?alert=sukses";
</script>