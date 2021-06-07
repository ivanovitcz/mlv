<section id="menu" class="menu">
    <div class="container">
        <div class="section-title">
        <h2>Detail<span> Pesanan</span></h2>
        <br>
        <?php
            $ambil = $koneksi->query("SELECT * FROM pemesanan JOIN customer 
                ON pemesanan.id_customer = customer.id_customer 
                WHERE pemesanan.id_pemesanan = '$_GET[id]' ");
            $detail = $ambil->fetch_assoc();
        ?>

        <strong><?php echo $detail ["nama_customer"]; ?></strong>
        <br>
        <p>
            <?php echo $detail['telepon_customer']; ?><br>
            <?php echo $detail['email_customer']; ?>
        </p>
        <p>
            Tanggal :<?php echo $detail['tanggal_pemesanan']; ?><br>
            Total :<?php echo $detail['email_customer']; ?>
        </p>
        <table class = "table table-bordered">
            <head>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </head>
            <body>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_produk=produk.id_produk WHERE pemesanan_produk.id_pemesanan='$_GET[id]'");?>
                <?php while($pecah = $ambil->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?php echo $pecah['nama_produk'];?></td>
                    <td><?php echo $pecah['harga_produk'];?></td>
                    <td><?php echo $pecah['jumlah'];?></td>
                    <td><?php echo $pecah['harga_produk']*$pecah['jumlah'];?></td>
                </tr>
                <?php $nomor++;?>
                <?php } ?>
            </body>
        </table>
        </div>
    </div>
</section>