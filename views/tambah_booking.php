<?php
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';

include_once '../controllers/C_wisata.php';

$option = new C_wisata();
?>

<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Transasksi</h1>
                            </div>
                            <form action="../routers/r_booking.php?aksi=tambah" method="POST" class="user">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="id_booking" name="id_booking" hidden>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_user"
                                        placeholder="Nama_user" name="nama_user"  hidden>
                                </div>

                                <div class="form-group">
                                    <select name="nama_wisata" id="nama_wisata" placeholder:>
                                        <option value="">Nama Wisata</option>
                                        <?php foreach($option->tampil() as $b){
                                            ?>
                                        <option value="<?= $b->$nama_wisata?>"> <?= $b->$nama_wisata ?> </option>
                                        <?php } ?>
                                    </select>
                                
                                </div>

                                

                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id="tanggal_booking"
                                        placeholder="tanggal_booking" name="tanggal_booking">
                                </div>

                               

                                <div class="input-field">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah" id="tambah" name="tambah">
                                </div>

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
?>