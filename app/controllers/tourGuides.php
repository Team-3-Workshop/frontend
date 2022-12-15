<?php

class tourGuides extends Controller
{
    public function index()
    {
        $data['title'] = "Tour Guides - Storiatour";
        $data['active'] = "tourGuide";
        $data['tourGuides'] = $this->model('tourGuideModel')->get();
        $this->view('templates/header', $data);
        $this->view('tourGuide/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = "Tour Guides - Storiatour";
        $data['active'] = "tourGuide";
        $data['tourGuides'] = $this->model('tourGuideModel')->search();
        $this->view('templates/header', $data);
        $this->view('tourGuide/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Tour Guide - Storiatour";
        $data['active'] = 'tourGuide';
        $this->view('templates/header', $data);
        $this->view('tourGuide/tambah');
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Tour Guide - Storiatour";
        $data['active'] = "tourGuide";
        $data['tourGuide'] = $this->model('tourGuideModel')->find($id);
        $this->view('templates/header', $data);
        $this->view('tourGuide/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Tour Guide - Storiatour';
        $data['active'] = 'tourGuide';
        $data['tourGuide'] = $this->model('tourGuideModel')->find($id);
        $this->view('templates/header', $data);
        $this->view('tourGuide/edit', $data);
        $this->view('templates/footer');
    }

    public function delete($id)
    {
        $data = $this->model('tourGuideModel')->drop($id);

        if ($data['success'] == true) {
            Flasher::setFlash($data['message'], 'success');
            header('Location: ' . BASEURL . '/tourGuides');
            exit;
        } else {
            Flasher::setFlash($data['message'], 'danger');
            header('Location: ' . BASEURL . '/tourGuides');
            exit;
        }
    }

    public function create()
    {
        $this->model('tourGuideModel')->add();
    }

    public function update()
    {
        $this->model('tourGuideModel')->change();
    }
}
