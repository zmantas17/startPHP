<?php
$host = 'pixylt.com';
$db = 'mantas';
$username = 'mantas';
$password = 'mantaskitm';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];