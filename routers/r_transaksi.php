<?php
include_once '../controllers/C_transaksi.php';
$transaksi = new C_transaksi();


if ($_GET['aksi'] == 'tambah') {
    $id_transaksi = $_POST['id'];
    $tanggal_transaksi = $_POST['tanggal_transaksi'];
    $id_wisata = $_POST['id_wisata'];
    $jumlah_wisatawan = $_POST['jumlah_wisatawan'];
    $total_harga = $_POST['total_harga'];

    // $query = $barang->tambah($id=0, $nama, $qty, $harga, $nama_photo);
    $transaksi->tambah($id_transaksi=0, $tanggal_transaksi, $id_wisata, $jumlah_wisatawan, $total_harga) ;
    

} elseif ($_GET['aksi'] == 'update') {
    $id_transaksi = $_POST['id'];
    $tanggal_transaksi = $_POST['tanggal_transaksi'];
    $id_wisata = $_POST['id_wisata'];
    $jumlah_wisatawan = $_POST['jumlah_wisatawan'];
    $total_harga = $_POST['total_harga'];

     // $query = $barang->tambah($id=0, $nama, $qty, $harga, $nama_photo);
     $transaksi->update($id_transaksi, $tanggal_transaksi, $id_wisata, $jumlah_wisatawan, $total_harga);
      
}elseif ($_GET['aksi'] == 'hapus') {
    $id_transaksi = $_GET['id'];

    $transaksi->delete($id_transaksi);
}

?>