<style>
    a{
        color: #003300;
        
    }
    a:hover{
        text-decoration: none;
        color: #006600;
    }
</style>
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col">
            <h3 class="text-center" style="margin: 100px;">SHOP ALL</h3>
        </div>
    </div>
    <div class="row">
        <?php foreach ($produk as $pr): ?>
            <div class="col-4 h-100 mb-3">
                <div class="card">
                    <a href="#">
                        <img src="<?php echo base_url('images/'.$pr->img)?>" onmouseover="this.src='<?php echo base_url('images/'.$pr->img2)?>';" onmouseout="this.src='<?php echo base_url('images/'.$pr->img)?>';" class="card-img-top" alt="..." height="450">
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title text-center"><?php echo $pr->nama ?></h5>
                            <p class="card-text text-center" style="color: grey;">Rp <?php echo $pr->harga ?></p>
                        </a>
                        <center><div style="margin-top: 13px;">
                            <a href="<?= base_url(); ?>produk/delete/<?= $pr->id ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus produk ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>produk/edit/<?= $pr->id ?>" class="btn btn-success" ?>ubah</a>
                        </div></center>
                        
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div> 