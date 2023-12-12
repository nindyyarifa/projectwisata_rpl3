<?php
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
?>

<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Transasksi</h1>
                            </div>
                            <form action="../routers/r_transaksi.php?aksi=tambah" method="POST" class="user" enctype="multipart/form-data">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="id"
                                        placeholder="id" name="id" hidden>
                                </div>

                                <div class="form-group">
                                    <input type="datetime-local" class="form-control form-control-user" id="tanggal_transaksi"
                                        placeholder="Tanggal Transaksi" name="tanggal_transaksi">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="id_wisata"
                                        placeholder="Id Wisata" name="id_wisata">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="jumlah_wisatawan"
                                        placeholder="Jumlah Wisatawan" name="jumlah_wisatawan">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="total_harga"
                                        placeholder="Total Harga" name="total_harga">
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