<?php

$transaction = $data['transaction']['data'];
$tours = $data['tours']['data'];

?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Transaction</h3>
                <p class="text-subtitle text-muted">Multiple form layouts, you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/transactions">Transaction</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <?php Flasher::flash(); ?>
                            <form class="form form-horizontal" method="POST" action="<?= BASEURL; ?>/transactions/update">
                                <div class="form-body">
                                    <div class="row">
                                        <input type="hidden" name="id" value="<?= $transaction['id']; ?>">
                                        <div class="col-md-4">
                                            <label>Pengguna</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="user" value="<?= $transaction['User']['fullName']; ?>" disabled readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Penjemputan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="date" value="<?= $transaction['date']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Hotel</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select" id="basicSelect" name="tourId">
                                                <option value="<?= $transaction['Tours'][0]['id']; ?>"><?= $transaction['Tours'][0]['destination']; ?></option>
                                                <?php foreach ($tours as $tour) : ?>
                                                    <option value="<?= $tour['id']; ?>"><?= $tour['destination']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-2 mb-1" name="submit">Simpan</button>
                                            <a href="<?= BASEURL; ?>/transactions" class="btn btn-light-secondary me-1 mb-1">Batal</a>
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