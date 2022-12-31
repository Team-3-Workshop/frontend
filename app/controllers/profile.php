<?php

class profile extends Controller
{
    public function index()
    {
        $id = $_SESSION['user'];

        $response = $this->model('userModel')->find($id);

        if ($response['code'] == 404) {
            $data['title'] = "404";
            $data['active'] = 'user';
            $data['message'] = $response['result']['message'];
            $this->view('templates/header', $data);
            $this->view('404', $data);
            $this->view('templates/footer');
            exit;
        }

        $data['title'] = "Profile";
        $data['active'] = "profile";
        $data['user'] = $response['result'];
        $this->view('templates/header', $data);
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }

    public function update()
    {
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

    public function edit()
    {
        $id = $_SESSION['user'];

        $response = $this->model('userModel')->find($id);

        if ($response['code'] == 404) {
            $data['title'] = "404";
            $data['active'] = 'user';
            $data['message'] = $response['result']['message'];
            $this->view('templates/header', $data);
            $this->view('404', $data);
            $this->view('templates/footer');
            exit;
        }

        $data['title'] = "Edit Password";
        $data['active'] = "profile";
        $data['user'] = $response['result'];
        $this->view('templates/header', $data);
        $this->view('profile/edit', $data);
        $this->view('templates/footer');
    }

    public function reset()
    {
        $id = $_POST['id'];
        $password = $_POST['password'];
        $vpassword = $_POST['vpassword'];

        if ($password !== $vpassword) {
            if ($password !== $vpassword) {
                Flasher::setFlash('Password not match', 'danger');
                header("Location: " . BASEURL . "/profile/edit");
                exit;
            }
        }

        $result = $this->model('authModel')->update($id, $password);

        if ($result['success'] == false) {
            Flasher::setFlash($result['message'], 'danger');
            header("Location: " . BASEURL . "/profile/edit");
        } else {
            Flasher::setFlash($result['message'], 'success');
            header("Location: " . BASEURL . "/profile");
            exit;
        }
    }
}
