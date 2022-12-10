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
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">User</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Hoverable rows start -->
  <section class="section">
    <div class="row" id="table-hover-row">
      <div class="col-12">
        <div class="card">
          <!-- table hover -->
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>PHONE</th>
                  <th>CITIZEN</th>
                  <th>ADDRESS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['users']['data'] as $user) : ?>
                  <tr>
                    <td><a href="<?= BASEURL; ?>/user/detail/<?= $user['id']; ?>"><?= $user['fullName']; ?></a></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['phone']; ?></td>
                    <td><?= $user['citizen']; ?></td>
                    <td><?= $user['address']; ?></td>
                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
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