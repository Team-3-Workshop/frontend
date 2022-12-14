<?php

class transportationModel
{
    public function get()
    {
        $url = 'localhost:3000/api/transportations';
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

        $url = "http://localhost:3000/api/transportations?name=" . $search;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $result = json_decode($response, true);

        curl_close($ch);

        return $result;
    }
}
