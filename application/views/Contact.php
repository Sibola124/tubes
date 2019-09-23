 
   <div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="text-center">
            <h3>Contact Us</h3>
            <p>general enquiries please email <br> info@potmeetspopdenim.com</p>
            <p>whatsapp <br> +62 817-1717-7420</p>
            <p>line<br> @potmeetspopdenim</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('Kontak/add') ?>" method="post">
              <!-- Name -->  
              <div class="form-group">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Name">
                <small class="form-text text-danger"><?= form_error('nama') ?></small>
              </div>
              <!-- Email -->
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <small class="form-text text-danger"><?= form_error('email') ?></small>
              </div>
              <!-- Phone Number -->
              <div class="form-group">
                <input type="text" class="form-control" id="telp" name="telp" placeholder="Phone Number">
                <small class="form-text text-danger"><?= form_error('telp') ?></small>
              </div>
              <!-- Message -->
              <div class="form-group">
                <textarea class="form-control" id="pesan" name="pesan" rows="6" placeholder="Message"></textarea>
                <small class="form-text text-danger"><?= form_error('pesan') ?></small>
              </div>
                <button type="submit" name="send" class="btn btn-success float-right">SEND</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>