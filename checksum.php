<?php
require_once "config.php";

function generateChecksum($params)
{
    // Remove empty values
    $filtered = [];

    foreach ($params as $k => $v) {
        if ($v !== "" && $v !== null) {
            $filtered[$k] = $v;
        }
    }

    // Sort keys (VERY IMPORTANT)
    ksort($filtered);

    // Build string
    $checksumString = "";

    foreach ($filtered as $key => $value) {
        $checksumString .= $key . "=" . trim($value) . "&";
    }

    $checksumString = rtrim($checksumString, "&");

    // HMAC SHA256
    return hash_hmac("sha256", $checksumString, SECRET_KEY);
}
