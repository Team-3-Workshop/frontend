<?php

class transportations extends Controller
{
    public function index()
    {
        $data['title'] = "Storitour - Transportations";
        $data['active'] = 'transportation';
        $data['transportations'] = $this->model('transportationModel')->get();
        $this->view('templates/header', $data);
        $this->view('transportation/index', $data);
        $this->view('templates/footer');
    }
}
