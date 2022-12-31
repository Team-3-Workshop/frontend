<?php

class tourGuides extends Controller
{
    public function index()
    {
        $data['title'] = "Tour Guides";
        $data['active'] = "tourGuide";
        $data['tourGuides'] = $this->model('tourGuideModel')->get();
        $this->view('templates/header', $data);
        $this->view('tourGuide/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = "Tour Guides";
        $data['active'] = "tourGuide";
        $data['tourGuides'] = $this->model('tourGuideModel')->search();
        $this->view('templates/header', $data);
        $this->view('tourGuide/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = "Create Tour Guide";
        $data['active'] = 'tourGuide';
        $this->view('templates/header', $data);
        $this->view('tourGuide/tambah', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $response = $this->model('tourGuideModel')->find($id);

        if ($response['code'] == 404) {
            $data['title'] = "404";
            $data['active'] = 'tourGuide';
            $data['message'] = $response['result']['message'];
            $this->view('templates/header', $data);
            $this->view('404', $data);
            $this->view('templates/footer');
            exit;
        }

        $data['title'] = "Detail Tour Guide";
        $data['active'] = "tourGuide";
        $data['tourGuide'] = $response['result'];
        $this->view('templates/header', $data);
        $this->view('tourGuide/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $response = $this->model('tourGuideModel')->find($id);

        if ($response['code'] == 404) {
            $data['title'] = "404";
            $data['active'] = 'tourGuide';
            $data['message'] = $response['result']['message'];
            $this->view('templates/header', $data);
            $this->view('404', $data);
            $this->view('templates/footer');
            exit;
        }

        $data['title'] = 'Edit Tour Guide';
        $data['active'] = 'tourGuide';
        $data['tourGuide'] = $response['result'];
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
