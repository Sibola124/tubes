<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="text-center">
            <h3>Pemain</h3>
          </div>
          <div class="card-body">
            <table class="table">
              <thead style="background-color: #262626;">
              </thead>
              <tbody style="color: black; background-color: #f2f2f2;">
                <?php 
                $i = 1;
                foreach ($pemain as $p): ?>
                  <tr>
                    <td></text><?php echo $p->nama ?></td>  
                    <td></text><?php echo $p->usia ?></td> 
                    <td></text><?php echo $p->role ?></td> 
                    <td></text><?php echo $p->gaji ?></td> 
                </tr>
                
                <?php endforeach ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>