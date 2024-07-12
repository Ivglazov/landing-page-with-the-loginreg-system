<?php
$conn = mysqli_connect("404Guide", "root", "");
mysqli_query($conn, 'SET NAMES utf8');
mysqli_select_db($conn, "404Guide");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Личный кабинет</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets/img/logo.png" alt="">
        <h1>404</h1><span>Guide</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          
          <li class="dropdown has-dropdown"><a href="#"><span>.\\</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="index.html#hero" class="active">Главная</a></li>
              <li><a href="index.html#about">О нас</a></li>
              <li><a href="index.html#services">Услуги</a></li>
              <li><a href="index.html#team">Наша команда</a></li>
            </ul>
          </li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="cabinet.php">Личный кабинет</a>

    </div>
  </header>

  <main id="main">

    
    <div data-aos="fade" class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Здравствуйте, студент!</h1>
              <p class="mb-0">Перед вами ваш личный кабинет, в котором вы сможете отслеживать ваш прогресс в обучении.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <section id="cabinet" class="cabinet">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="article">

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h2>

              

              <div class="content">

              </div>
            </article>

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Доступные уроки</h3>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM `lessons_cabinet`");
                $myrow = array();
                $index=0;
                while($row = mysqli_fetch_assoc($result)){
                  $myrow[$index]=$row;
                  $name=$myrow[$index]['Name'];
                  $href=$myrow[$index]['href'];
                  $img=$myrow[$index]['img'];
                  $status=$myrow[$index]['status'];
                  $index++;
                  echo "<div class='post-item'><img src='$img' alt='' class='flex-shrink-0'><div><h4><a href='$href'>$name</a></h4><p>$status</p></div></div>";
                  };
                  ?>


              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

  </main>


  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>404Guide</span>
          </a>
          <p>“SEO - ключ к успеху вашего бизнеса в интернете!”</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Свяжитесь с нами</h4>
          <p class="mt-4"><strong>Телефон:</strong> <span>+7 910 125 70 13</span></p>
          <p><strong>Email:</strong> <span>404guide@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Копирайт</span> <strong class="px-1">Wolfinitte records</strong> <span>Все права защищены</span></p>
      <div class="credits">
        Разработано <a>Джонатоном А. Вульфсоном</a>
      </div>
    </div>

  </footer>
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>