<?php include('include/header.php'); ?>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Главная пользователя:</h1>
        <p class="lead text-primary ont-weight-bold"><?php echo $_SESSION['fullname']; ?></p>
        <hr class="my-4">
      <p>Продолжить изучени курсов</p>
    </div>
  </div>

<?php include('include/footer.php'); ?>