<?
// Страница регистрации нового пользователя

// Соединямся с БД
$link=mysqli_connect("localhost", "root", "", "VICH_SPEED");

if(isset($_POST['submit']))
{
    $err = [];

    // проверям логин
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    // проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }

    // Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {

        $login = $_POST['login'];

        // Убераем лишние пробелы и делаем двойное хеширование
        $password = md5(md5(trim($_POST['password'])));

        mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
        header("Location: login.php"); exit();
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Регистрация</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
<form method="POST">
    <main id="main">
      <section class="vh-100" style="background-color: #297844">
        <div class="container py-5 h-100">
          <div
            class="row d-flex justify-content-center align-items-center h-100"
          >
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img
                      src="assets/img/reg.png"
                      alt="login form"
                      class="img-fluid"
                      style="border-radius: 1rem 0 0 1rem"
                    />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                      <form>
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i
                            class="fas fa-cubes fa-2x me-3"
                            style="color: #ff6219"
                          ></i>
                          <span class="h1 fw-bold mb-0">WEBOSEC</span>
                        </div>

                        <h5
                          class="fw-normal mb-3 pb-3"
                          style="letter-spacing: 1px"
                        >
                          <a href="#">Регистрация</a>
                        </h5>

                        <div class="form-outline mb-4">
                          <input
                            name="email"
                            type="email"
                            id="form2Example17"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="form2Example17"
                            >Email</label
                          >
                        </div>

                        <div class="form-outline mb-4">
                          <input
                            name="login"
                            type="text"
                            id="form2Example17"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="form2Example17"
                            >ФИО</label
                          >
                        </div>

                        <div class="form-outline mb-4">
                          <input
                            name="password"
                            type="password"
                            id="form2Example27"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="form2Example27"
                            >Пароль</label
                          >
                        </div>

                        <div class="pt-1 mb-4">
                          <button
                            class="btn btn-dark btn-lg btn-block"
                            type="button"
                          >
                            <a href="login.php">Регистрация</a>
                          </button>
                        </div>

                        <p class="mb-5 pb-lg-2" style="color: #4a7559">
                          Есть аккаунт
                          <a href="login.php" style="color: #4a7559">Войти</a>
                        </p>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
</form>
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Ванюшка</span></strong
          >. Все права сохранены
        </div>
      </div>
    </footer>

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
