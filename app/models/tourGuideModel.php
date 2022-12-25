<?php

class tourGuideModel
{
    public function get()
    {
        $url = 'localhost:3000/api/tourGuides';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }

    public function search()
    {
        $search = $_POST['search'];

        $url = "http://localhost:3000/api/tourGuides?fullName=" . $search;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }

    public function add()
    {
        $url = "http://localhost:3000/api/tourGuides";

        $fields = [
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'fullName' => $_POST['fullName'],
            'address' => $_POST['address'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
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
            header('Location: ' . BASEURL . '/tourGuides/tambah');
            exit;
        } else {
            Flasher::setFlash($result['message'], 'success');
            header('Location: ' . BASEURL . '/tourGuides');
            exit;
        }

        return $result;
    }

    public function change()
    {
        $id = $_POST['id'];

        $fields = [
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'fullName' => $_POST['fullName'],
            'address' => $_POST['address'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
        ];

        $url = "localhost:3000/api/tourGuides/" . $id;

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
            header('Location: ' . BASEURL . '/tourGuides/edit/' . $id);
            exit;
        } else {
            Flasher::setFlash($result['message'], 'success');
            header('Location: ' . BASEURL . '/tourGuides');
            exit;
        }

        var_dump($result);

        return $result;
    }

    public function find($id)
    {
        $url = "http://localhost:3000/api/tourGuides/" . $id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        $feedback = ['code' => $httpcode, 'result' => $result];

        return $feedback;
    }

    public function drop($id)
    {
        $url = "localhost:3000/api/tourGuides/" . $id;
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
