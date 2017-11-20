<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^ E_NOTICE);
$host = 'mysql.metropolia.fi';
//$host = 'localhost';
$dbname = 'ilkkamtk';
$user = 'ilkkamtk';
//$user = 'root';
$pass = 'q1w2e3r4';
//$pass = 'root';

try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $DBH->query('SET NAMES "UTF8";');
}
catch(PDOException $e) {
    echo "Could not connect to database.";
    //file_put_contents($_SERVER['DOCUMENT_ROOT'].'/2.0/log/PDOErrors.txt', $e->getMessage()."\n\r", FILE_APPEND);
}


?>