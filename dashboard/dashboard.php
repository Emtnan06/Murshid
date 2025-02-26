<?php
include "connect.php";
?>
<!doctype html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css">
  <link href="dashboard.css" rel="stylesheet">


  <title>لوحة التحكم</title>

</head>

<body>
  <div class="container">


    <button class="btn btn-primary my-5 " onClick="window.print()"><svg xmlns="http://www.w3.org/2000/svg" width="16"
        height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
        <path
          d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
      </svg>
      طباعة</button>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">الرقم التسلسلي</th>
          <th scope="col">اسم المكتب</th>
          <th scope="col">اسم الموظفة</th>
          <th scope="col">رقم الصيانة</th>
          <th scope="col">رقم المكتب</th>
          <th scope="col">العملية</th>
        </tr>
      </thead>
      <tbody>


        <?php

        $sql = "Select * from `offices`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $officeName = $row['officeName'];
            $name = $row['employeeName'];
            $number = $row['maintenanceId'];
            $officeNumber = $row['officeNumber'];
            echo '<tr>
            
          <th scope="row">' . $id . '</th>
          <td>' . $officeName . '</td>
          <td>' . $name . '</td>
          <td>' . $number . '</td>
          <td>' . $officeNumber . '</td>
          <td>
          <button style="margin-left:20px;"class="btn btn-primary "><a href="editinfo.php?updateid=' . $id . '" class="text-light text-decoration-none ">تعديل</a></button>
          
          </td>




        </tr>';
          }
        }



        ?>
      </tbody>
    </table>



  </div>



</body>

</html>