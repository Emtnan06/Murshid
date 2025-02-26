<!DOCTYPE html>
<html>
<?php
$error_message = "";
$con = mysqli_connect("localhost", "root", "", "login_register");
if (mysqli_connect_error()) {
  $error_message = "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();

} else {

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `admin` Where `admin_userName`='$username' AND `admin_password`='$password'";
    if ($result = $con->query($query)) {
      if ($result->num_rows == 0)
        $error_message = "اسم المستخدم أو كلمة المرور غير صحيحة";
      else {
        while ($obj = $result->fetch_object()) {

          echo "<script> location.replace('dashboard.php') </script>";
        }
        $result->free_result();

      }
    }
  }
}

mysqli_close($con);

?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="login.css" rel="stylesheet">

  <title>تسجيل الدخول</title>

</head>

<body class="bg-login">
 

  <div class="container-sm d-flex">
    <div class="justify-content-center box-login">
      <h3>
        <center>تسجيل الدخول</center>
      </h3>

      <div class="container-sm d-flex justify-content-center">
        <form method="POST">
          <div class="mb-3">
            <label for="username" class="form-label">اسم المستخدم</label>
            <input type="username" class="form-control" placeholder="اسم المستخدم" name="username">

          </div>
          <div class="mb-3">
            <label for="password" class="form-label">كلمة المرور</label>
            <input type="password" class="form-control" placeholder="كلمة المرور" name="password">
          </div>

          <button type="submit" name="login" class="btn btn-primary">دخول</button>
        </form>


      </div>
      <?php
      if ($error_message != "") {
        echo "<div class='alert alert-danger' role='alert'>$error_message</div>";
      }
      ?>
    </div>


  </div>


</body>

</html>