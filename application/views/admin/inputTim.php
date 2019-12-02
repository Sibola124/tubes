<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Input Tim
                </div>
                <div class="card-body">
                    <form action="<?php base_url('Tim/inputTim') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Tim</label>
                            <input type="text" class="form-control" id="nama" name="nama" readonly value="<?php echo $tim->nama ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Menang</label>
                            <input type="text" class="form-control" id="m" name="m" value="<?php echo $tim->m ?>">
                            <small class="form-text text-danger"><?= form_error('m') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="s">Seri</label>
                            <input type="text" class="form-control" id="s" name="s" value="<?php echo $tim->s ?>">
                            <small class="form-text text-danger"><?= form_error('s') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kalah</label>
                            <input type="text" class="form-control" id="k" name="k" readonlys value="<?php echo $tim->k ?>">
                            <small class="form-text text-danger"><?= form_error('k') ?></small>
                        </div>
                
                        <input type="text" name="id_tim" value="<?php echo $tim->id_tim ?>" hidden>
                        <input type="text" name="nama" value="<?php echo $tim->nama ?>" hidden>
                        <input type="text" name="lokasi" value="<?php echo $tim->lokasi ?>" hidden>

                        <button type="submit" name="add" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>