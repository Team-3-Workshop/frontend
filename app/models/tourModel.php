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
}
