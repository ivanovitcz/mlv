<?php 
$jumlah_isi_keranjang = count($_SESSION['keranjang']);

?>

<section class="menu">
    <div class="container">
        <div class="section-title">
        <h2>Checkout</h2>
        <br>
        <div class="row">
          <div class="col-md-6 text-left">
            <div class="row">
              <span class="font-weight-bold">INFORMASI PEMBELI</span>
            </div>
            <br>

            <form action="checkout_act.php" method="POST" class="text-left">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama pemesan .." required="required">
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan email pemesan .." required="required">
              </div>

              <div class="form-group">
                <label>Nomor HP</label>
                <input type="number" class="form-control" name="telepon" placeholder="Masukkan no.hp aktif .." required="required">
              </div>

              <div class="form-group">
                <label>Alamat Lengkap</label>
                <textarea name="alamat" class="form-control" style="resize: none;" rows="6" placeholder="Masukkan alamat lengkap .."></textarea>
              </div>

              <button type="submit" class="btn btn-warning text-white btn-block">Proses Pesanan</button>
            </form>
            

          </div>
          <div class="col-md-6 text-left">
            <div class="row">
              <span class="font-weight-bold">INFORMASI PESANAN</span>
            </div>
            <br>
            <table class = "table table bordered">
                <head>
                    <tr>
                        <th>Produk</th>
                        <th></th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                    </tr>
                </head>
                <tbody>
                <?php
                  
                  // cek apakah produk sudah ada dalam keranjang
                  $jumlah_total = 0;
                  $total = 0;
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
                        <td >
                          <img src="foto_produk/<?php echo $i['foto_produk'] ?>" width="50" height="50">
                        </td>

                        <td >
                          <?php echo $i['nama_produk'] ?>
                        </td>

                        <td class="text-center"><strong><?php echo "Rp. ".number_format($i['harga_produk']); ?></strong></td>
                        
                        <td class="text-center">
                          <?php echo $_SESSION['keranjang'][$a]['jumlah']; ?>
                        </td>

                        <td class="text-center"><strong class="primary-color total_harga" id="total_<?php echo $i['id_produk'] ?>"><?php echo "Rp. ".number_format($total); ?></strong></td>
                      </tr>

                    <?php
                
                    $total = 0;
                    } 
                  } 
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <th class="empty" colspan="3"></th>
                    <th>TOTAL</th>
                    <th colspan="2" class="sub-total"><?php echo "Rp. ".number_format($jumlah_total); ?></th>
                  </tr>
                </tfoot>
            </table>
          </div>
        </div>
        

       
          

        </div>
    </div>
</section>