<?php

$tour = $data['tour']['data'];
$hotels = $data['hotels']['data'];
$transportations = $data['transportations']['data'];
$tourGuides = $data['tourGuides']['data'];

?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Tour</h3>
                <p class="text-subtitle text-muted">Multiple form layouts, you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/tours">Tour</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Horizontal form layout section start -->
    <?php Flasher::flash(); ?>
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" method="POST" action="<?= BASEURL; ?>/tours/update">
                                <div class="form-body">
                                    <div class="row">
                                        <input type="hidden" name="id" value="<?= $tour['id']; ?>">
                                        <div class="col-md-4">
                                            <label>Destinasi Wisata</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="destination" value="<?= $tour['destination']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Deskripsi Wisata</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea class="form-control" id="floatingTextarea" name="description"><?= $tour['description']; ?></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Hotel</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select" id="basicSelect" name="hotelId">
                                                <option value="<?= $tour['Hotel']['id']; ?>"><?= $tour['Hotel']['name']; ?></option>
                                                <?php foreach ($hotels as $hotel) : ?>
                                                    <option value="<?= $hotel['id']; ?>"><?= $hotel['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Transportasi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select" id="basicSelect" name="transportationId">
                                                <option value="<?= $tour['Transportation']['id']; ?>"><?= $tour['Transportation']['name']; ?></option>
                                                <?php foreach ($transportations as $transportation) : ?>
                                                    <option value="<?= $transportation['id']; ?>"><?= $transportation['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Pemandu Wisata</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select" id="basicSelect" name="tourGuideId">
                                                <option value="<?= $tour['TourGuide']['id']; ?>"><?= $tour['TourGuide']['fullName']; ?></option>
                                                <?php foreach ($tourGuides as $tourGuide) : ?>
                                                    <option value="<?= $tourGuide['id']; ?>"><?= $tourGuide['fullName']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Harga</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="price" value="<?= $tour['price']; ?>">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-2 mb-1" name="submit">Simpan</button>
                                            <a href="<?= BASEURL; ?>/tours/detail/<?= $tour['id']; ?>" class="btn btn-light-secondary me-1 mb-1">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->
</div>