<?php

$user = $data['user']['data'];

?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $data['title']; ?></h3>
                <p class="text-subtitle text-muted">Multiple form layouts, you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/profile">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $data['title']; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
                <div class="card shadow rounded">
                    <div class="card-content">
                        <div class="card-body">
                            <?php Flasher::flash(); ?>
                            <form class="form form-horizontal" method="POST" action="<?= BASEURL; ?>/profile/reset">
                                <div class="form-body">
                                    <div class="row">
                                        <input type="hidden" value="<?= $user['id']; ?>" name="id">
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="first-name" class="form-control" name="password" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Verifikasi Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="first-name" class="form-control" name="vpassword" required>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-between align-items-center mt-4">
                                            <a href="<?= BASEURL; ?>/profile">Kembali</a>
                                            <button type="submit" class="btn btn-primary me-2 mb-1">Simpan</button>
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