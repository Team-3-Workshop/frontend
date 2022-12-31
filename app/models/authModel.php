<?php

class authModel
{
    public function login()
    {
        $url = "http://localhost:3000/auth/login";

        $fields = [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
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

        curl_close($ch);

        return $result;
    }

    public function signup()
    {
        $url = "http://localhost:3000/auth/signup";

        $fields = [
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'fullName' => $_POST['fullName'],
            'citizen' => $_POST['citizen'],
            'nik' => $_POST['nik'],
            'address' => $_POST['address'],
            'date' => $_POST['date'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'role' => 'admin',
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

        curl_close($ch);

        return $result;
    }

    public function find()
    {
        $url = "http://localhost:3000/auth/forgot";

        $fields = [
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

        curl_close($ch);

        return $result;
    }

    public function update($id, $password)
    {
        $url = "http://localhost:3000/auth/reset";

        $fields = [
            'id' => $id,
            'password' => $password,
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

        curl_close($ch);

        return $result;
    }
}
