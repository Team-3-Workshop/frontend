<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Tour Guide</h3>
        <p class="text-subtitle text-muted">Daftar data pemandu wisata.</p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">User</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Hoverable rows start -->
  <section class="section">
    <div class="row">
      <div class="col-8 col-sm-6">
        <form action="<?= BASEURL; ?>/tourGuides/cari" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan nama pemandu wisata..." aria-label="Cari" aria-describedby="button-addon2" name="search">
            <button class="btn btn-outline-primary" type="submit" id="button-addon2" name="submit">Cari</button>
          </div>
        </form>
      </div>
      <div class="col-4 col-md-6">
        <a class="btn btn-primary" href="<?= BASEURL; ?>/tourGuides/tambah">
          <span>Tambah</span>
        </a>
      </div>
    </div>
    <div class="row">
      <?php Flasher::flash(); ?>
    </div>
    <div class="row" id="table-hover-row">
      <div class="col-12">
        <div class="card shadow">
          <!-- table hover -->
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>NAME</th>
                  <th>PHONE</th>
                  <th>ADDRESS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['tourGuides']['data'] as $tourGuide) : ?>
                  <tr>
                    <td><a class="fw-bold navbar-brand" href="<?= BASEURL; ?>/tourGuides/detail/<?= $tourGuide['id']; ?>"><?= $tourGuide['fullName']; ?></a></td>
                    <td><?= $tourGuide['phone']; ?></td>
                    <td><?= $tourGuide['address']; ?></td>
                    <td>
                      <a href="<?= BASEURL; ?>/tourGuides/edit/<?= $tourGuide['id']; ?>">
                        <i class="bi bi-pencil-fill me-2"></i>
                      </a>
                      <a href="<?= BASEURL; ?>/tourGuides/delete/<?= $tourGuide['id']; ?>">
                        <i class="bi bi-trash3-fill"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
<!-- Hoverable rows end -->
</div>