<?php 
$jumlah_isi_keranjang = count($_SESSION['keranjang']);
?>
<form method="post" action="keranjang_update.php">

<section class="menu">
    <div class="container">
        <div class="section-title">
        <?php 
          if(isset($_GET['alert'])){
            if($_GET['alert'] == "gagal") {
              echo "<div class='alert alert-danger text-center'>Gagal Update Keranjang!</div>";
            } else if($_GET['alert'] == "sukses") {
              echo "<div class='alert alert-success text-center'>Sukses Update Keranjang!</div>";
            }
          }
        ?>
        <h2>Keranjang</h2>
        <br>
        <table class = "table table bordered">
            <head>
                <tr>
                    <th>Produk</th>
                    <th></th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </head>
            <tbody>
            <?php
              
              // cek apakah produk sudah ada dalam keranjang
              $jumlah_total = 0;
              $total = 0;
              echo $jumlah_isi_keranjang;
              if($jumlah_isi_keranjang != 0){

              for($a = 0; $a < $jumlah_isi_keranjang; $a++){
                $id_produk = $_SESSION['keranjang'][$a]['produk'];
                $jml = $_SESSION['keranjang'][$a]['jumlah'];

                $isi = mysqli_query($koneksi,"select * from produk where id_produk='$id_produk'");
                $i = mysqli_fetch_assoc($isi);
                $total += $i['harga_produk']*$jml;
                $jumlah_total += $total;
                ?>
                <tr>
                  <td class="thumb">
                    <img src="foto_produk/<?php echo $i['foto_produk'] ?>" width="50" height="50">
                  </td>

                  <td class="details">
                    <?php echo $i['nama_produk'] ?>
                  </td>

                  <td class="price text-center"><strong><?php echo "Rp. ".number_format($i['harga_produk']) . " ,-"; ?></strong></td>
                  
                  <td class="qty text-center">
                    <input class="harga" id="harga_<?php echo $i['id_produk'] ?>" type="hidden" value="<?php echo $i['produk_harga']; ?>">
                    <input name="produk[]" value="<?php echo $i['id_produk'] ?>" type="hidden">
                    <input class="input jumlah" name="jumlah[]" id="jumlah_<?php echo $i['id_produk'] ?>" nomor="<?php echo $i['id_produk'] ?>" type="number" value="<?php echo $_SESSION['keranjang'][$a]['jumlah']; ?>" min="1">
                  </td>

                  <td class="total text-center"><strong class="primary-color total_harga" id="total_<?php echo $i['id_produk'] ?>"><?php echo "Rp. ".number_format($total) . " ,-"; ?></strong></td>
                  
                  <td class="text-right"><a class="btn btn-danger" href="keranjang_hapus.php?id=<?php echo $i['id_produk']; ?>">X</a></td>
                </tr>

              <?php
           
              $total = 0;
              } 
            } else {
              ?> 
              <tr>
                <td colspan="6" class="text-center">
                  BELUM ADA ISI KERANJANG
                </td>
              </tr>
              <?php
            }

            ?>
            </tbody>
            <tfoot>
            <tr>
                <th class="empty" colspan="3"></th>
                <th>TOTAL</th>
                <th colspan="2" class="sub-total"><?php echo "Rp. ".number_format($jumlah_total) . " ,-"; ?></th>
              </tr>
            </tfoot>
        </table>

        <div class="row justify-content-end">
          <div class="col-4 text-right">
            <input type="submit" class="btn btn-primary" value="Update Keranjang">
            <a class="btn btn-warning text-white" href="halaman_user.php?halaman=checkout">Check Out</a>
          </div>
        </div>
          
        </form>

        </div>
    </div>
</section>