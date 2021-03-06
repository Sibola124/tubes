<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Input Jadwal Pertandingan
                </div>
                <div class="card-body">
                    <form action="<?php base_url('Pertandingan/inputPertandingan') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="date">Waktu Pertandingan</label>
                            <input type="text" class="form-control" id="date" name="date">
                            <small class="form-text text-danger"><?= form_error('date') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tim1">Tim Home</label>
                            <select class="form-control" name="tim1">
                            <?php 
                            foreach($tim as $row)
                            { 
                                echo '<option value="'.$row->id_tim.'">'.$row->nama.'</option>';
                            }
                            ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="tim2">Tim Away</label>
                            <select class="form-control" name="tim2">
                            <?php 
                            foreach($tim as $row)
                            { 
                                echo '<option value="'.$row->id_tim.'">'.$row->nama.'</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <button type="submit" name="add" class="btn btn-primary float-right">Tambah Pertandingan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  $( function() {
    $( "#date" ).datepicker();
  } );
</script>