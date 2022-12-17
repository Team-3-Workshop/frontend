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
}
