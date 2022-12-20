<?php

class transactions extends Controller
{
    public function index()
    {
        $data['title'] = "Transactions - Storiatour";
        $data['active'] = "transaction";
        $data['transactions'] = $this->model('transactionModel')->get();
        $this->view('templates/header', $data);
        $this->view('transaction/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Transaction - Storiatour';
        $data['active'] = 'transaction';
        $data['transaction'] = $this->model('transactionModel')->find($id);
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
