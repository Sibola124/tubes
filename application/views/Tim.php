

<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="text-center">
            <h3>Tim</h3>
          </div>
          <div class="card-body">
            <table class="table">
              <thead style="background-color: #262626;">
              </thead>
              <tbody style="color: black; background-color: #f2f2f2;">
                <?php 
                $i = 1;
                foreach ($tim as $t): ?>
                  <tr>
                    <td><img src="<?php echo base_url('images/'.$t->img)?>" style="width:25px; height:25px;"> <a class="nav-link" href="<?= base_url("Tim/tim".$i); ?>"><font color=black><?php echo $t->nama ?></a></font></td>  
                    <?php $i++; ?>      
                  </tr>
                
                <?php endforeach ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>