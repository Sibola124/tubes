<style>
    a{
        color: #003300;
        
    }
    a:hover{
        text-decoration: none;
        color: #006600;
    }
</style>
<div class="main-container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('images/carousel/1.jpg')?>"  alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url('images/carousel/2.jpg')?>" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url('images/carousel/3.jpg')?>"  alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3 class="text-center" style="margin: 100px;">Feature</h3>
        </div>
    </div>
    <div class="row">
        <?php foreach ($produk as $pr): ?>
            <div class="col-3 h-100 mb-3">
                <div class="card">
                    <a href="#">
                        <img src="<?php echo base_url('images/'.$pr->img)?>" onmouseover="this.src='<?php echo base_url('images/'.$pr->img2)?>';" onmouseout="this.src='<?php echo base_url('images/'.$pr->img)?>';" class="card-img-top" alt="..." height="400">
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title text-center"><?php echo $pr->nama ?></h5>
                            <p class="card-text text-center" style="color: grey;">Rp <?php echo $pr->harga ?></p>
                        </a>
                        
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div> 