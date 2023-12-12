<?php 
include_once 'C_koneksi.php';

class C_transaksi{

    public function tampil(){

        $conn = new C_koneksi();

        $sql = "SELECT * FROM transaksi ORDER BY id_transaksi DESC";

        $query = mysqli_query($conn->conn(), $sql);

        while ($p = mysqli_fetch_object($query)) {
            
            $hasil[] = $p;
        }
        
        return $hasil;
    }
    
       
    public function tambah($id_transaksi, $tanggal_transaksi, $id_wisata, $jumlah_wisatawan, $total_harga){

        $conn = new C_koneksi();

        $sql = "INSERT INTO transaksi VALUES ('$id_transaksi', '$tanggal_transaksi', '$id_wisata', '$jumlah_wisatawan', '$total_harga')";  

        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/V_transaksi.php'</script>";
        }else {
            echo "gagal ditambahkan";
        }
    }   

    public function edit($id_transaksi){

        $conn = new C_koneksi();

        $sql = "SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi' ";

        $query = mysqli_query($conn->conn(), $sql);

        while ($p = mysqli_fetch_object($query)) {
            $hasil[] = $p;
        }
        return $hasil;
    }
       

    public function update($id_transaksi, $tanggal_transaksi, $id_wisata, $jumlah_wisatawan, $total_harga){
        $conn = new C_koneksi();
        $sql = "UPDATE transaksi SET tanggal_transaksi = '$tanggal_transaksi' , id_wisata = '$id_wisata' , jumlah_wisatawan = '$jumlah_wisatawan' , total_harga = '$total_harga' WHERE id_transaksi = '$id_transaksi'";
        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Data Berhasil Diubah');window.location='../views/V_transaksi.php'</script>";
        }else {
            echo "gagal ditambahkan";
        }
    }   

    public function delete($id_transaksi){
        $conn = new C_koneksi();
        $sql = "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'";
        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            header ("location: ../views/V_transaksi.php");
        }
    }

}

?>






