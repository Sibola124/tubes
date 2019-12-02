<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center" >
                    DAFTAR
                </div>
                <div class="card-body">
                    <form action="<?php base_url('Produk/add') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Lengksp</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Username</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Email</label>
                            <input type="Email" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Password</label>
                            <input type="Password" class="form-control" id="jumlah" name="jumlah">
                            <small class="form-text text-danger"><?= form_error('jumlah') ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary btn-block text-uppercase" style="background-color: black; color: white;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
