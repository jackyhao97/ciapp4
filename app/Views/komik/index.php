<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="<?= base_url(
          '/komik/create'
      ) ?>" class="btn btn-primary mt-3">Tambah Data Komik</a>
      <h1 class="mt-2 fw-bold">Daftar Komik</h1>
      <?php if (session()->getFlashData('pesan')): ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashData('pesan') ?>
        </div>
      <?php endif; ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($komik as $k):

              $img = $k['sampul'];
              $slug = $k['slug'];
              ?>          
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><img src='<?= base_url(
                  "/img/$img"
              ) ?>' alt="" class="sampul"></td>
              <td><?= $k['judul'] ?></td>
              <td><a href="<?= base_url(
                  "/komik/$slug"
              ) ?>" class="btn btn-success">Detail</a></td>
            </tr>
          <?php $i++;
          endforeach;
          ?>
        </tbody>  
      </table>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
