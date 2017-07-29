<?php
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));

$btnName=$dbhandle->real_escape_string($data->btnName);
if($btnName=='Insert'){
// alert('cfghhfghhfhg')
$id=$dbhandle->real_escape_string($data->id);
$name=$dbhandle->real_escape_string($data->name);
$company=$dbhandle->real_escape_string($data->company);
$email=$dbhandle->real_escape_string($data->email);
$mobile=$dbhandle->real_escape_string($data->mobile);

// $query="INSERT INTO project_form VALUES('".$name."','".$company."','".$email."','".$mobile."')";
$query="INSERT INTO `project_form` (`id`, `name`, `company`, `email`, `mobile`) VALUES ('$id', '$name', '$company', '$email', '$mobile');";
// console.log($query);
// console.log($btnName);
// alert($name);
$dbhandle->query($query);
	}

	else {

	// 	$id=$dbhandle->real_escape_string($data->id);
    //    $name=$dbhandle->real_escape_string($data->name);
    //    	$query="UPDATE project_form SET studname = '".$name."','".$company."','".$email."','".$mobile."'  WHERE studid=$id ";
    //    	$dbhandle->query($query);



	}

?>
