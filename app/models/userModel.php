<?php

class userModel
{
    public function get()
    {
        $url = "http://localhost:3000/api/users/";
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

        $url = "http://localhost:3000/api/users?fullName=" . $search;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }

    public function find($id)
    {
        $url = "http://localhost:3000/api/users/" . $id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }

    public function drop($id)
    {
        $url = "localhost:3000/api/users/" . $id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }

    public function change()
    {
        $fields = [
            "firstName" => $_POST['firstName'],
            "lastName" => $_POST['lastName'],
            "fullName" => $_POST['fullName'],
            "citizen" => $_POST['citizen'],
            "nik" => $_POST['nik'],
            "address" => $_POST['address'],
            "date" => $_POST['date'],
            "phone" => $_POST['phone'],
            "email" => $_POST['email'],
        ];

        $url = "localhost:3000/api/users/" . $_POST['id'];

        $post = json_encode($fields, true);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }
}
