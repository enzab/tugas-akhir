<style>
    .table > tbody > tr > td {
        vertical-align: middle;
    }
    .tambah {
        float:right;
        margin-bottom: 15px;
    }
</style>

<h2><b>Data Menu</b></h2>
<div class="tambah"><a href="index.php?halaman=tambah_menu" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Menu</a></div>
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1;  ?>
        <?php $ambil=$koneksi->query("SELECT * FROM menu"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td  width="3%"><?php echo $nomor; ?></td>
            <td width="20%"><?php echo $pecah['nama_menu']; ?></td>
            <td width="10%">Rp. <?php echo $pecah['harga_menu']; ?></td>
            <td width="8%"><img src="../admin/gambar_menu/<?php echo $pecah['gambar_menu'];?>" width="80" height="80"></td>
            <td width="9%"><?php echo $pecah['kategori_menu']; ?></td>
            <td><?php echo $pecah['deskripsi_menu']; ?></td>
            <td width="17%"><a href="index.php?halaman=hapus_menu&id=<?php echo $pecah['id_menu']; ?>" class="btn btn-danger">Hapus <span class="glyphicon glyphicon-trash"></span></a><a style="margin-left:10px" href="index.php?halaman=ubah_menu&id=<?php echo $pecah['id_menu']; ?>"  class="btn btn-primary">Ubah <span class="glyphicon glyphicon-pencil" style="font-size:15px;"></span></a></td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>
