<?php

require_once "config.php";

/**
 * Generate Zaakpay Checksum
 */
function generateChecksum(array $params)
{
    // Empty values remove kar do
    $params = array_filter($params, function ($v) {
        return $v !== "" && $v !== null;
    });

    // Parameter order maintain rakho
    $checksumString = "";

    foreach ($params as $key => $value) {
        $checksumString .= $key . "=" . $value . "&";
    }

    return hash_hmac("sha256", $checksumString, SECRET_KEY);
}
