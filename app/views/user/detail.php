<?php

$user = $data['user']['data'];

?>

<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>User Detail</h3>
        <p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content
          container with multiple variants and options.</p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/user">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Basic card section start -->
  <section id="content-types">
    <div class="row">
      <div class="col-md-10 col-sm-12">
        <div class="card">
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
  </section>
  <!-- Basic Card types section end -->
</div>