<?php

class users extends Controller
{
    public function index()
    {
        $data['title'] = 'Users';
        $data['active'] = 'user';
        $data['users'] = $this->model('userModel')->get();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = "Users";
        $data['active'] = "user";
        $data['users'] = $this->model('userModel')->search();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
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

        $data['title'] = 'User';
        $data['active'] = 'user';
        $data['user'] = $response['result'];
        $this->view('templates/header', $data);
        $this->view('user/detail', $data);
        $this->view('templates/footer');
    }

    public function delete($id)
    {
        $user = $_SESSION['user'];

        if ($id === $user) {
            Flasher::setFlash('You can not delete this account', 'danger');
            header('Location: ' . BASEURL . '/users');
            exit;
        }

        $data = $this->model('userModel')->drop($id);

        if ($data['success'] == true) {
            Flasher::setFlash($data['message'], 'success');
            header('Location: ' . BASEURL . '/users');
            exit;
        } else {
            Flasher::setFlash($data['message'], 'danger');
            header('Location: ' . BASEURL . '/users');
            exit;
        }
    }

    public function edit($id)
    {
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

        $data['title'] = 'Edit User';
        $data['active'] = 'user';
        $data['user'] = $response['result'];
        $this->view('templates/header', $data);
        $this->view('user/edit', $data);
        $this->view('templates/footer');
    }

    public function update()
    {
        $result = $this->model('userModel')->change();

        if ($result['success'] == false) {
            Flasher::setFlash($result['message'], 'danger');
            header('Location: ' . BASEURL . '/users/edit/' . $_POST['id']);
            exit;
        } else {
            Flasher::setFlash($result['message'], 'success');
            header('Location: ' . BASEURL . '/users');
            exit;
        }
    }
}
