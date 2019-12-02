
<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="text-center">
            <h3>Klasemen</h3>
          </div>
          <div class="card-body">
            <table class="table">
              <thead style="background-color: #262626;">
                <tr style="color: white;">
                  <th scope="col">Pos</th>
                  <th scope="col">Tim</th>
                  <th scope="col">M</th>
                  <th scope="col">M</th>
                  <th scope="col">S</th>
                  <th scope="col">K</th>
                  <th scope="col">Poin</th>
                 
                  </tr>
              </thead>
              <tbody style="color: black; background-color: #f2f2f2;">
                <?php 
                $i = 1;
                foreach ($tim as $t): ?>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td><img src="<?php echo base_url('images/logo/'.$t->img)?>" style="width:25px; height:25px;"><text>  </text><?php echo $t->nama ?></td>
                    <td width="250">
                      <a href="<?= base_url(); ?>Tim/inputtim/<?= $t->id_tim ?>" class="btn btn-success" ?>ubah
                      </a>
                      
                    </td>
                  </tr>
                
                <?php endforeach ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>