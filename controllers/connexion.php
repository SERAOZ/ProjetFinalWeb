<?php

require_once('./config/config.php');
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



try {
    // Veritabanına bağlan
    $dataBase = new PDO("mysql:host=" . $DB_HOST . ";dbname=" . $DB_NAME . $DB_USERNAME, $DB_PASSWORD);
    $dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Hata durumunda güvenli bir hata mesajı yazdır
    echo "Veritabanı bağlantısında bir sorun oluştu: " . $e->getMessage();
}
?>
