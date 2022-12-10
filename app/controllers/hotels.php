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
}
