<style type="text/css">
  .table {
    border-collapse: separate;
    border-spacing:0 20px;
}
</style>
<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="text-center">
            <h3>Jadwal Pertandingan</h3>
          </div>
          <div class="card-body">
            <a class="btn btn-dark" href="<?= base_url(); ?>Pertandingan/inputPertandingan">Input Jadwal</a>
            <table class="table">
            <thead style="background-color: #262626;">
                <tr style="color: white;">
                  <th scope="col">Tanggal</th>
                  <th scope="col">Tim yang bertanding</th>
                  <?php if ($this->session->userdata("user")['logged'] && $this->session->userdata("user")['username'] == 'admin'): ?>
                      <th scope="col">Aksi</th>
                  <?php endif ?>              
                </tr>
              </thead>
              <tbody style="color: black; background-color: #f5f5ef;">
                <?php
                foreach ($pertandingan as $p): ?>
                  <?php if ($p->score1 == null && $p->score2 == null): ?>
                    <tr>
                    <td>
                      <?php echo $p->date ?>
                    </td>
                    <td>
                      <?php echo $p->tim1?> vs <?php echo $p->tim2?>
                    </td>
                    <?php if ($this->session->userdata("user")['logged'] && $this->session->userdata("user")['username'] == 'admin'): ?>
                      <td width="250">
                      <a href="<?= base_url(); ?>Pertandingan/delete/<?= $p->id_pertandingan ?>" class=" btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus jadwal ini?');" ?>hapus
                      </a>
                      <a href="<?= base_url(); ?>Pertandingan/edit/<?= $p->id_pertandingan ?>" class="btn btn-success" ?>ubah
                      </a>
                    </td>
                    <?php endif ?> 
                  </tr>
                  <?php endif ?>
                <?php endforeach?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

