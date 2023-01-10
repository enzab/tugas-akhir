<h2><b>Detail Pembelian</b></h2>

<?php

$ambil = $koneksi->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id_user WHERE pembelian.id_pembelian='$_GET[id]' ");
$detail = $ambil->fetch_assoc();
?>


<strong>Nama: <?php echo $detail['nama']; ?></strong> <br>
<p>
Email: <?php echo $detail['email']; ?> <br>
Kontak: <?php echo $detail['kontak']; ?>
</p>
<p>
Tanggal Pembelian: <?php echo $detail['tanggal_pembelian']; ?> <br>
Total Harga Belanja: Rp.<?php echo $detail['total_pembelian']; ?>
</p>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Jumlah </th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1;  ?>
        <?php $ambil = $koneksi->query("SELECT * FROM pembelian_menu JOIN menu ON pembelian_menu.id_menu=menu.id_menu WHERE pembelian_menu.id_pembelian = '$_GET[id]'"); ?>
        <?php while($pecah=$ambil->fetch_assoc()) {  ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_menu']; ?></td>
            <td><?php echo $pecah['harga_menu']; ?></td>
            <td><?php echo $pecah['jumlah']; ?></td>
            <td><?php echo $pecah['harga_menu']*$pecah['jumlah']; ?></td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>

