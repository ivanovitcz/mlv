<!-- ======= Menu Section ======= -->
<section id="harga" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Harga <span>Menu</span></h2>
        </div>
        <div class="row menu-container">
            <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
            <?php while($perproduk = $ambil->fetch_assoc()){ ?>
            <div class="col-lg-3 menu-item filter-starters">
              <img src="foto_produk/<?php echo $perproduk['foto_produk'];?>" alt="" class="img-fluid">
                  <div class="menu-content mt-3">
                    <p><?php echo $perproduk ['nama_produk']; ?></p>
                    <p>Rp. <?php echo number_format($perproduk ['harga_produk']); ?></p>
                    <p><?php echo $perproduk ['deskripsi_produk']; ?></p>
                    <p><a class="btn btn-warning" href="keranjang_masukkan.php?id=<?php echo $perproduk['id_produk']; ?>"> Masukkan Keranjang</a></p>
                  </div>
              </div><?php }?>
            </div>
          </div>
    </section>
    <!-- End Menu Section -->