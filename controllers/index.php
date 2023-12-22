<?php 
require_once '../views/home.php';
//afficher les messages d'erreur et les rapports d'erreur
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//echo $_SERVER['DOCUMENT_ROOT'];

/*
// Hata raporlamayı başlat
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Oturumları başlat
session_start();

// Konfigürasyon dosyasını yükle
require 'config.php';

// Sınıfları otomatik yüklemek için autoloader
require 'autoloader.php';

// Yönlendiriciyi başlat
$router = new Router();
$router->route(new Request());
?>*/
?>