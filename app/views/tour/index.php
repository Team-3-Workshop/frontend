<div class="page-heading">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tour</h3>
                <p class="text-subtitle text-muted">Daftar data wisata.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tour</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic card section start -->
    <section id="content-types">
        <div class="row">
            <div class="col-8 col-md-6">
                <form action="<?= BASEURL; ?>/tours/cari" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukkan nama wisata..." aria-label="Cari" aria-describedby="button-addon2" name="search">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2" name="submit">Cari</button>
                    </div>
                </form>
            </div>
            <div class="col-4 col-md-6">
                <a class="btn btn-primary" href="<?= BASEURL; ?>/tours/tambah">
                    <span>Tambah</span>
                </a>
            </div>
        </div>
        <div class="row">
            <?php Flasher::flash(); ?>
        </div>
        <div class="row">
            <?php foreach ($data['tours']['data'] as $tour) : ?>
                <div class="col-md-6 col-sm-12">
                    <div class="card shadow">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="<?= BASEURL; ?>/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body">
                                <h4 class="card-title"><?= $tour['destination']; ?></h4>
                                <h6 class="card-subtitle mb-3 text-muted">Rp. <?= number_format($tour['price'], 2, ',', '.'); ?></h6>
                                <p class="card-text text-wrap">
                                    <?= $tour['description']; ?>
                                </p>
                                <a href="<?= BASEURL; ?>/tours/detail/<?= $tour['id']; ?>">See More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Basic Card types section end -->
</div>