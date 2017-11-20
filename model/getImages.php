<?php
require_once('DBConnect.php');

try {
    $SQL = "SELECT * FROM wsk_media";
    $STH = $DBH->query($SQL);
    $STH->setFetchMode(PDO::FETCH_OBJ);
    $rivit = array();
    while ($rivi = $STH->fetch()) {
        $rivit[] = $rivi;
    }
    echo json_encode($rivit);
} catch (PDOException $e) {
    $error['error'] = $e->getMessage();
    echo json_encode($error);
}