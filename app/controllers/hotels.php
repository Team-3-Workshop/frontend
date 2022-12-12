<?php

class hotels extends Controller
{
    public function index()
    {
        $data['title'] = 'Storitour - Hotels';
        $data['active'] = 'hotel';
        $data['hotels'] = $this->model('hotelModel')->get();
        $this->view('templates/header', $data);
        $this->view('hotel/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Storiatour - Hotel';
        $data['active'] = 'hotel';
        $data['hotel'] = $this->model('hotelModel')->find($id);
        $this->view('templates/header', $data);
        $this->view('hotel/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = "Storitour - Tambah Hotel";
        $data['active'] = 'hotel';
        $this->view('templates/header', $data);
        $this->view('hotel/tambah');
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Storiatour - Edit Hotel';
        $data['active'] = 'hotel';
        $data['hotel'] = $this->model('hotelModel')->find($id);
        $this->view('templates/header', $data);
        $this->view('hotel/edit', $data);
        $this->view('templates/footer');
    }

    public function delete($id)
    {
        $data = $this->model('hotelModel')->drop($id);

        if ($data['success'] == true) {
            Flasher::setFlash($data['message'], 'success');
            header('Location: ' . BASEURL . '/hotels');
            exit;
        } else {
            Flasher::setFlash($data['message'], 'danger');
            header('Location: ' . BASEURL . '/hotels');
            exit;
        }
    }

    public function create()
    {
        $this->model('hotelModel')->add();
    }

    public function update()
    {
        $this->model('hotelModel')->change();
    }
}
