<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Edit Produk
                </div>
                <div class="card-body">
                    <form action="<?php base_url('Produk/add') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $produk->id?>" />
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $produk->nama ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $produk->harga ?>">
                            <small class="form-text text-danger"><?= form_error('harga') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Produk</label>
                            <select class="form-control" id="jenis" name="jenis" value="<?php echo $produk->jenis ?>">
                                <option value="Pants">Pants</option>
                                <option value="Shirts">Shirts</option>
                                <option value="T-Shirt">T-Shirt</option>
                                <option value="Jackets">Jackets</option>
                                <option value="Vests">Vests</option>
                                <option value="Accessories">Accessories</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $produk->jumlah ?>">
                            <small class="form-text text-danger"><?= form_error('jumlah') ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="img">Picture</label><br>
                            <input type="file" name="userfile[]" multiple="multiple" size="20" required>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
