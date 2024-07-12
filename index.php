<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>WEBOSEC</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

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

    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <header id="header" class="header fixed-top">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="" />
          <span>WEBOSEC</span>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li>
              <a class="nav-link scrollto active" href="#hero">Главная</a>
            </li>
            <li><a class="nav-link scrollto" href="#about">О нас</a></li>
            <li>
              <a class="nav-link scrollto" href="#services"
                >Наши преимущества</a
              >
            </li>
            <li><a class="nav-link scrollto" href="#team">Наша команда</a></li>
            <li><a href="blog.html">Регистрация</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Курсы</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
                <li><a href="#">Курс 1</a></li>
                <li class="dropdown">
                  <a href="#"
                    ><span>Секция курсов</span>
                    <i class="bi bi-chevron-right"></i
                  ></a>
                  <ul>
                    <li><a href="#">Скурс 1</a></li>
                    <li><a href="#">Скурс 2</a></li>
                    <li><a href="#">Скурс 3</a></li>
                    <li><a href="#">Скурс 4</a></li>
                    <li><a href="#">Скурс 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Курс 2</a></li>
                <li><a href="#">Курс 3</a></li>
                <li><a href="#">Курс 4</a></li>
              </ul>
            </li>

            <li class="dropdown megamenu">
              <a href="#"
                ><span>Статьи</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
                <li>
                  <a href="#">Статья 1</a>
                  <a href="#">Статья 2</a>
                  <a href="#">Статья 3</a>
                </li>
                <li>
                  <a href="#">Статья 4</a>
                  <a href="#">Статья 5</a>
                  <a href="#">Статья 6</a>
                </li>
                <li>
                  <a href="#">Статья 7</a>
                  <a href="#">Статья 8</a>
                  <a href="#">Статья 9</a>
                </li>
                <li>
                  <a href="#">Статья 10</a>
                  <a href="#">Статья 11</a>
                  <a href="#">Статья 12</a>
                </li>
              </ul>
            </li>

            <li><a class="nav-link scrollto" href="#contact">Контакт</a></li>
            <li>
              <a class="getstarted scrollto" href="reglogin/login.html">Логин</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Великолепные курсы от великолепных людей</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">
              Будьте в безопасности всегда и везде в ИнТеРнЕтЕ
            </h2>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a
                  href="#about"
                  class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"
                >
                  <span>Начать</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div
            class="col-lg-6 hero-img"
            data-aos="zoom-out"
            data-aos-delay="200"
          >
            <img src="assets/img/hero-img.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>

    <main id="main">
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row gx-0">
            <div
              class="col-lg-6 d-flex flex-column justify-content-center"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="content">
                <h3>О нас</h3>
                <h2>
                Привет! Мы рады представить вам наш проект - курсы безопасности веб-приложений Webosec. Мы - команда опытных специалистов в области IT-безопасности, которые объединили свои усилия для создания уникального и эффективного образовательного ресурса.
                </h2>
                <p>
                Webosec предлагает курсы по самым актуальным вопросам веб-безопасности: от основ работы с сетями и криптографии до тестирования на проникновение и анализа вредоносного ПО. Наши курсы разработаны для того, чтобы помочь вам получить знания и навыки, необходимые для успешной карьеры в сфере IT-безопасности.

Мы стремимся сделать процесс обучения максимально удобным и доступным для каждого. Наши курсы доступны как в формате онлайн-лекций, так и в виде видеоуроков, которые можно просматривать в любое удобное для вас время. Кроме того, мы предоставляем возможность общения с преподавателями и другими студентами в рамках нашего сообщества.

