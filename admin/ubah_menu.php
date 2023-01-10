<?php
$ambil = $koneksi->query("SELECT * FROM menu WHERE id_menu='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<h2><b>Ubah Menu</b></h2>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label><b>Nama Menu</b></label>
        <input class="form-control"  type="text" name="nama_menu" value="<?php echo $pecah['nama_menu'] ?>">
    </div>
    <div class="form-group">
        <label><b>Harga Menu</b></label>
        <input class="form-control" type="text" name="harga_menu" value="<?php echo $pecah['harga_menu'] ?>">
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
        <textarea class="form-control" name="deskripsi_menu" id="" rows="10">
            <?php echo $pecah['deskripsi_menu']; ?>
        </textarea>
    </div>
    <div class="form-group">
        <img src="../admin/gambar_menu/<?php echo $pecah['gambar_menu'] ?>" width="150">
    </div>
    <div class="form-group">
        <label>Ganti Gambar</label>
        <input type="file" name="gambar_menu" class="form-control">
    </div>
    <button class="btn btn-primary" name="ubah">Ubah Menu</button>
</form>
<?php
if(isset($_POST['ubah'])) {
    if(isset($_FILES['gambar_menu']['name']) && ($_FILES['gambar_menu']['name']!="")) {
        
        $ambil = $koneksi->query("SELECT * FROM menu WHERE id_menu='$_GET[id]'");
        $pecah = $ambil->fetch_assoc();
        $gambar_menu1 = $pecah['gambar_menu'];
        $temp=$_FILES['gambar_menu']['tmp_name'];
        $gambar_menu=$_FILES['gambar_menu']['name'];
        if(file_exists("../admin/gambar_menu/$gambar_menu1"))
        {
            @chmod("../admin/gambar_menu/$gambar_menu1",0777);
            @unlink("../admin/gambar_menu/$gambar_menu1");
            move_uploaded_file($temp,"../admin/gambar_menu/$gambar_menu");
        }
    }
    else{
        $gambar_menu=$gambar_menu1;
    }
    $update = $koneksi->query("UPDATE menu SET nama_menu = '$_POST[nama_menu]', harga_menu = '$_POST[harga_menu]', kategori_menu = '$_POST[kategori_menu]', deskripsi_menu = '$_POST[deskripsi_menu]', gambar_menu = '$gambar_menu' WHERE id_menu='$_GET[id]'");
    if($update) {
        echo "<script>alert('Data menu berhasil diubah')</script>";
        echo "<script>window.open('index.php?halaman=menu','_self')</script>";
    }
    else {
        echo "<script>alert('Data menu gagal diubah')</script>";
    }
}
?>