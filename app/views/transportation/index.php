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
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Transportation</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic card section start -->
    <section id="content-types">
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
                            <button class="btn btn-light-primary">Read More</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Basic Card types section end -->
</div>