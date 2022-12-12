<div class="page-heading">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Hotel</h3>
                <p class="text-subtitle text-muted">Daftar data hotel.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <a class="btn btn-primary" href="<?= BASEURL; ?>/hotels/tambah">
                    <i class="bi bi-plus-lg me-2"></i><span>Tambah</span>
                </a>
            </div>
        </div>
    </div>
    <?php Flasher::flash(); ?>
    <!-- Basic card section start -->
    <section id="content-types">
        <div class="row">
            <?php foreach ($data['hotels']['data'] as $hotel) : ?>
                <div class="col-md-6 col-sm-12">
                    <div class="card shadow rounded">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="<?= BASEURL; ?>/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body">
                                <h4 class="card-title"><?= $hotel['name']; ?></h4>
                                <h6 class="card-subtitle mb-3 text-muted"><?= $hotel['address']; ?></h6>
                                <p class="card-text text-wrap">
                                    <?= $hotel['description']; ?>
                                </p>
                                <a href="<?= BASEURL; ?>/hotels/detail/<?= $hotel['id']; ?>">See More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Basic Card types section end -->
</div>