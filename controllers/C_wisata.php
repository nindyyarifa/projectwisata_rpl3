<?php 
include_once 'C_koneksi.php';

class C_wisata{

    public function tampil(){

        $conn = new C_koneksi();

        $sql = "SELECT * FROM wisata ORDER BY id_wisata DESC";
//var_dump($query)
//exit;
        $query = mysqli_query($conn->conn(), $sql);

        while ($p = mysqli_fetch_object($query)) {
            $hasil[] = $p;
        }
        
        return $hasil;

    }
    
       
    public function tambah($id_wisata, $lokasi, $nama_wisata, $kategori_wisata, $harga_wisata, $photo){

        $conn = new C_koneksi();

        $sql = "INSERT INTO wisata VALUES ('$id_wisata', '$lokasi', '$nama_wisata', '$kategori_wisata', '$harga_wisata', '$photo')";  

        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/V_wisata.php'</script>";
        }else {
            echo "gagal ditambahkan";
        }
    }   

    public function edit($id_wisata){

        $conn = new C_koneksi();

        $sql = "SELECT * FROM wisata WHERE id_wisata = '$id_wisata' ";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {
            $hasil[] = $q;
        }
        return $hasil;
    }
       

    public function update($id_wisata, $lokasi, $nama_wisata, $kategori_wisata, $harga_wisata, $photo){
        $conn = new C_koneksi();
        $sql = "UPDATE wisata SET lokasi = '$lokasi' , nama_wisata = '$nama_wisata' , kategori_wisata = '$kategori_wisata' , harga_wisata = '$harga_wisata' , photo ='$photo' WHERE id_wisata = '$id_wisata'";
        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Data Berhasil Diubah');window.location='../views/V_barang.php'</script>";

        }else {
            echo "gagal ditambahkan";
        }
    }   

    public function delete($id_wisata){
        $conn = new C_koneksi();
        $sql = "DELETE FROM wisata WHERE id_wisata = '$id_wisata'";
        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            header ("location: ../views/V_barang.php");
        }
    }

}

?>