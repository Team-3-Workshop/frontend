<?php

class transportations extends Controller
{
    public function index()
    {
        $data['title'] = "Transportations - Storiatour";
        $data['active'] = 'transportation';
        $data['transportations'] = $this->model('transportationModel')->get();
        $this->view('templates/header', $data);
        $this->view('transportation/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = "Transportations - Storiatour";
        $data['active'] = "transportation";
        $data['transportations'] = $this->model('transportationModel')->search();
        $this->view('templates/header', $data);
        $this->view('transportation/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Transportasi - Storiatour";
        $data['active'] = 'transportation';
        $this->view('templates/header', $data);
        $this->view('transportation/tambah');
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Transportations - Storiatour';
        $data['active'] = 'transportation';
        $data['transportation'] = $this->model('transportationModel')->find($id);
        $this->view('templates/header', $data);
        $this->view('transportation/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Transportation - Storiatour';
        $data['active'] = 'transportation';
        $data['transportation'] = $this->model('transportationModel')->find($id);
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
