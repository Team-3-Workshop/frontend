<?php

if (isset($_COOKIE['user'])) {
  $id = $_COOKIE['user'];
  $_SESSION['user'] = $id;
}

if (isset($_SESSION['user'])) {
  header("Location: " . BASEURL);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $data['title']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/main/app.css" />
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/pages/auth.css" />
  <link rel="shortcut icon" href="<?= BASEURL; ?>/images/logo/favicon.svg" type="image/x-icon" />
  <link rel="shortcut icon" href="<?= BASEURL; ?>/images/logo/favicon.png" type="image/png" />
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
                <h2>Log in.</h2>
                <p class="fw-light">
                  Log in with your data that you entered during registration.
                </p>
              </div>

              <div>
                <?php Flasher::flash(); ?>
              </div>

              <form action="<?= BASEURL; ?>/auth/masuk" method="POST">
                <div class="form-group position-relative has-icon-left mb-4">
                  <input type="text" class="form-control form-control-lg" placeholder="E-mail" name="email" />
                  <div class="form-control-icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                  <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" />
                  <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                  </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                  <input class="form-check-input me-2" type="checkbox" id="flexCheckDefault" name="remember" />
                  <label class="form-check-label text-gray-600" for="flexCheckDefault">
                    Keep me logged in
                  </label>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">
                  Log in
                </button>
              </form>
              <div class="text-center mt-5 text-lg fs-5">
                <p class="text-gray-600">
                  Don't have an account?
                  <a href="<?= BASEURL; ?>/auth/signin" class="font-bold">Sign up</a>.
                </p>
                <p>
                  <a class="font-bold" href="<?= BASEURL; ?>/auth/lupa">Forgot password?</a>.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>