Присоединяйтесь к нам на Webosec и откройте для себя мир безопасной разработки веб-приложений! Мы уверены, что наши курсы помогут вам стать профессионалом в своей области и обеспечить безопасность вашего бизнеса и ваших данных.
                </p>
                <div class="text-center text-lg-start">
                  <a
                    href="#"
                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center"
                  >
                    <span>Читать далее</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-6 d-flex align-items-center"
              data-aos="zoom-out"
              data-aos-delay="200"
            >
              <img src="assets/img/about.jpg" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </section>
      <section id="values" class="values">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Наши преимущества</h2>
            <p>Преиущества обучения у нас</p>
          </header>

          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="box">
                <img src="assets/img/values-1.png" class="img-fluid" alt="" />
                <h3>Опыт преподавателей</h3>
                <p>
                Наши курсы проводятся опытными специалистами в области IT-безопасности, которые имеют многолетний опыт работы в этой сфере.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 mt-4 mt-lg-0"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="box">
                <img src="assets/img/values-2.png" class="img-fluid" alt="" />
                <h3>Актуальность материалов</h3>
                <p>
                Курсы Webosec постоянно обновляются и дополняются новыми материалами, чтобы студенты получали самые актуальные знания и навыки.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 mt-4 mt-lg-0"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <div class="box">
                <img src="assets/img/values-3.png" class="img-fluid" alt="" />
                <h3>Удобство обучения</h3>
                <p>
                Курсы Webosec доступны в различных форматах: онлайн-лекции, видеоуроки, общение с преподавателями и другими студентами.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <div>
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="8500"
                    data-purecounter-duration="1"
                    class="purecounter"
                  ></span>
                  <p>Клиентов</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-journal-richtext" style="color: #ee6c20"></i>
                <div>
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="35"
                    data-purecounter-duration="1"
                    class="purecounter"
                  ></span>
                  <p>Курсов</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-headset" style="color: #15be56"></i>
                <div>
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="450"
                    data-purecounter-duration="1"
                    class="purecounter"
                  ></span>
                  <p>Часов обучения</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-people" style="color: #bb0852"></i>
                <div>
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="4.95"
                    data-purecounter-duration="1"
                    class="purecounter"
                  ></span>
                  <p>Средняя оценка</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="services" class="services">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Курсы</h2>
            <p>Некоторые из наших курсов</p>
          </header>

          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="service-box blue">
                <i class="ri-discuss-line icon"></i>
                <h3>Безопасность в сети интернет. Начало</h3>
                <p>
                  Provident nihil minus qui consequatur non omnis maiores. Eos
                  accusantium minus dolores iure perferendis tempore et
                  consequatur.
                </p>
                <a href="#" class="read-more"
                  ><span>Читать далее</span> <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="service-box orange">
                <i class="ri-discuss-line icon"></i>
                <h3>Безопасность серверов</h3>
                <p>
                  Ut autem aut autem non a. Sint sint sit facilis nam iusto
                  sint. Libero corrupti neque eum hic non ut nesciunt dolorem.
                </p>
                <a href="#" class="read-more"
                  ><span>Читать далее</span> <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="service-box green">
                <i class="ri-discuss-line icon"></i>
                <h3>Пресечение кибератак</h3>
                <p>
                  Ut excepturi voluptatem nisi sed. Quidem fuga consequatur.
                  Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.
                </p>
                <a href="#" class="read-more"
                  ><span>Читать далее</span> <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <div class="service-box red">
                <i class="ri-discuss-line icon"></i>
                <h3>Защита от DDOS</h3>
                <p>
                  Non et temporibus minus omnis sed dolor esse consequatur.
                  Cupiditate sed error ea fuga sit provident adipisci neque.
                </p>
                <a href="#" class="read-more"
                  ><span>Читать далее</span> <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <div class="service-box purple">
                <i class="ri-discuss-line icon"></i>
                <h3>Безопасность в сети интернет. Углубленный уровень</h3>
                <p>
                  Cumque et suscipit saepe. Est maiores autem enim facilis ut
                  aut ipsam corporis aut. Sed animi at autem alias eius labore.
                </p>
                <a href="#" class="read-more"
                  ><span>Читать далее</span> <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="700"
            >
              <div class="service-box pink">
                <i class="ri-discuss-line icon"></i>
                <h3>Методы защиты персональных данных</h3>
                <p>
                  Hic molestias ea quibusdam eos. Fugiat enim doloremque aut
                  neque non et debitis iure. Corrupti recusandae ducimus enim.
                </p>
                <a href="#" class="read-more"
                  ><span>Читать далее</span> <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Тарифные планы</h2>
            <p>Тарифы</p>
          </header>

          <div class="row gy-4" data-aos="fade-left">
            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="box">
                <h3 style="color: #07d5c0">Бесплатный план</h3>
                <div class="price"><sup>₽</sup>0<span> / месяц</span></div>
                <img
                  src="assets/img/pricing-free.png"
                  class="img-fluid"
                  alt=""
                />
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li class="na">Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="box">
                <span class="featured">Хит продаж</span>
                <h3 style="color: #65c600">Основной план</h3>
                <div class="price"><sup>₽</sup>399<span> / месяц</span></div>
                <img
                  src="assets/img/pricing-starter.png"
                  class="img-fluid"
                  alt=""
                />
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="box">
                <h3 style="color: #ff901c">Основной план+</h3>
                <div class="price"><sup>₽</sup>899<span> / месяц</span></div>
                <img
                  src="assets/img/pricing-business.png"
                  class="img-fluid"
                  alt=""
                />
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="400"
            >
              <div class="box">
                <h3 style="color: #ff0071">VIP план</h3>
                <div class="price"><sup>₽</sup>1499<span> / месяц</span></div>
                <img
                  src="assets/img/pricing-ultimate.png"
                  class="img-fluid"
                  alt=""
                />
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>F.A.Q</h2>
            <p>Частозадаваемые вопросы</p>
          </header>

          <div class="row">
            <div class="col-lg-6">
              <div class="accordion accordion-flush" id="faqlist1">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-content-1"
                    >
                      Non consectetur a erat nam at lectus urna duis?
                    </button>
                  </h2>
                  <div
                    id="faq-content-1"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqlist1"
                  >
                    <div class="accordion-body">
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna
                      id volutpat lacus laoreet non curabitur gravida. Venenatis
                      lectus magna fringilla urna porttitor rhoncus dolor purus
                      non.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-content-2"
                    >
                      Feugiat scelerisque varius morbi enim nunc faucibus a
                      pellentesque?
                    </button>
                  </h2>
                  <div
                    id="faq-content-2"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqlist1"
                  >
                    <div class="accordion-body">
                      Dolor sit amet consectetur adipiscing elit pellentesque
                      habitant morbi. Id interdum velit laoreet id donec
                      ultrices. Fringilla phasellus faucibus scelerisque
                      eleifend donec pretium. Est pellentesque elit ullamcorper
                      dignissim. Mauris ultrices eros in cursus turpis massa
                      tincidunt dui.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-content-3"
                    >
                      Dolor sit amet consectetur adipiscing elit pellentesque
                      habitant morbi?
                    </button>
                  </h2>
                  <div
                    id="faq-content-3"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqlist1"
                  >
                    <div class="accordion-body">
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices
                      sagittis orci. Faucibus pulvinar elementum integer enim.
                      Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                      tellus pellentesque eu tincidunt. Lectus urna duis
                      convallis convallis tellus. Urna molestie at elementum eu
                      facilisis sed odio morbi quis
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="accordion accordion-flush" id="faqlist2">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#faq2-content-1"
                    >
                      Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                    </button>
                  </h2>
                  <div
                    id="faq2-content-1"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqlist2"
                  >
                    <div class="accordion-body">
                      Dolor sit amet consectetur adipiscing elit pellentesque
                      habitant morbi. Id interdum velit laoreet id donec
                      ultrices. Fringilla phasellus faucibus scelerisque
                      eleifend donec pretium. Est pellentesque elit ullamcorper
                      dignissim. Mauris ultrices eros in cursus turpis massa
                      tincidunt dui.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#faq2-content-2"
                    >
                      Tempus quam pellentesque nec nam aliquam sem et tortor
                      consequat?
                    </button>
                  </h2>
                  <div
                    id="faq2-content-2"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqlist2"
                  >
                    <div class="accordion-body">
                      Molestie a iaculis at erat pellentesque adipiscing
                      commodo. Dignissim suspendisse in est ante in. Nunc vel
                      risus commodo viverra maecenas accumsan. Sit amet nisl
                      suscipit adipiscing bibendum est. Purus gravida quis
                      blandit turpis cursus in
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#faq2-content-3"
                    >
                      Varius vel pharetra vel turpis nunc eget lorem dolor?
                    </button>
                  </h2>
                  <div
                    id="faq2-content-3"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqlist2"
                  >
                    <div class="accordion-body">
                      Laoreet sit amet cursus sit amet dictum sit amet justo.
                      Mauris vitae ultricies leo integer malesuada nunc vel.
                      Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                      eget lorem dolor sed. Ut venenatis tellus in metus
                      vulputate eu scelerisque. Pellentesque diam volutpat
                      commodo sed egestas egestas fringilla phasellus faucibus.
                      Nibh tellus molestie nunc non blandit massa enim nec.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Отзывы</h2>
            <p>Отзывы наших клиентов</p>
          </header>

          <div
            class="testimonials-slider swiper"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Proin iaculis purus consequat sem cure digni ssim donec
                    porttitora entum suscipit rhoncus. Accusantium quam,
                    ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                    risus at semper.
                  </p>
                  <div class="profile mt-auto">
                    <img
                      src="assets/img/testimonials/testimonials-1.jpg"
                      class="testimonial-img"
                      alt=""
                    />
                    <h3>Самуил Багратион</h3>
                    <h4>Ceo &amp; специалист</h4>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Export tempor illum tamen malis malis eram quae irure esse
                    labore quem cillum quid cillum eram malis quorum velit fore
                    eram velit sunt aliqua noster fugiat irure amet legam anim
                    culpa.
                  </p>
                  <div class="profile mt-auto">
                    <img
                      src="assets/img/testimonials/testimonials-2.jpg"
                      class="testimonial-img"
                      alt=""
                    />
                    <h3>Ибабабим Имбарахман</h3>
                    <h4>Агент ФСБ</h4>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Enim nisi quem export duis labore cillum quae magna enim
                    sint quorum nulla quem veniam duis minim tempor labore quem
                    eram duis noster aute amet eram fore quis sint minim.
                  </p>
                  <div class="profile mt-auto">
                    <img
                      src="assets/img/testimonials/testimonials-3.jpg"
                      class="testimonial-img"
                      alt=""
                    />
                    <h3>Евлампий Мордоворотов</h3>
                    <h4>IT специалист</h4>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                    multos export minim fugiat minim velit minim dolor enim duis
                    veniam ipsum anim magna sunt elit fore quem dolore labore
                    illum veniam.
                  </p>
                  <div class="profile mt-auto">
                    <img
                      src="assets/img/testimonials/testimonials-4.jpg"
                      class="testimonial-img"
                      alt=""
                    />
                    <h3>Соул Гудман</h3>
                    <h4>Безработный</h4>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Quis quorum aliqua sint quem legam fore sunt eram irure
                    aliqua veniam tempor noster veniam enim culpa labore duis
                    sunt culpa nulla illum cillum fugiat legam esse veniam culpa
                    fore nisi cillum quid.
                  </p>
                  <div class="profile mt-auto">
                    <img
                      src="assets/img/testimonials/testimonials-5.jpg"
                      class="testimonial-img"
                      alt=""
                    />
                    <h3>Жмых Попандополус</h3>
                    <h4>Специалист по кибербезопаности</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <section id="team" class="team">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Команда</h2>
            <p>Наши преподователи</p>
          </header>

          <div class="row gy-4">
            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="assets/img/team/team-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Красильникова Альвина Валентиновна</h4>
                  <span>Шифровальщик</span>
                  <p>
                    Velit aut quia fugit et et. Dolorum ea voluptate vel tempore
                    tenetur ipsa quae aut. Ipsum exercitationem iure minima enim
                    corporis et voluptate.
                  </p>
                </div>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="assets/img/team/team-2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Борисова Нега Юрьевна</h4>
                  <span>Белый хакер</span>
                  <p>
                    Quo esse repellendus quia id. Est eum et accusantium
                    pariatur fugit nihil minima suscipit corporis. Voluptate sed
                    quas reiciendis animi neque sapiente.
                  </p>
                </div>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="assets/img/team/team-3.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Комиссаров Адриан Арсеньевич</h4>
                  <span>Специалист по кибебезопасности</span>
                  <p>
                    Vero omnis enim consequatur. Voluptas consectetur unde qui
                    molestiae deserunt. Voluptates enim aut architecto porro
                    aspernatur molestiae modi.
                  </p>
                </div>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="member">
                <div class="member-img">
                  <img
                    src="assets/img/team/team-4.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Дорофеева Доля Кимовна</h4>
                  <span>Местная уборщица</span>
                  <p>
                    Rerum voluptate non adipisci animi distinctio et deserunt
                    amet voluptas. Quia aut aliquid doloremque ut possimus ipsum
                    officia.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Статьи</h2>
            <p>Различные статьи по теме</p>
          </header>

          <div class="row">
            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img">
                  <img
                    src="assets/img/blog/blog-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <span class="post-date">01.09.2023</span>
                <h3 class="post-title">
                  Eum ad dolor et. Autem aut fugiat debitis voluptatem
                  consequuntur sit
                </h3>
                <a
                  href="blog-single.html"
                  class="readmore stretched-link mt-auto"
                  ><span>Читать далее</span><i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img">
                  <img
                    src="assets/img/blog/blog-2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <span class="post-date">01.09.2023</span>
                <h3 class="post-title">
                  Et repellendus molestiae qui est sed omnis voluptates magnam
                </h3>
                <a
                  href="blog-single.html"
                  class="readmore stretched-link mt-auto"
                  ><span>Читать далее</span><i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img">
                  <img
                    src="assets/img/blog/blog-3.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <span class="post-date">01.09.2023</span>
                <h3 class="post-title">
                  Quia assumenda est et veritatis aut quae
                </h3>
                <a
                  href="blog-single.html"
                  class="readmore stretched-link mt-auto"
                  ><span>Читать далее</span><i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Контактная информаиця</h2>
            <p>Свяжитесь с нами</p>
          </header>

          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Адрес</h3>
                    <p>г. Арзамас, <br />ул. Жуковского, д.2.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Номер телефона</h3>
                    <p>8-(83147)-7-02-37<br />7-18-75</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p>apk_suz@mail.52gov.ru</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-clock"></i>
                    <h3>Мы работаем</h3>
                    <p>Понедельник - Суббота<br />с 8:00 до 16:30</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <form
                action="forms/contact.php"
                method="post"
                class="php-email-form"
              >
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="ФИО"
                      required
                    />
                  </div>

                  <div class="col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Email"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      placeholder="Заголовок"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="6"
                      placeholder="Сообщение"
                      required
                    ></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Загрузка</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                      Ваше сообщение отправлено
                    </div>

                    <button type="submit">Отправить</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
   

    <footer id="footer" class="footer">
      <div class="footer-newsletter">
        

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
