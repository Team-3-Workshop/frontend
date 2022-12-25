<?php

class transactions extends Controller
{
    public function index()
    {
        $data['title'] = "Transactions";
        $data['active'] = "transaction";
        $data['transactions'] = $this->model('transactionModel')->get();
        $this->view('templates/header', $data);
        $this->view('transaction/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $response = $this->model('transactionModel')->find($id);

        if ($response['code'] == 404) {
            $data['title'] = "404";
            $data['active'] = 'transaction';
            $data['message'] = $response['result']['message'];
            $this->view('templates/header', $data);
            $this->view('404', $data);
            $this->view('templates/footer');
            exit;
        }

        $data['title'] = 'Edit Transaction';
        $data['active'] = 'transaction';
        $data['transaction'] = $response['result'];
        $data['tours'] = $this->model('tourModel')->get();
        $this->view('templates/header', $data);
        $this->view('transaction/edit', $data);
        $this->view('templates/footer');
    }

    public function delete($id)
    {
        $data = $this->model('transactionModel')->drop($id);

        if ($data['success'] == true) {
            Flasher::setFlash($data['message'], 'success');
            header('Location: ' . BASEURL . '/transactions');
            exit;
        } else {
            Flasher::setFlash($data['message'], 'danger');
            header('Location: ' . BASEURL . '/transactions');
            exit;
        }
    }

    public function update()
    {
        $this->model('transactionModel')->change();
    }
}
