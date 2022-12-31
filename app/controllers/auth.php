<?php

class auth extends Controller
{
    public function index()
    {
        $data['title'] = "Login";
        $this->view('auth/login', $data);
    }

    public function masuk()
    {
        $result = $this->model('authModel')->login();

        if (isset($_POST['remember'])) {
            setcookie('user', $result['data']['id'], time() + (10 * 365 * 24 * 60 * 60));
        }

        if ($result['data']['role'] == 'user') {
            Flasher::setFlash('You are not admin', 'danger');
            header("Location: " . BASEURL . "/auth");
            exit;
        }

        if ($result['success'] == false) {
            Flasher::setFlash($result['message'], 'danger');
            header("Location: " . BASEURL . "/auth");
            exit;
        } else {
            $_SESSION['user'] = $result['data']['id'];
            header("Location: " . BASEURL);
            exit;
        }
    }

    public function signin()
    {
        $data['title'] = "Signin";
        $this->view('auth/signin', $data);
    }

    public function register()
    {
        $password = $_POST['password'];
        $vpassword = $_POST['vpassword'];

        if ($password !== $vpassword) {
            Flasher::setFlash('Password not match', 'danger');
            header("Location: " . BASEURL . "/auth/signin");
            exit;
        }

        $result = $this->model('authModel')->signup();

        if ($result['success'] == false) {
            Flasher::setFlash($result['message'], 'danger');
            header("Location: " . BASEURL . "/auth/signin");
        } else {
            Flasher::setFlash($result['message'], 'success');
            header("Location: " . BASEURL . "/auth");
            exit;
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();

        unset($_COOKIE['user']);
        setcookie('user', '', time() - (10 * 365 * 24 * 60 * 60));

        header("Location: " . BASEURL . "/auth");
    }

    public function lupa()
    {
        $data['title'] = "Forgot Password";
        $this->view('auth/forgot', $data);
    }

    public function forgot()
    {
        $result = $this->model('authModel')->find();

        if ($result['success'] == false) {
            Flasher::setFlash($result['message'], 'danger');
            header("Location: " . BASEURL . "/auth/lupa");
        } else {
            $_SESSION['token'] = $result['data']['id'];
            Flasher::setFlash($result['message'], 'success');
            header("Location: " . BASEURL . "/auth/reset");
            exit;
        }
    }

    public function reset()
    {
        $data['title'] = "Reset Password";
        $this->view('auth/reset', $data);
    }

    public function edit()
    {
        $id = $_SESSION['token'];
        $password = $_POST['password'];
        $vpassword = $_POST['vpassword'];

        if ($password !== $vpassword) {
            Flasher::setFlash('Password not match', 'danger');
            header("Location: " . BASEURL . "/auth/reset");
            exit;
        }

        $result = $this->model('authModel')->update($id, $password);

        if ($result['success'] == false) {
            Flasher::setFlash($result['message'], 'danger');
            header("Location: " . BASEURL . "/auth/reset");
        } else {
            Flasher::setFlash($result['message'], 'success');
            header("Location: " . BASEURL . "/auth");
            unset($_SESSION['token']);
            exit;
        }
    }
}
