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
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        return $result;
    }
}
