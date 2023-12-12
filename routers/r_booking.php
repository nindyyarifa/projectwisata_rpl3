<?php
include_once '../controllers/C_wisata.php';
$wisata = new C_wisata();

if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'tambah') {
        $id_booking = $_POST['id_booking'];
        $nama_user = $_POST['nama_user'];
        $tanggal_booking = $_POST['tanggal_booking'];
        $nama_wisata = $_POST['nama_wisata'];
       

    } elseif ($_GET['aksi'] == 'update') {
        $id_booking = $_POST['id_booking'];
        $nama_user = $_POST['nama_wisata'];
        $tanggal_booking = $_POST['tanggal_booking'];
        $nama_wisata = $_POST['nama_wisata'];

        
    } elseif ($_GET['aksi'] == 'hapus') {
        $id_booking = $_GET['id'];
        $wisata->delete($id_booking);
    }
}
?>