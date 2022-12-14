<?php $transportations = $data['transportations']['data']; ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Transportation</h3>
                <p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content
                    container with multiple variants and options.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Transportation</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic card section start -->
    <section id="content-types">
        <div class="row">
            <div class="col-8 col-md-6">
                <form action="<?= BASEURL; ?>/transportations/cari" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukkan nama transportasi..." aria-label="Cari" aria-describedby="button-addon2" name="search">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2" name="submit">Cari</button>
                    </div>
                </form>
            </div>
            <div class="col-4 col-md-6">
                <a class="btn btn-primary" href="<?= BASEURL; ?>/transportations/tambah">
                    <i class="bi bi-plus-lg me-2"></i><span>Tambah</span>
                </a>
            </div>
        </div>
        <div class="row">
            <?php foreach ($transportations as $transportation) : ?>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title"><?= $transportation['name']; ?></h4>
                                <p class="card-text">
                                    <?= $transportation['description']; ?>
                                </p>
                            </div>
                            <img class="img-fluid w-100" src="<?= BASEURL; ?>/images/samples/banana.jpg" alt="Card image cap">
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <span>Kapasitas: <?= $transportation['capacity']; ?></span>
                            <a href="<?= BASEURL; ?>/transportations/detail/<?= $transportation['id']; ?>" class="btn btn-light-primary">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Basic Card types section end -->
</div>