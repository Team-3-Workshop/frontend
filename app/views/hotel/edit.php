<?php

$hotel = $data['hotel']['data'];

?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Hotel</h3>
                <p class="text-subtitle text-muted">Multiple form layouts, you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Hotel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
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
                            <form class="form form-horizontal" method="POST" action="<?= BASEURL; ?>/hotels/update">
                                <div class="form-body">
                                    <div class="row">
                                        <input type="hidden" value="<?= $hotel['id']; ?>" name="id">
                                        <div class="col-md-4">
                                            <label>Nama Hotel</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="name" value="<?= $hotel['name']; ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Deskripsi Hotel</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea class="form-control" id="floatingTextarea" name="description" required><?= $hotel['description']; ?></textarea>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-2 mb-1">Simpan</button>
                                            <a href="<?= BASEURL; ?>/hotels/detail/<?= $hotel['id']; ?>" class="btn btn-light-secondary me-1 mb-1">Batal</a>
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