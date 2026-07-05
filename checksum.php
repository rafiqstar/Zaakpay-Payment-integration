<?php

define('SECRET_KEY', '09f0ff45caeb4cfcb220635549249c77');

function getChecksumString($data)
{
    $sequence = [
        "amount","bankid","buyerAddress","buyerCity","buyerCountry",
        "buyerEmail","buyerFirstName","buyerLastName","buyerPhoneNumber",
        "buyerPincode","buyerState","currency","debitorcredit",
        "merchantIdentifier","merchantIpAddress","mode","orderId",
        "product1Description","product2Description","product3Description",
        "product4Description","productDescription","productInfo","purpose",
        "returnUrl","shipToAddress","shipToCity","shipToCountry",
        "shipToFirstname","shipToLastname","shipToPhoneNumber",
        "shipToPincode","shipToState","showMobile","txnDate",
        "txnType","zpPayOption"
    ];

    $checksumString = "";

    foreach ($sequence as $key) {
        if (isset($data[$key]) && $data[$key] !== "") {
            $checksumString .= $key . "=" . $data[$key] . "&";
        }
    }

    return rtrim($checksumString, "&");
}

function calculateChecksum($data)
{
    $checksumString = getChecksumString($data);
    return hash_hmac("sha256", $checksumString, SECRET_KEY);
}
