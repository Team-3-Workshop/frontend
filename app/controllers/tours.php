<?php

class tours extends Controller
{
    public function index()
    {
        $data['title'] = "Tours - Storiatour";
        $data['active'] = "tour";
        $data['tours'] = $this->model('tourModel')->get();
        $this->view('templates/header', $data);
        $this->view('tour/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Tour - Storiatour";
        $data['active'] = 'tour';
        $data['hotels'] = $this->model('hotelModel')->get();
        $data['transportations'] = $this->model('transportationModel')->get();
        $data['tourGuides'] = $this->model('tourGuideModel')->get();
        $this->view('templates/header', $data);
        $this->view('tour/tambah', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = "Tours - Storiatour";
        $data['active'] = "tour";
        $data['tours'] = $this->model('tourModel')->search();
        $this->view('templates/header', $data);
        $this->view('tour/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Tour - Storiatour";
        $data['active'] = "tour";
        $data['tour'] = $this->model('tourModel')->find($id);
        $this->view("templates/header", $data);
        $this->view("tour/detail", $data);
        $this->view("templates/footer");
    }

    public function delete($id)
    {
        $data = $this->model('tourModel')->drop($id);

        if ($data['success'] == true) {
            Flasher::setFlash($data['message'], 'success');
            header('Location: ' . BASEURL . '/tours');
            exit;
        } else {
            Flasher::setFlash($data['message'], 'danger');
            header('Location: ' . BASEURL . '/tours/detail/' . $id);
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Tour - Storiatour';
        $data['active'] = 'tour';
        $data['tour'] = $this->model('tourModel')->find($id);
        $data['hotels'] = $this->model('hotelModel')->get();
        $data['transportations'] = $this->model('transportationModel')->get();
        $data['tourGuides'] = $this->model('tourGuideModel')->get();
        $this->view('templates/header', $data);
        $this->view('tour/edit', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        $this->model('tourModel')->add();
    }

    public function update()
    {
        $this->model('tourModel')->change();
    }
}
