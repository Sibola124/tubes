<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Input Pertandingan
                </div>
                <div class="card-body">
                    <form action="<?php base_url('Produk/add') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="harga">Waktu Pertandingan</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tim Home</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tim Away</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Score Tim Home</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Score Tim Away</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga') ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Pertandingan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
