<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'connexion.php'; // Veritabanı bağlantısını sağlayan dosyayı dahil et
require 'adminCont.php'; // AdminController sınıfını dahil et

$adminController = new AdminController($dataBase); // Controller örneğini oluştur

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['userName'] ?? ''; // Formdaki 'userName' alanından kullanıcı adını alın
    $password = $_POST['password'] ?? ''; // Formdaki 'password' alanından şifreyi alın

    if ($adminController->login($username, $password)) {
        header('/views/dashboard/index.html'); // Giriş başarılı ise, admin paneline yönlendir
        exit;
    } else {
        header('/views/user/identification/loginPage.php?error=1'); // Giriş başarısız ise, hata mesajı ile login sayfasına yönlendir
        exit;
    }
}
?>
