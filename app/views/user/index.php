<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>User</h3>
        <p class="text-subtitle text-muted">Daftar data pengguna.</p>
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
      <div class="col-12 col-sm-8">
        <form action="<?= BASEURL; ?>/users/cari" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan nama user..." aria-label="Cari" aria-describedby="button-addon2" name="search">
            <button class="btn btn-outline-primary" type="submit" id="button-addon2" name="submit">Cari</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?php Flasher::flash(); ?>
      </div>
    </div>
    <div class="row" id="table-hover-row">
      <div class="col-12">
        <div class="card shadow rounded">
          <!-- table hover -->
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>PHONE</th>
                  <th>ADDRESS</th>
                  <th>ROLE</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!$data['users']['data']) : ?>
                  <tr>
                    <td class="text-center" colspan="6">Data Not Found</td>
                  </tr>
                <?php else : ?>
                  <?php foreach ($data['users']['data'] as $user) : ?>
                    <tr>
                      <td><a class="fw-bold navbar-brand" href="<?= BASEURL; ?>/users/detail/<?= $user['id']; ?>"><?= $user['fullName']; ?></a></td>
                      <td><?= $user['email']; ?></td>
                      <td><?= $user['phone']; ?></td>
                      <td><?= $user['address']; ?></td>
                      <td><?= $user['role']; ?></td>
                      <td>
                        <a href="<?= BASEURL; ?>/users/edit/<?= $user['id']; ?>">
                          <i class="bi bi-pencil-fill me-2"></i>
                        </a>
                        <a href="<?= BASEURL; ?>/users/delete/<?= $user['id']; ?>">
                          <i class="bi bi-trash3-fill"></i>
                        </a>
                      </td>
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
</div>
<!-- Hoverable rows end -->
</div>