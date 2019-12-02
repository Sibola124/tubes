<br>
<div class="comment-container">

		<?php echo form_open('comments/edit'); ?>

		<div class="form-group">
			<label for="nama">Nama</label>
			<input class="form-control" id="nama" readonly value="<?= $this->session->userdata("user")['name'] ?>"></input>
		</div>
		<div class="form-group">
			<label for="komentar">Komentar</label>
			<textarea class="form-control" id="komentar" name="komentar" rows="3" required><?php echo $komentar['komentar'] ?></textarea>
		</div>
		<input type="text" name="komentar_id" value="<?php echo $komentar['id'] ?>" hidden>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Submit</button>
			<a href="<?php echo base_url(); ?>" class="btn btn-primary">Cancel</a>
		</div>
	</form>

</div>
</div>