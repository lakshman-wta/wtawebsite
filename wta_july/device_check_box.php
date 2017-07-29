<?php
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));

//$btnName2=$dbhandle->real_escape_string($data->btnName2);

$devicename = $data->devicename;
//$query = $dbhandle->prepare("INSERT INTO project_device_name(devicename) VALUES (:devicename)");
$query = $dbhandle->prepare("INSERT INTO project_device_name(devicename) VALUES (:devicename)");
$execute = $query->execute(array(
    "devicename" =>$devicename
));
if($execute){
    echo "Success";
}
else{
    echo "Error accured";
}

//if($btnName2=='Device'){

//$devicename=$dbhandle->real_escape_string($data->productArray);
//        $query="INSERT INTO `project_device_name` (`id`, `name`) VALUES ('333', 'hareeshkumar');";
  //      $query="INSERT INTO `project_device_name` (`devicename `) VALUES ('$devicename');";
//    $query = "INSERT INTO project_device_name(name) VALUES('$name')
 //    $query .= implode(',', $devicename);
//$dbhandle->query($query);
	//}

//	else {

//	}

?>
