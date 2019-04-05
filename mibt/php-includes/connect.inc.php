<?php
$dbConnect = array(
    'server' => '198.71.225.60:3306',
    'user' => 'timothyckiefer',
    'pass' => 'sports1623',
    'name' => 'mibtonline'
);

$db = new mysqli(
    $dbConnect['server'],
    $dbConnect['user'],
    $dbConnect['pass'],
    $dbConnect['name']
);

if ($db->connect_errno>0) {
    echo "Database connection error" . $db->connect_error;
    exit;
}
?>