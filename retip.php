<?php
ini_set('display_errors', 0);

// Redirect if access by browser
$ua = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/^Mozilla\/5.0/', $ua) === 1) {
    echo "hoge";
    exit(1);
}

// Return IP address
header('Content-Type: application/json');
$json = [
    'ip' => $_SERVER['REMOTE_ADDR']
];
echo json_encode($json, JSON_PRETTY_PRINT)

?>
