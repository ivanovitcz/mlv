<section id="menu" class="menu">
    <div class="container">
        <div class="section-title">
        <h2>Tabel<span> Pesanan</span></h2>
        <br>
        <table class = "table table bordered">
        <head>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Pemesanan</th>
                <th>total Pemesanan</th>
                <th>Aksi</th>
            </tr>
        </head>
        <body>
            <?php $nomor = 1;?>
            <?php $ambil = $koneksi->query("SELECT pemesanan.id_pemesanan,customer.nama_customer,pemesanan.
            tanggal_pemesanan,pemesanan.total_pemesanan FROM pemesanan INNER JOIN customer ON 
            pemesanan.id_customer=customer.id_customer");?>
            <?php while ($pecah = $ambil->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_customer']; ?></td>
                <td><?php echo $pecah['tanggal_pemesanan'] ?></td>
                <td><?php echo $pecah['total_pemesanan'] ?></td>
                <td><a href = "halaman_admin.php?halaman=detail&id=<?php echo $pecah ['id_pemesanan'];?>" class = " btn btn-info">Detail</a></td>
            </tr>
            <?php $nomor++; ?>
            <?php } ?>
        </body>
        </table>
        </div>
    </div>
</section>