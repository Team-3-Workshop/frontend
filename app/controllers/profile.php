<?php

class profile extends Controller
{
    public function index()
    {
        $id = $_SESSION['user'];

        $data['title'] = "Profile - Storiatour";
        $data['active'] = "profile";
        $data['user'] = $this->model('userModel')->find($id);
        $this->view('templates/header', $data);
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }

    public function update()
    {
        $password = $_POST['password'];
        $vpassword = $_POST['vpassword'];

        if ($password !== $vpassword) {
            Flasher::setFlash('Password not match', 'danger');
            header("Location: " . BASEURL . "/auth/signin");
            exit;
        }

        $result = $this->model('userModel')->change();

        if ($result['success'] = false) {
            Flasher::setFlash($result['message'], 'danger');
            header('Location: ' . BASEURL . '/profile');
            exit;
        } else {
            Flasher::setFlash($result['message'], 'success');
            header('Location: ' . BASEURL . '/profile');
            exit;
        }
    }
}
