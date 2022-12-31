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
                        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/tourGuides">Tour Guide</a></li>
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
                            <form class="form form-horizontal" method="POST" action="<?= BASEURL; ?>/tourGuides/create">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nama Depan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="firstName">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Belakang</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="lastName">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="fullName">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="address">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nomor Telepon</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="phone">
                                        </div>
                                        <div class="col-md-4">
                                            <label>E-mail</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="email">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-2 mb-1" name="submit">Simpan</button>
                                            <a href="<?= BASEURL; ?>/tourGuides" class="btn btn-light-secondary me-1 mb-1">Batal</a>
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