<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="<?= base_url("assets/css/style.css?".time()) ?>">

<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="text-center">
            <h3>Diskusi</h3>
          </div>
          <div class="card-body">
          	<?php if ($this->session->userdata("user")['logged']): ?>
          		<a class="btn btn-light" href="<?= base_url('Comments/new') ?>">Beri Komentar</a>
          	<?php endif ?>
          	
        	<div id="comments">
				<?php 
					foreach($komentar as $kom) {

						echo "<div class='comment-container'>";
						echo "<div class='media comment-box'>";
						echo "<div class='media-left'>";
						echo "<img class='img-responsive user-photo' src='https://ssl.gstatic.com/accounts/ui/avatar_2x.png'>";	
						echo "</div>";
						echo "<div class='media-body'>";
						echo "<h5 class='media-heading'>" . $kom['nama'] . "<small> " . $kom['time_create'] . "</small>";
						if($this->session->userdata("user")['logged'] && $this->session->userdata("user")['id'] == $kom['id_author']) { 
							echo "<div style='font-size: 14px; float: right; margin: 5px'>";
							echo "<a href=" . base_url("Comments/editComment/".$kom['id']) ." class='btn-primary' style='padding: 3px; border-radius: 5px; padding: 4px 7px; margin: 0px 3px'>Edit</a>";
							echo "<a href=" . base_url("Comments/del/".$kom['id']) . " class='btn-danger' style='padding: 3px; border-radius: 5px; padding: 4px 7px; margin: 0px 3px'>Delete</a>";
							echo "</div>";
				
						};	
						echo  "</h5>";
						echo "<p>" . $kom['komentar'] ;			
						echo "</p></div> </div> </div>";		
					}
				?>
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>
