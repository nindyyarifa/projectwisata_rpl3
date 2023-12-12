<?php 
include_once 'C_koneksi.php';

class C_wisata{

    public function tampil(){

        $conn = new C_koneksi();

        $sql = "SELECT * FROM booking ORDER BY id_booking DESC";
//var_dump($query)
//exit;
        $query = mysqli_query($conn->conn(), $sql);

        while ($p = mysqli_fetch_object($query)) {
            $hasil[] = $p;
        }
        
        return $hasil;

    }
    
       
    public function tambah($id_booking, $nama_user, $tanggal_booking, $nama_wisata){

        $conn = new C_koneksi();

        $sql = "INSERT INTO wisata VALUES ('$id_booking', '$nama_user', '$tanggal_booking', '$nama_wisata')";  

        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/V_wisata.php'</script>";
        }else {
            echo "gagal ditambahkan";
        }
    }   

}

?>