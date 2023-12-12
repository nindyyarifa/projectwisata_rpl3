<?php
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
include_once '../controllers/C_transaksi.php';

$transaksi = new C_transaksi();
?>
<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit transaksi</h1>
                            </div>
                            <form action="../routers/r_transaksi.php?aksi=update" method="POST" data-parsley-validate class="user">
                                  <?php
                                        foreach ($transaksi->edit($_GET['id']) as $b) {
                                    ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="id"
                                     name="id" value="<?= $b->id_transaksi?>" hidden>
                                </div>

                                <div class="form-group">           
                                    <input type="datetime" class="form-control form-control-user" id="tanggal_transaksi"
                                         name="tanggal_transaksi" value="<?= $b->tanggal_transaksi?>">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="id_wisata"
                                        placeholder="Id_wisata" name="id_wisata" value="<?= $b->id_wisata?>">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="jumlah_wisatawan"
                                        placeholder="Jumlah_wisatawan" name="jumlah_wisatawan" value="<?= $b->jumlah_wisatawan?>">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="total_harga"
                                        placeholder="Total_harga" name="total_harga" value="<?= $b->total_harga?>">
                                </div>
                           

                                <div class="input-field">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Update" id="tambah" name="update">
                                </div>
                                            <?php } ?>
                                <hr>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
<?php
include_once 'template/footer.php'; 
?>                          <?php

?>