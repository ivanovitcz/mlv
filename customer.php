<section id="menu" class="menu">
    <div class="container">
        <div class="section-title">
        <h2>Data<span> Customer</span></h2>
        <br>
        <table class = "table table bordered">
        <head>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
                <td>Aksi</td>
            </tr>
        </head>
        <body>
        <?php $nomor=1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM customer");?>
        <?php while ($pecah = $ambil->fetch_assoc()){?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah["nama_customer"]; ?></td>
                <td><?php echo $pecah['alamat_customer']; ?></td>
                <td><?php echo $pecah['email_customer']; ?></td>
                <td><?php echo $pecah['telepon_customer']; ?></td>
                <td>
                <a href = "halaman_admin.php?halaman=hapuscustomer&id=<?php echo $pecah['id_customer'];?>" class = "btn-danger btn">Hapus</a>
                <a href = "halaman_admin.php?halaman=ubahcustomer&id=<?php echo $pecah['id_customer'];?>" class = "btn-warning btn">Ubah</a>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
        </body>
        </table>
        </div>
    </div>
</section>