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

    public function detail($id)
    {
        $data['title'] = 'Transportations - Storiatour';
        $data['active'] = 'transportation';
        $data['transportation'] = $this->model('transportationModel')->find($id);
        $this->view('templates/header', $data);
        $this->view('transportation/detail', $data);
        $this->view('templates/footer');
    }
}
