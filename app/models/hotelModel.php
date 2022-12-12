<?php

class hotelModel
{
    public function get()
    {
        $url = 'localhost:3000/api/hotels';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }

    public function find($id)
    {
        $url = "http://localhost:3000/api/hotels/" . $id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }

    public function drop($id)
    {
        $url = "localhost:3000/api/hotels/" . $id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }

    public function add()
    {
        $url = "http://localhost:3000/api/hotels";

        $fields = [
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'description' => $_POST['description'],
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
            header('Location: ' . BASEURL . '/hotels/tambah');
            exit;
        } else {
            Flasher::setFlash($result['message'], 'success');
            header('Location: ' . BASEURL . '/hotels');
            exit;
        }

        return $result;
    }

    public function change()
    {
        $fields = [
            "name" => $_POST['name'],
            "address" => $_POST['address'],
            "description" => $_POST['description'],
        ];

        $url = "localhost:3000/api/hotels/" . $_POST['id'];

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
            header('Location: ' . BASEURL . '/hotels/edit/' . $_POST['id']);
            exit;
        } else {
            Flasher::setFlash($result['message'], 'success');
            header('Location: ' . BASEURL . '/hotels');
            exit;
        }

        return $result;
    }
}
