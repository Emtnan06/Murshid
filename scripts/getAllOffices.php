<?php
include 'connect.php';

$page = $_GET['page'];
$index = $_GET['index'];
$search = $_GET['search'];

if ($search == null or $search === ""  or $search == "undefined") 
    $sql = "SELECT * FROM `offices`";
else
    $sql = "SELECT * FROM `offices` WHERE `officeName` like '%$search%' OR `employeeName` like '%$search%' OR `maintenanceId` like '%$search%' OR `officeNumber` like '%$search%'";

$result = mysqli_query($con, $sql);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $newArrData = [];
        $arr_result = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $arr_result[] = $row;
        }
        foreach($arr_result as $key=>$value){
            $newArrData[$key] =  $arr_result[$key];
            $newArrData[$key]['direction'] = base64_encode($arr_result[$key]['direction']);
        }
        $data = [];
        $data['totalItems'] = sizeof($newArrData);
        $data['result'] = array_slice($newArrData, $index, 20);
        echo json_encode($data);
    } else {
        $data = [];
        $data['totalItems'] = 0;
        $data['result'] = [];
        echo json_encode($data);
    }

} else {
    $data = [];
    $data['totalItems'] = 0;
    $data['result'] = [];
    echo json_encode($data);
}

?>