<?php

class index extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['active'] = 'dashboard';
        $this->view('templates/header', $data);
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }
}
