<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin - Storiatour</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/main/app.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/pages/auth.css">
    <link rel="shortcut icon" href="<?= BASEURL; ?>/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="<?= BASEURL; ?>/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div class="container text-center">
        <div class="row justify-content-center mt-5 mx-2 mx-md-0">
            <div class="col-lg-5 col-12">
                <div class="card shadow rounded">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="mb-4">
                                <a class="fs-1 fw-bold">Storiatour</a>
                                <h2>Sign Up</h2>
                                <p class="fw-light">
                                    Input your data to register to our website.
                                </p>
                            </div>

                            <div>
                                <?php Flasher::flash(); ?>
                            </div>

                            <form action="<?= BASEURL; ?>/auth/register" method="POST">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group position-relative mb-4">
                                            <input type="text" class="form-control form-control-lg" placeholder="Nama Depan" name="firstName">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group position-relative mb-4">
                                            <input type="text" class="form-control form-control-lg" placeholder="Nama Belakang" name="lastName">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative mb-4">
                                            <input type="text" class="form-control form-control-lg" name="fullName" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <select class="form-select position-relative mb-4 form-select-lg" aria-label=".form-select-lg example" name="citizen">
                                            <option selected>Kewarganegaraan</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative mb-4">
                                            <input type="text" class="form-control form-control-lg" name="nik" placeholder="NIK">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative mb-4">
                                            <input type="text" class="form-control form-control-lg" name="address" placeholder="Alamat">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative mb-4">
                                            <input type="date" class="form-control form-control-lg" name="date" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative mb-4">
                                            <input type="text" class="form-control form-control-lg" name="phone" placeholder="Nomor Telepon">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative mb-4">
                                            <input type="email" class="form-control form-control-lg" name="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative has-icon-left mb-4">
                                            <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative has-icon-left mb-4">
                                            <input type="password" class="form-control form-control-lg" placeholder="Password" name="vpassword">
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Sign Up</button>
                            </form>
                            <div class="text-center mt-5 text-lg fs-5">
                                <p class='text-gray-600'>Already have an account?
                                    <a href="<?= BASEURL; ?>/auth" class="font-bold">Log in</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
    <script src="<?= BASEURL; ?>/js/app.js"></script>

</body>

</html>