<?php

namespace Line\ApiLogin;
class Line
{
    public function getUserInfo($access_token) {
        $opts = array(
            'http' => array(
                'method' => "GET",
                'header' => "Authorization: Bearer {" . $access_token . "}"
            )
        );
        $context = stream_context_create($opts);
        return json_decode(file_get_contents('https://api.line.me/v2/profile', false, $context));
    }
    
}

