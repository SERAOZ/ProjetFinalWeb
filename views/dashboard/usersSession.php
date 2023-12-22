<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ziyaretçi Formu</title>
</head>
<body>
    <h2>Ziyaretçi Formu</h2>
    <form action="submit.php" method="post">
        <label for="idUtilisateur">Kullanıcı ID:</label><br>
        <input type="number" id="idUtilisateur" name="idUtilisateur"><br>

        <label for="debutSession">Oturum Başlangıç Zamanı:</label><br>
        <input type="datetime-local" id="debutSession" name="debutSession"><br>

        <label for="finSession">Oturum Bitiş Zamanı:</label><br>
        <input type="datetime-local" id="finSession" name="finSession"><br>

        <input type="submit" value="Gönder">
    </form>
</body>
</html>
