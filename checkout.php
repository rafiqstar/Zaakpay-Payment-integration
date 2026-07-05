require_once 'checksum.php';

$data = [
    "merchantIdentifier" => "c91ecf93993e4deda3959a7cd9db37d9",
    "orderId" => $orderId,
    "amount" => $amount,
    "currency" => "INR",
    "buyerEmail" => $email,
    "buyerPhoneNumber" => $phone,
    "returnUrl" => "https://yourdomain.com/callback.php",
    "txnType" => "1",
    "showMobile" => "true",
    "mode" => "0"
];

$checksum = calculateChecksum($data);
