<style>
    .table > tbody > tr > td {
    vertical-align: middle;
}
</style>
<h2><b>Data Pelanggan</b></h2>

<table class="table table-bordered">
    <thead>
        <tr >
            <th>No</th>
            <th>Nama Pelangga</th>
            <th>Email</th>
            <th>Kontak</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $nomor = 1;  ?>
        <?php $ambil=$koneksi->query("SELECT * FROM user"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td width="3%"><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td><?php echo $pecah['email']; ?></td>
            <td><?php echo $pecah['kontak']; ?></td>
            <td width="8%"><a href="1" class="btn btn-danger">Hapus <span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>