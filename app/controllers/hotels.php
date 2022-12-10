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
        $this->view('hotel/tambah', $data);
        $this->view('templates/footer');
    }
}
