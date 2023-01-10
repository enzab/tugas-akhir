<style>
    .table > tbody > tr > td {
    vertical-align: middle;
}
</style>

<h2><b>Data Pembelian</b></h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelangga</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1;  ?>
        <?php $ambil = $koneksi->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id_user"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td width="3%"><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama'];  ?></td>
            <td><?php echo $pecah['tanggal_pembelian'];  ?></td>
            <td><?php echo $pecah['total_pembelian'];  ?></td>
            <td width="8%"><a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-info">Detail <span class="glyphicon glyphicon-info-sign" style="font-size:15px"></span></a></td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>