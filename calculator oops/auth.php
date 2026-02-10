<?php

class userAuthentication
{

    public function authenticate()
    {
// Validate request method
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo json_encode(["status" => "error", "message" => "Only POST allowed"]);
            exit;
        }
    }
}
