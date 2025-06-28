<?php
include 'temp/headr.php';
if (isset($_POST['auto'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = 'select * from users where login = "'.$login.'" and password = "'.$password.'"';

    $user = $conect->query($sql);
    $user_c = $user->fetch_assoc();
    if ($user->num_rows > 0) { 
      $role = $user_c['role'];
      $_SESSION['login'] = $login;
      $_SESSION['role'] = $role;
      $_SESSION['id_user'] = $user_c['id_user'];
      if ($role == 'client') {
        header('Location: index_client.php');
        exit;
      }
      
    }
}
?>
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите Логин</label>
    <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите Пароль</label>
    <input type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="auto" class="btn btn-primary">Авторизация</button>
</form>
<?php
include 'temp/footer.php';
?>