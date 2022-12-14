<?php

$user = $data['user']['data'];

?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit User</h3>
                <p class="text-subtitle text-muted">Multiple form layouts, you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/users">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
                            <form class="form form-horizontal" method="POST" action="<?= BASEURL; ?>/users/update">
                                <div class="form-body">
                                    <div class="row">
                                        <input type="hidden" value="<?= $user['id']; ?>" name="id">
                                        <div class="col-md-4">
                                            <label>Nama Depan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="firstName" value="<?= $user['firstName']; ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Belakang</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="lastName" value="<?= $user['lastName']; ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="fullName" value="<?= $user['fullName']; ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kewarganegaraan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select" id="basicSelect" name="citizen">
                                                <option value="<?= $user['citizen']; ?>"><?= $user['citizen']; ?></option>
                                                <?php if ($user['citizen'] === "WNI") : ?>
                                                    <option value="WNA">WNA</option>
                                                <?php else : ?>
                                                    <option value="WNI">WNI</option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>NIK</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="nik" value="<?= $user['nik']; ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="address" value="<?= $user['address']; ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Lahir</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="date" value="<?= $user['date']; ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nomor Telepon</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="phone" value="<?= $user['phone']; ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>E-mail</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="email" value="<?= $user['email']; ?>" required>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-2 mb-1">Simpan</button>
                                            <a href="<?= BASEURL; ?>/users" class="btn btn-light-secondary me-1 mb-1">Batal</a>
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