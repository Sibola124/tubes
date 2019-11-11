<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="text-center">
            <h3>Pemain PersiBanten</h3>
            <img src="<?php echo base_url('images/logo/persibanten.png')?>" style="width:100px; height:100px;">
          </div>
          <div class="card-body">
            <table class="table">
              <thead style="background-color: #262626;">
                <tr style="color: white;">
                  <th scope="col">Nama</th>
                  <th scope="col">Usia</th>    
                  <th scope="col">Role</th> 
                  <th scope="col">Gaji</th>           
                </tr>
              </thead>
              <tbody style="color: black; background-color: #f2f2f2;">
                <?php 
                foreach ($pemain as $p): ?>
                  <tr>
                    <td><?php echo $p->nama ?></td>  
                    <td><?php echo $p->usia ?></td> 
                    <td><?php echo $p->role ?></td> 
                    <td><?php echo $p->gaji ?></td> 
                </tr>
                
                <?php endforeach ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>