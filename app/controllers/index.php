<?php

class index extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['active'] = 'dashboard';
        $data['users'] = $this->model('userModel')->get();
        $data['hotels'] = $this->model('hotelModel')->get();
        $data['transportations'] = $this->model('transportationModel')->get();
        $data['tourGuides'] = $this->model('tourGuideModel')->get();
        $data['tours'] = $this->model('tourModel')->get();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}
