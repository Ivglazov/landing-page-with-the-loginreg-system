<?php
$conn = mysqli_connect("localhost" ,"root", "", "egm_users");
mysqli_query($conn, "SET NAMES utf8");
mysqli_select_db($conn, "egm_users");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php
  $id=$_GET['id'];
  $result = mysqli_query($conn, "SELECT * FROM lessons WHERE id=$id");
  $myrow = array();
  $row = mysqli_fetch_assoc($result);
  $index=0;
  $myrow[$index]=$row;
  $name=$myrow[$index]['Name'];
  $title=$myrow[$index]['Title'];
  $subtitle=$myrow[$index]['Subtitle'];
  $title_theme=$myrow[$index]['Title_theme'];
  echo "<title>$name</title>";
  ?>
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
              <?php
              echo "<h1>$name. $title</h1><p class='mb-0'>$subtitle</p>"
              ?>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="cabinet.php">Личный кабинет</a></li>
            <?php
              echo "<li class='current'>$name</li>";
              ?>

          </ol>
        </div>
      </nav>
    </div>

    <section id="lesson" class="lesson">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="service-box">
              <h4>Список уроков</h4>
              <div class="services-list">
              <?php
              $id=$_GET['id'];
              $result = mysqli_query($conn, "SELECT * FROM `lessons`");
              $myrow = array();
              $index=0;
              while($row = mysqli_fetch_assoc($result)){
                $myrow[$index]=$row;
                $id_lesson=$myrow[$index]['id'];
                $name=$myrow[$index]['Name'];
                $href=$myrow[$index]['href'];
                $title=$myrow[$index]['Title'];
                $index++;
                if($id==$id_lesson){
                  echo "<a href='$href' class='active'><i class='bi bi-arrow-right-circle'></i><span>$name. $title</span></a>";
                }
                else{
                  echo "<a href='$href'><i class='bi bi-arrow-right-circle'></i><span>$name. $title</span></a>";
                }

                };
                ?>

              </div>
            </div>

            <div class="service-box">
              <h4>Материалы для урока</h4>
              <?php
              $id=$_GET['id'];
              $result = mysqli_query($conn, "SELECT * FROM `lessons_materials` where number_for_lesson=$id");
              $myrow = array();
              $index=0;
              echo "<div class='download-catalog'>";
              while($row = mysqli_fetch_assoc($result)){
                $myrow[$index]=$row;
                $material=$myrow[$index]['material'];
                $type=$myrow[$index]['type'];
                $name_of_material=$myrow[$index]['name_of_material'];
                $index++;
                if($type=='docx'){
                  echo "<a href='$material'><i class='bi bi-file-earmark-word'></i><span>$name_of_material</span></a>";
                }
                else if($type=='pdf'){
                  echo "<a href='$material'><i class='bi bi-filetype-pdf'></i><span>$name_of_material</span></a>";
                }
              };
              echo "</div>";
                ?>
              
            </div>
          </div>

          <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
          <?php
              echo "<h3>$title_theme</h3>";
              ?>
            <p>
              Sample text
            </p>
            <img src="assets/img/blog/video.jpg" alt="" class="img-fluid services-img">
            
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Sample text</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Sample text</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Sample text</span></li>
            </ul>
            <p>
              Sample text
            </p>
            <p>
              Sample text
            </p>
            <div class="blog-author d-flex align-items-center">
              <img src="assets/img/blog/comments-fill.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4>Автор</h4>
                <p>
                  Sample text
                </p>
              </div>
            </div>
            <div class="comments">

              <h4 class="comments-count">3 Комментария</h4>

              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-fill.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Комментатор</a> </h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Sample text
                    </p>
                  </div>
                </div>
              </div>

              <div id="comment-3" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-fill.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Комментатор</a> </h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Sample text
                    </p>
                  </div>
                </div>

              </div>

              <div id="comment-4" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-fill.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Комментатор</a> </h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Sample text
                    </p>
                  </div>
                </div>

              </div>

              <div class="reply-form">

                <h4>Оставить комментарий</h4>
                <p>У вас возник вопрос? Или вы хотите помочь другому студенту? Напишите комментарий </p>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Ваше имя">
                    </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Текст сообщения"></textarea>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                  </div>

                </form>

              </div>

            </div>
          </div>
          

        </div>

        
      </div>

      

    </section><!-- End lesson Section -->

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