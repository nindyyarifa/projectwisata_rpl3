<?php 
$halaman = "transaksi";
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';

include_once '../controllers/C_transaksi.php';

$transaksi = new C_transaksi();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<?php
 if ($_SESSION['data']['role'] == 'admin'){?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<a href="tambah_transaksi.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus da-sm text-white-50"></i>Tambah Transaksi</a>
</div>
<?php } ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">transaksi</h6>
    </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Id Wisata</th>
                                            <th>Jumlah Wisatawan</th>
                                            <th>Total Harga</th>
                                            <?php
                                                if ($_SESSION['data']['role'] == 'admin'){?>
                                               <th>Action</th>
                                            <?php } ?>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($transaksi->tampil() as $p) {
                                    ?>
                                        <tr>
                                            <td><?php echo $nomor++ ?></td>
                                            <td><?= $p->tanggal_transaksi ?></td>
                                            <td><?= $p->id_wisata ?></td>
                                            <td><?= $p->jumlah_wisatawan ?></td> 
                                            <td><?= $p->total_harga ?></td>  
                                            
                                            <?php
                                                if ($_SESSION['data']['role'] == 'admin'){?>

                                            
                                            <td align = 'center'><a href="V_edit_transaksi.php?id=<?= $p->id_transaksi  ?>"class="btn btn-primary btn-icon-split">
                                        <span class="text">Edit</span>
                                    </a>
                                         <a onclick="return confirm('Apakah yakin data akan di hapus?')"
                                    href="../routers/r_transaksi.php?id=<?= $p->id_transaksi?>&aksi=hapus"><button type="button" name="hapus"  class="btn btn-danger ">hapus</button></a>
                                        <span class="text"></span>
                                    </a>
                                </td>
                                <?php } ?>
                    
                                    </tr>
                                    
                                <?php }?>
                                
                                    </tbody>
                                    <tfoot>                               
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Id Wisata</th>
                                            <th>Jumlah Wisatawan</th>
                                            <th>Total Harga</th>
                                            <?php
                                                if ($_SESSION['data']['role'] == 'admin'){?>
                                            <th>Action</th>
                                            <?php } ?>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
<?php
include_once 'template/footer.php';
?>
