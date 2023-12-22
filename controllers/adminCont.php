<?php

/**
*   Le fichier loginHandler.php reçoit le nom d'utilisateur et le mot de passe envoyés avec la requête POST.
*   Il envoie le nom d'utilisateur et le mot de passe à la fonction de connexion de l'AdminController.
*   La fonction de connexion de l'AdminController vérifie ces informations dans la base de données.
 */
class AdminController {
    
    private $dataBase;

    public function __construct($dataBase) {
        $this->dataBase = $dataBase;
    }

    public function login($userName, $password) {
        // $database yerine $this->dataBase kullanın
        $stmt = $this->dataBase->prepare('SELECT * FROM users WHERE userName = :userName');
        $stmt->execute(['userName' => $userName]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return true; // Giriş başarılı
        } else {
            return false; // Giriş başarısız
        }
    }
}
