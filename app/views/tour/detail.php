<?php

$tour = $data['tour']['data'];

?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tour Detail</h3>
                <p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content
                    container with multiple variants and options.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/tours">Tour</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic card section start -->
    <section id="content-types">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card shadow rounded">
                    <img src="<?= BASEURL; ?>/images/samples/origami.jpg" class="card-img-top img-fluid rounded-top" alt="Tour Image" style="height: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $tour['destination']; ?></h5>
                        <small class="text-muted">Rp. <?= number_format($tour['price'], 2, ',', '.'); ?></small>
                        <p class="card-text mt-4"><?= $tour['description']; ?></p>
                    </div>
                    <ul class="list-group list-group-flush px-2">
                        <li class="list-group-item">
                            <a href="<?= BASEURL; ?>/hotels/detail/<?= $tour['hotelId']; ?>" class="fw-bold"><?= $tour['Hotel']['name']; ?></a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?= BASEURL; ?>/transportations/detail/<?= $tour['transportationId']; ?>" class="fw-bold"><?= $tour['Transportation']['name']; ?></a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?= BASEURL; ?>/tourGuides/detail/<?= $tour['tourGuideId']; ?>" class="fw-bold"><?= $tour['TourGuide']['fullName']; ?></a>
                            <p><?= $tour['TourGuide']['phone']; ?></p>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex">
                                <a href="<?= BASEURL; ?>/tours" class="align-self-center">Kembali</a>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a href="<?= BASEURL; ?>/tours/delete/<?= $tour['id']; ?>" class="btn btn-danger px-3 me-2">Hapus</a>
                                <a href="<?= BASEURL; ?>/tours/edit/<?= $tour['id']; ?>" class="btn btn-primary px-4">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Card types section end -->
</div>