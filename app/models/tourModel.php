<?php

class tourModel
{
    public function get()
    {
        $url = 'localhost:3000/api/tours';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }

    public function add()
    {
        $url = "http://localhost:3000/api/tours";

        $fields = [
            'destination' => $_POST['destination'],
            'description' => $_POST['description'],
            'hotelId' => $_POST['hotelId'],
            'transportationId' => $_POST['transportationId'],
            'tourGuideId' => $_POST['tourGuideId'],
            'price' => (int)$_POST['price'],
        ];

        $post = json_encode($fields, true);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        $response = curl_exec($ch);

        $result = json_decode($response, true);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode == 400) {
            Flasher::setFlash($result['message'], 'danger');
            header('Location: ' . BASEURL . '/tours/tambah');
            exit;
        } else {
            Flasher::setFlash($result['message'], 'success');
            header('Location: ' . BASEURL . '/tours');
            exit;
        }

        return $result;
    }

    public function change()
    {
        $id = $_POST['id'];

        $fields = [
            'destination' => $_POST['destination'],
            'description' => $_POST['description'],
            'hotelId' => $_POST['hotelId'],
            'transportationId' => $_POST['transportationId'],
            'tourGuideId' => $_POST['tourGuideId'],
            'price' => (int)$_POST['price'],
        ];

        $url = "localhost:3000/api/tours/" . $id;

        $post = json_encode($fields, true);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        $response = curl_exec($ch);

        $result = json_decode($response, true);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode == 400) {
            Flasher::setFlash($result['message'], 'danger');
            header('Location: ' . BASEURL . '/tours/edit/' . $id);
            exit;
        } else {
            Flasher::setFlash($result['message'], 'success');
            header('Location: ' . BASEURL . '/tours/detail/' . $id);
            exit;
        }

        return $result;
    }

    public function search()
    {
        $search = $_POST['search'];

        $url = "http://localhost:3000/api/tours?destination=" . $search;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }

    public function find($id)
    {
        $url = "http://localhost:3000/api/tours/" . $id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }

    public function drop($id)
    {
        $url = "localhost:3000/api/tours/" . $id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }
}
