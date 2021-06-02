<section id="menu" class="menu">
    <div class="container">
        <div class="section-title">
        <h2>Data <span> Produk</span></h2>
        <br>
        <a href = "halaman_admin.php?halaman=tambahproduk" class = "btn btn-primary">Tambah Data </a>
        <br><br>
        <table class = "table table bordered">
            <head>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </head>
            <body>
                <?php $nomor=1; ?>
                <?php $ambil = $koneksi->query("SELECT * FROM produk");?>
                <?php while ($pecah = $ambil->fetch_assoc()){?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah['nama_produk']; ?></td>
                    <td><?php echo $pecah['harga_produk']; ?></td>
                    <td>
                        <img src="./foto_produk/<?php echo $pecah['foto_produk'];?>"" width="100">
                    </td>
                    <td><?php echo $pecah['deskripsi_produk']; ?></td>
                    <td>
                        <a href = "halaman_admin.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk'];?>" class = "btn-danger btn">Hapus</a>
                        <a href = "halaman_admin.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>" class = "btn-warning btn">Ubah</a>
                    </td>
                </tr>
                <?php $nomor++;?>
                <?php } ?>
            </body>
        </table>
        </div>
    </div>
</section>