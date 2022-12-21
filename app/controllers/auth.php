<?php

class auth extends Controller
{
    public function index()
    {
        $data['title'] = "Login - Storiatour";
        $this->view('auth/login', $data);
    }

    public function masuk()
    {
        $result = $this->model('authModel')->login();

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
        $data['title'] = "Signin - Storiatour";
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

        header("Location: " . BASEURL . "/auth");
    }
}
