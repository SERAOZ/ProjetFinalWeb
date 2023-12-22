document.addEventListener("DOMContentLoaded", function() {
    // Elementler yüklendikten sonra çalışacak kodlar
    var homeButton = document.getElementById("home-button");

    if (homeButton) {
        homeButton.addEventListener("click", function() {
            //alert("Butona tıklandı!");
            window.location.href = '../VIEWS/accueil.php';
        });
    } else {
        // Eğer homeButton bulunamazsa konsola bir hata mesajı gönder
        //console.error("Home button not found!");
    }

    //Dashboard
    // Force a hover to see the effect
    const share = document.querySelector('.share');

    setTimeout(() => {
    share.classList.add("hover");
    }, 1000);

    setTimeout(() => {
    share.classList.remove("hover");
    }, 3000);
});
//
function goToHome() {
    // JavaScript ile yönlendirme
    window.location.href = "/views/user/identification/loginPage.php";
  }

/*document.addEventListener("DOMContentLoaded", function () {
            var loginForm = document.getElementById("login-form");
            var nameInput = document.getElementById("Nom-de-l-utilisateur");
            var passwordInput = document.getElementById("Mot-de-Passe");
            var nameError = document.getElementById("name-error");
            var passwordError = document.getElementById("password-error");
            var maxTries = 3; // Max 3 hakkı olacak

            loginForm.addEventListener("submit", function (e) {
                try {
                    // İsim doğrulaması
                    var name = nameInput.value.trim();
                    if (name.length < 3 || !/^[a-zA-Z0-9]+$/.test(name)) {
                        throw new Error("Lütfen geçerli bir isim girin (en az 3 harf veya rakam).");
                    }

                    // Şifre doğrulaması
                    var password = passwordInput.value.trim();
                    if (password.length < 6) {
                        if (maxTries > 0) {
                            maxTries--;
                            throw new Error("Yanlış şifre. " + maxTries + " hakkınız kaldı.");
                        } else {
                            throw new Error("3 başarısız giriş denemesinden sonra, motDePasseOublier.php sayfasına yönlendiriliyorsunuz.");
                        }
                    }

                    // Burada veritabanına bağlanma işlemi eklenebilir
                    // Örnek: var dbConnection = connectToDatabase();

                } catch (error) {
                    e.preventDefault(); // Formun gönderimini engelle
                    if (error.message) {
                        if (error.message.includes("geçerli bir isim girin")) {
                            nameError.textContent = error.message;
                            passwordError.textContent = "";
                        } else {
                            nameError.textContent = "";
                            passwordError.textContent = error.message;
                        }
                    }
                }
            });
});*/
