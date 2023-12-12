<?php
include_once '../controllers/C_wisata.php';
$wisata = new C_wisata();

    if ($_GET['aksi'] == 'tambah') {
        $id_wisata = $_POST['id'];
        $lokasi = $_POST['lokasi'];
        $nama_wisata = $_POST['nama_wisata'];
        $kategori_wisata = $_POST['kategori_wisata'];
        $harga_wisata = $_POST['harga_wisata'];

        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        if (isset($_FILES['photo']['name'])) {
            $photo = $_FILES['photo']['name'];

            $x = explode('.', $photo);
            $ekstensi = strtolower(end($x));

            $ukuran = $_FILES['photo']['size'];
            $file_tmp = $_FILES['photo']['tmp_name'];

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                if ($ukuran < 1044070) {
                    move_uploaded_file($file_tmp, '../assets/img/' . $photo);
                    $wisata->tambah($id_wisata=0, $lokasi, $nama_wisata, $kategori_wisata, $harga_wisata, $photo);
                } else {
                    echo "EKSTENSI GAMBAR TERLALU BESAR";
                }
            } else {
                echo "EKSTENSI TIDAK DIPERBOLEHKAN";
            }
        } else {
            echo "Gambar tidak diupload.";
        }

    } elseif ($_GET['aksi'] == 'update') {
        $id_wisata = $_POST['id_wisata'];
        $lokasi = $_POST['lokasi'];
        $nama_wisata = $_POST['nama_wisata'];
        $kategori_wisata = $_POST['kategori_wisata'];
        $harga_wisata = $_POST['harga_wisata'];

        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $photo = $_FILES['photo']['name'];

        $x = explode('.', $photo);
        $ekstensi = strtolower(end($x));

        $ukuran = $_FILES ['photo']['size'];
        $file_tmp = $_FILES['photo']['tmp_name']; 

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1044070) {
                move_uploaded_file($file_tmp, '../assets/img/' . $photo);

                $wisata->update($id_wisata, $lokasi, $nama_wisata, $kategori_wisata, $harga_wisata, $photo);
                } else {
                    echo "EKSTENSI GAMBAR TERLALU BESAR";
                }
            } else {
                echo "EKSTENSI TIDAK DIPERBOLEHKAN";
            }
        

    } elseif ($_GET['aksi'] == 'hapus') {
        $id_wisata = $_GET['id'];

        $wisata->delete($id_wisata);
    }

?>