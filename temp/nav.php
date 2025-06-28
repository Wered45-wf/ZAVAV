<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Прокат яхт</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
        if (!isset($_SESSION['id_user'])) {
        ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="reg.php">Регистрация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="auto.php">Авторизация</a>
        </li>
        <?php
        }
        ?>
        <?php
        if (isset($_SESSION['id_user']) && $_SESSION['role'] == 'client') {
          echo'<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index_client.php">Клиент</a>
        </li>';
        echo'<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mycab.php">Мои заказы</a>
        </li>';
        echo'<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Выход</a>
        </li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>