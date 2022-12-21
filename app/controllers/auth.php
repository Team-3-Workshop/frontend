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
}
