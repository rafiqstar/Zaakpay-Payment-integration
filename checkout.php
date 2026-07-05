$secret = "09f0ff45caeb4cfcb220635549249c77";

$data = [
    "amount" => $amount,
    "buyerEmail" => $email,
    "buyerFirstName" => $name,
    "buyerLastName" => $lname,
    "buyerPhoneNumber" => $phone,
    "merchantIdentifier" => $merchantId,
    "orderId" => $orderId
];

// IMPORTANT: same order as Zaakpay docs
$hashString = implode("|", $data);

$checksum = hash_hmac("sha256", $hashString, $secret);
