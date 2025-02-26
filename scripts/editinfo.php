<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `offices` where id=$id";
$r = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($r);

$officeName = $row['officeName'];
$name = $row['employeeName'];
$number = $row['maintenanceId'];
$officeNumber = $row['officeNumber'];



if (isset($_POST['submit'])) {
  $officeName = $_POST['officeName'];
  $name = $_POST['name'];
  $number = $_POST['number'];
  $officeNumber = $_POST['officeNumber'];
  $sql = "UPDATE `offices` SET `id`='$id',`officeName`='$officeName',`employeeName`='$name',`maintenanceId`='$number',`officeNumber`='$officeNumber' WHERE id=$id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "<div class='alert alert-success d-flex align-items-center' role='alert'> تم التعديل بنجاح
       </div>";
      

  } else {
    die(mysqli_error($con));
  }


}



?>

<!doctype html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css">
  <link href="offices.css" rel="stylesheet">

  <title>تعديل المعلومات</title>
</head>

<body>
  <div class="container">
    <form method="post">
      <div class="form-group">
        <labelclass="form-label">اسم المكتب</label>
          <input type="text" class="form-control" name="officeName" value=<?php echo $officeName ?>>

      </div>
      <div class="form-group">
        <label class="form-label">اسم الموظفة</label>
        <input type="text" class="form-control" name="name" value=<?php echo $name ?>>
      </div>
      <div class="form-group">
        <label class="form-label">رقم الصيانة</label>
        <input type="text" class="form-control" name="number" value=<?php echo $number ?>>
      </div>
      <div class="form-group">
        <label class="form-label">رقم المكتب</label>
        <input type="text" class="form-control" name="officeNumber" value=<?php echo $officeNumber ?>>
      </div>

      <button type="submit" class="btn btn-primary" name="submit">تعديل</button>
      <button type="submit" class="btn btn-danger " name="back"><a href="dashboard.php" style= "text-decoration: none; color:white;" >الغاء</a></button>
    </form>

  </div>



</body>

</html>