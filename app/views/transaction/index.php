<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Transaction</h3>
        <p class="text-subtitle text-muted">Daftar data transaksi.</p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Transaction</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Hoverable rows start -->
  <section class="section">
    <div class="row">
      <div class="col-12">
        <?php Flasher::flash(); ?>
      </div>
    </div>
    <div class="row" id="table-hover-row">
      <div class="col-12">
        <div class="card shadow">
          <!-- table hover -->
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>NAMA</th>
                  <th>WISATA</th>
                  <th>TANGGAL PENJEMPUTAN</th>
                  <th>TANGGAL TRANSAKSI</th>
                  <th>HARGA</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!$data['transactions']['data']) : ?>
                  <tr>
                    <td class="text-center" colspan="6">Data Not Found</td>
                  </tr>
                <?php else : ?>
                  <?php foreach ($data['transactions']['data'] as $transaction) : ?>
                    <tr>
                      <td>
                        <a class="fw-bold navbar-brand" href="<?= BASEURL; ?>/users/detail/<?= $transaction['userId']; ?>"><?= $transaction['User']['fullName']; ?></a>
                      </td>
                      <td>
                        <a class="fw-semibold navbar-brand" href="<?= BASEURL; ?>/tours/detail/<?= $transaction['Tours'][0]['id']; ?>"><?= $transaction['Tours'][0]['destination']; ?></a>
                      </td>
                      <td><?= date_format(date_create($transaction['date']), "d/m/Y"); ?></td>
                      <td><?= date_format(date_create($transaction['createdAt']), "d/m/Y"); ?></td>
                      <td>Rp. <?= number_format($transaction['Tours'][0]['price'], 2, ',', '.'); ?></td>
                      <td>
                        <a href="<?= BASEURL; ?>/transactions/edit/<?= $transaction['id']; ?>">
                          <i class="bi bi-pencil-fill me-2"></i>
                        </a>
                        <a href="<?= BASEURL; ?>/transactions/delete/<?= $transaction['id']; ?>">
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
</div>
</section>
<!-- Hoverable rows end -->
</div>