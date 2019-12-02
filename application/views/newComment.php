
<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Input Komentar
                </div>
                <div class="card-body">
                    <div class="comment-container">
							<?php echo form_open('Comments/new'); ?>
							<div class="form-group">
								<label for="nama">Nama</label>
								<input class="form-control" id="nama" readonly="" value="<?= $this->session->userdata("user")['name'] ?>"></input>
							</div>
							<div class="form-group">
								<label for="komentar">Komentar</label>
								<textarea class="form-control" id="komentar" name="komentar" rows="3"></textarea>
							</div>
							<b><?php echo form_error("komentar"); ?></b>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Tambah Komentar</button>
								<button type="reset" class="btn btn-danger">Reset</button>
							</div>
						</form>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>