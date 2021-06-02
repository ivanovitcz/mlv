<section id="menu" class="menu">
    <div class="container">
        <div class="section-title">
        <h2>Data <span> Produk</span></h2>
        <br>
        <form method = "post" enctype = "multipart/form-data">
            <div class = "form-group">
                <label>Nama</label>
                <input type = "text" class = "form-control"  name = "nama">
            </div>
            <div class = "form-group">
                <label>Harga (Rp)</label>
                <input type = "number" class = "form-control" name = "harga">
            </div>
            <div class = "form-group">
                <label>Foto Produk</label>
                <input type = "file" class = "form-control" name = "foto">
            </div>
            <div class = "form-group">
                <label>Deskripsi Produk</label>
                <textarea class = "form-control" name="deskripsi" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class = "btn btn-primary" name = "save" value="simpan">Simpan</button>
        </form>
        <?php
        if (isset($_POST['save']))
        {
            $nama = $_FILES['foto']['name'];
            $lokasi = $_FILES['foto']['tmp_name'];
            move_uploaded_file($lokasi, "./foto_produk/".$nama);
            $koneksi->query("INSERT INTO produk
            (nama_produk,harga_produk,foto_produk, deskripsi_produk) VALUES('$_POST[nama]','$_POST[harga]','$nama','$_POST[deskripsi]')");
            
            echo "<div class='alert alert-info'>Data Tersimpan</div>";
            echo "<meta http-equiv='refresh' content='1;url=halaman_admin.php?halaman=produk'>";
        }
        ?>
        </div>
    </div>
</section>