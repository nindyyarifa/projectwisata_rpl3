<?php 
$halaman = "wisata";
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';

include_once '../controllers/C_wisata.php';

$wisata = new C_wisata();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<a href="tambah_barang.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus da-sm text-white-50"></i>Tambah wisata</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Wisata</h6>
    </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Lokasi</th>
                                            <th>Nama Wisata</th>
                                            <th>Kategori Wisata</th>
                                            <th>Harga wisata</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $nomor = 1;
                            foreach ($wisata->tampil() as $p) {
                                        ?>
                                        <tr>
                                            <td><?php echo $nomor++ ?></td>
                                            <td><?= $p->lokasi ?></td>
                                            <td><?= $p->nama_wisata ?></td>
                                            <td><?= $p->kategori_wisata ?></td> 
                                            <td><?= $p->harga_wisata ?></td>        
                                            <td> 
                                                
                                            <div style="display: flex; justify-content: center; align-items: center;">
                                            <img src="<?= "../assets/img/" . $p->photo; ?>" alt="<?= $p->nama_wisata ?>" width="65" height="65">
                                    </div>
                                    </td>
                                            <td align = 'center'><a href="V_edit_wisata.php?id=<?=$p->id_wisata ?>"class="btn btn-primary btn-icon-split">
                                        <span class="text">Edit</span>
                                    </a>
                                         <a onclick="return confirm('Apakah yakin data akan di hapus?')"
                                    href="..//routers/r_wisata.php?id=<?= $p->id_wisata ?>&aksi=hapus"><button type="button" name="hapus"  class="btn btn-danger ">hapus</button></a>
                                        <span class="text"></span>
                                    </a>
                                </td>
                                    </tr>
                                    
                                <?php }?>
                                
                                    </tbody>
                                    <tfoot>                               
                                        <tr>
                                            <th>No</th>
                                            <th>Lokasi</th>
                                            <th>Nama Wisata</th>
                                            <th>Kategori Wisata</th>
                                            <th>Harga wisata</th>
                                            <th>Photo</th>
                                            <th>Action</th>
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
