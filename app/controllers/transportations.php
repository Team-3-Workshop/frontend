<?php

class transportations extends Controller
{
    public function index()
    {
        $data['title'] = "Transportations";
        $data['active'] = 'transportation';
        $data['transportations'] = $this->model('transportationModel')->get();
        $this->view('templates/header', $data);
        $this->view('transportation/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = "Transportations";
        $data['active'] = "transportation";
        $data['transportations'] = $this->model('transportationModel')->search();
        $this->view('templates/header', $data);
        $this->view('transportation/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = "Create Transportation";
        $data['active'] = 'transportation';
        $this->view('templates/header', $data);
        $this->view('transportation/tambah', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $response = $this->model('transportationModel')->find($id);

        if ($response['code'] == 404) {
            $data['title'] = "404";
            $data['active'] = 'transportation';
            $data['message'] = $response['result']['message'];
            $this->view('templates/header', $data);
            $this->view('404', $data);
            $this->view('templates/footer');
            exit;
        }

        $data['title'] = 'Detail Transportation';
        $data['active'] = 'transportation';
        $data['transportation'] = $response['result'];
        $this->view('templates/header', $data);
        $this->view('transportation/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $response = $this->model('transportationModel')->find($id);

        if ($response['code'] == 404) {
            $data['title'] = "404";
            $data['active'] = 'transportation';
            $data['message'] = $response['result']['message'];
            $this->view('templates/header', $data);
            $this->view('404', $data);
            $this->view('templates/footer');
            exit;
        }

        $data['title'] = 'Edit Transportation';
        $data['active'] = 'transportation';
        $data['transportation'] = $response['result'];
        $this->view('templates/header', $data);
        $this->view('transportation/edit', $data);
        $this->view('templates/footer');
    }

    public function delete($id)
    {
        $data = $this->model('transportationModel')->drop($id);

        if ($data['success'] == true) {
            Flasher::setFlash($data['message'], 'success');
            header('Location: ' . BASEURL . '/transportations');
            exit;
        } else {
            Flasher::setFlash($data['message'], 'danger');
            header('Location: ' . BASEURL . '/transportations');
            exit;
        }
    }

    public function create()
    {
        $this->model('transportationModel')->add();
    }

    public function update()
    {
        $this->model('transportationModel')->change();
    }
}
