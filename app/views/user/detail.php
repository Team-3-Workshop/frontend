<?php

$user = $data['user']['data'];

?>

<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3><?= $data['title']; ?></h3>
        <p class="text-subtitle text-muted">This page is providing data from a user.</p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/users">User</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $data['title']; ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Basic card section start -->
  <section id="content-types">
    <div class="row">
      <div class="col-md-10 col-sm-12">
        <div class="card shadow rounded">
          <div class="row g-0">
            <div class="col-md-4">
              <img class="img-fluid rounded-start" src="<?= BASEURL; ?>/images/samples/water.jpg" alt="Card image cap" style="height: 100%; object-fit: cover;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h4 class="card-title mb-4"><?= $user['fullName']; ?></h4>

                <div class="row mb-2">
                  <div class="col-4">
                    <p class="card-text">Nama Depan</p>
                  </div>

                  <div class="col-8">
                    <p class="text-muted"><?= $user['firstName']; ?></p>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-4">
                    <p class="card-text">Nama Belakang</p>
                  </div>

                  <div class="col-8">
                    <p class="text-muted"><?= $user['lastName']; ?></p>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-4">
                    <p class="card-text">Kewarganegaraan</p>
                  </div>

                  <div class="col-8">
                    <p class="text-muted"><?= $user['citizen']; ?></p>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-4">
                    <p class="card-text">NIK</p>
                  </div>

                  <div class="col-8">
                    <p class="text-muted"><?= $user['nik']; ?></p>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-4">
                    <p class="card-text">Alamat</p>
                  </div>

                  <div class="col-8">
                    <p class="text-muted"><?= $user['address']; ?></p>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-4">
                    <p class="card-text">Tanggal Lahir</p>
                  </div>

                  <div class="col-8">
                    <p class="text-muted"><?= $user['date']; ?></p>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-4">
                    <p class="card-text">Nomor Telepon</p>
                  </div>

                  <div class="col-8">
                    <p class="text-muted"><?= $user['phone']; ?></p>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-4">
                    <p class="card-text">E-mail</p>
                  </div>

                  <div class="col-8">
                    <p class="text-muted"><?= $user['email']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="table-hover-row">
      <div class="col-md-10 col-sm-12">
        <div class="card shadow rounded">
          <!-- table hover -->
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>WISATA</th>
                  <th>TANGGAL PENJEMPUTAN</th>
                  <th>TANGGAL TRANSAKSI</th>
                  <th>HARGA</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!$user['Transactions']) : ?>
                  <tr>
                    <td class="text-center" colspan="4">Data Not Found</td>
                  </tr>
                <?php else : ?>
                  <?php foreach ($user['Transactions'] as $tour) : ?>
                    <tr>
                      <td>
                        <a class="fw-semibold navbar-brand" href="<?= BASEURL; ?>/tours/detail/<?= $tour['Tours'][0]['id']; ?>"><?= $tour['Tours'][0]['destination']; ?></a>
                      </td>
                      <td><?= date_format(date_create($tour['Tours'][0]['date']), "d/m/Y"); ?></td>
                      <td><?= date_format(date_create($tour['Tours'][0]['createdAt']), "d/m/Y"); ?></td>
                      <td>Rp. <?= number_format($tour['Tours'][0]['price'], 2, ',', '.'); ?></td>
                    </tr>
                  <?php endforeach ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Basic Card types section end -->
</div>