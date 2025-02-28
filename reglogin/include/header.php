<?php

  //header.php
  
  session_start();

  if(!isset($_SESSION["username"]))
  {
    header('location: login.html');
  }

?>

<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Главная</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Bootstrap v4.4.1 -->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/bootstrap.min.css">

    <!-- Font Awesome Free 5.12.0 -->
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome/css/all.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg">

  </head>

    <body class="bg-light">
      
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo-2.jpg" alt="50">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="index.php"><span class="fas fa-home"></span> Главная</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="profile.php"><span class="fas fa-user"></span> Профиль</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="logout.php"><span class="fas fa-sign-out-alt"></span> Выйти</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>