<?php
include 'temp/headr.php';

if (isset($_POST['reg'])) {
    $fio = $_POST['fio'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];

        $sql = 'insert into users (fio, phone, email, login, password) values ("'.$fio.'", "'.$phone.'", "'.$email.'", "'.$login.'", "'.$password.'")';

        if ($conect->query($sql)) {
            header('Location: auto.php');
            exit;
        }
}

?>
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ФИО</label>
    <input type="text" name="fio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">телефон</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Логин</label>
    <input required type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Пароль</label>
    <input required type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="reg" class="btn btn-primary">Регистрация</button>
</form>
<?php
include 'temp/footer.php';
?>