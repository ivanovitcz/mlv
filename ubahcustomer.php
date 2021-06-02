<section id="menu" class="menu">
    <div class="container">
        <div class="section-title">
        <h2>Data <span> Customer</span></h2>
        <br>
        <?php
        $ambil = $koneksi->query("SELECT * FROM customer WHERE id_customer='$_GET[id]'");
        $pecah = $ambil->fetch_assoc();

        ?>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Customer</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_customer'];?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $pecah['alamat_customer'];?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $pecah['email_customer'];?>">
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="number" name="telepon" class="form-control" value="<?php echo $pecah['telepon_customer'];?>">
            </div>
            <button type="submit" class = "btn btn-primary" name="ubah" value="ubah">Ubah</button>
        </form>
        <?php
        if (isset($_POST['ubah']))
        {
            {
                $koneksi->query("UPDATE customer SET nama_customer='$_POST[nama]',
                alamat_customer='$_POST[alamat]',email_customer='$_POST[email]',telepon_customer='$_POST[telepon]' 
                WHERE id_customer=$_GET[id]");
            }
        echo "<script>alert('Data Customer Telah Diubah');</script>";
        echo "<script>location='halaman_admin.php?halaman=customer';</script>";
        }
        ?>
        </div>
    </div>
</section>