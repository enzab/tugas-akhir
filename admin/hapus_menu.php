<?php

$ambil = $koneksi->query("SELECT * FROM menu WHERE id_menu='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambar_menu = $pecah['gambar_menu'];
if(file_exists("../admin/gambar_menu/$gambar_menu"))
{
    @chmod("../admin/gambar_menu/$gambar_menu",0777);
    $do = @unlink("../admin/gambar_menu/$gambar_menu");
}

$koneksi->query("DELETE FROM menu WHERE id_menu='$_GET[id]'");

if($do=="1"){
    echo "Data menu berhasil dihapus.";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=menu'>"; 
} else { echo "Data menu gagal dihapus."; } 

?>