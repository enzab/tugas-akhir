<style>

.form-group textarea {
    vertical-align: middle;
}

</style>

<h2><b>Tambah Menu</b></h2>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label><b>Nama Menu</b></label>
        <input class="form-control"  type="text" name="nama_menu" value="">
    </div>
    <div class="form-group">
        <label><b>Harga Menu</b></label>
        <input class="form-control" type="text" name="harga_menu" value="">
    </div>
    <div class="form-group">
        <label><b>Kategori Menu</b></label>
        <select class="form-control"  name="kategori_menu">
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Pencuci Mulut">Pencuci Mulut</option>
        </select>
    </div>
    <div class="form-group">
        <label class="Dis"><b>Diskripsi Menu</b></label>
        <textarea class="form-control" name="deskripsi_menu" id="" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label><b>Gambar Menu</b></label>
        <input class="form-control" type="file" name="gambar_menu">
    </div>
    
    <button class="btn btn-primary" name="tambahM">Tambah Menu</button>
</form>

<?php
if(isset($_POST["tambahM"])) {

    $filename =  $_FILES['gambar_menu']['name'];
    $filetmpname = $_FILES['gambar_menu']['tmp_name'];
    $folder = '../admin/gambar_menu/';
    move_uploaded_file($filetmpname,$folder.$filename);    
    $nama_menu = $_POST['nama_menu'];
    $harga_menu = $_POST['harga_menu'];
    $deskripsi_menu = $_POST['deskripsi_menu'];
    $kategori_menu = $_POST['kategori_menu'];
    $sql = "INSERT INTO `menu` (`nama_menu`, `harga_menu`, `gambar_menu`, `kategori_menu`, `deskripsi_menu`) VALUES ('$nama_menu', '$harga_menu', '$filename', '$kategori_menu', '$deskripsi_menu')" or die(mysqli_error($koneksi));
    mysqli_query($koneksi,$sql);
    echo "<div class='alert alert-info'>Menu tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=menu'>";
}

?>