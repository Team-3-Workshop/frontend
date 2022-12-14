<?php

class users extends Controller
{
    public function index()
    {
        $data['title'] = 'Users - Storiatour';
        $data['active'] = 'user';
        $data['users'] = $this->model('userModel')->get();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = "Users - Storiatour";
        $data['active'] = "user";
        $data['users'] = $this->model('userModel')->search();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'User - Storiatour';
        $data['active'] = 'user';
        $data['user'] = $this->model('userModel')->find($id);
        $this->view('templates/header', $data);
        $this->view('user/detail', $data);
        $this->view('templates/footer');
    }

    public function delete($id)
    {
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
        $data['title'] = 'Edit User - Storiatour';
        $data['active'] = 'user';
        $data['user'] = $this->model('userModel')->find($id);
        $this->view('templates/header', $data);
        $this->view('user/edit', $data);
        $this->view('templates/footer');
    }

    public function update()
    {
        $this->model('userModel')->change();
    }
}
