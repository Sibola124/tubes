<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Update Pertandingan
                </div>
                <div class="card-body">
                    <form action="<?php base_url('Pertandingan/edit') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="date">Waktu Pertandingan</label>
                            <input type="text" class="form-control" id="date" name="date"value="<?php echo $pertandingan->date ?>">
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
                        <div class="form-group">
                            <label for="score1">Score Tim Home</label>
                            <input type="text" class="form-control" id="score1" name="score1" value="<?php echo $pertandingan->score1 ?>">
                            <small class="form-text text-danger"><?= form_error('score1') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="score2">Score Tim Away</label>
                            <input type="text" class="form-control" id="score2" name="score2" value="<?php echo $pertandingan->score2 ?>">
                            <small class="form-text text-danger"><?= form_error('score2') ?></small>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Update Pertandingan</button>
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