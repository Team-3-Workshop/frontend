<?php

class User_model
{
    private $result;

    public function __construct()
    {
        $url = "http://localhost:3000/api/users";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $this->result = json_decode($response, true);

        curl_close($ch);
    }

    public function getUser()
    {
        return $this->result['data'][2]['fullName'];
    }
}
