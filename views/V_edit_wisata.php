<?php
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
include_once '../controllers/C_wisata.php';

$wisata = new C_wisata();
?>
<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit wisata</h1>
                            </div>
                            <form action="../routers/r_wisata.php?aksi=update" method="POST" class="user" enctype = "multipart/form-data">
                                  <?php
                                        foreach ($wisata->edit($_GET['id']) as $b) {
                                    ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="id_wisata"
                                     name="id_wisata" value="<?= $b->id_wisata?>" hidden>
                                </div>

                                <div class="form-group">           
                                    <input type="text" class="form-control form-control-user" id="lokasi"
                                         name="lokasi" value="<?= $b->lokasi?>">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_wisata"
                                        placeholder="Nama_wisata" name="nama_wisata" value="<?= $b->nama_wisata?>">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="kategori_wisata"
                                        placeholder="Kategori_wisata" name="kategori_wisata" value="<?= $b->kategori_wisata?>">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="harga_wisata"
                                        placeholder="Harga_wisata" name="harga_wisata" value="<?= $b->harga_wisata?>">
                                </div>

                                <div class="form-group">
                                <input type="file" class="form-control form-control-user" id="photo"
                                    value="<?= $b->photo ?>" name="photo" hidden>
                            </div>
                           
                            <div class="input-field">
                                <input type="file" value="Choose File" id="photo" name="photo">
                            </div>
                           

                                <div class="input-field">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Update" name="update">
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