<?php

require_once "config.php";

function generateChecksum($params)
{
    // Step 1: Remove empty values
    foreach ($params as $key => $value) {
        if ($value === "" || $value === null) {
            unset($params[$key]);
        }
    }

    // Step 2: Sort keys alphabetically (VERY IMPORTANT for Error 180 fix)
    ksort($params);

    // Step 3: Build query string
    $checksumString = "";

    foreach ($params as $key => $value) {
        $checksumString .= $key . "=" . trim($value) . "&";
    }

    // remove last &
    $checksumString = rtrim($checksumString, "&");

    // Step 4: HMAC SHA256 with SECRET KEY
    return hash_hmac("sha256", $checksumString, SECRET_KEY);
}
