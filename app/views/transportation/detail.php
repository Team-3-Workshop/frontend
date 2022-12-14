<?php

$transportation = $data['transportation']['data'];

?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Transportation Detail</h3>
                <p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content
                    container with multiple variants and options.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/transportations">Transportation</a></li>
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
                <div class="card shadow rounded">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded-start" src="<?= BASEURL; ?>/images/samples/water.jpg" alt="Card image cap" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title mb-2"><?= $transportation['name']; ?></h4>
                                <h6 class="card-subtitle mb-4 text-muted"><?= $transportation['address']; ?></h6>

                                <div class="row mb-2">
                                    <p><?= $transportation['description']; ?></p>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex">
                                        <a href="<?= BASEURL; ?>/transportations" class="align-self-center">Kembali</a>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <a href="<?= BASEURL; ?>/transportations/delete/<?= $transportation['id']; ?>" class="btn btn-danger px-3 me-2">Hapus</a>
                                        <a href="<?= BASEURL; ?>/transportations/edit/<?= $transportation['id']; ?>" class="btn btn-primary px-4">Edit</a>
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