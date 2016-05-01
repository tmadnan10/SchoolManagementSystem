<?php
namespace App\Http\Controllers;
use DB;
$arr=array();
array_push($arr, "Select A");
array_push($arr, "Select");
foreach ($classes as $class) {
	array_push($arr, $class->class_id);
}

/*for ($i=0; $i < sizeof($result); $i++) { 
	 //$arr.push($result[$i]["section_id"]);
	 array_push($arr, $result[$i]["section_id"]);
	
}*/
echo json_encode($arr);
//echo $arr[0];
//echo "hello world";
//echo $result[0]["section_id"];;
?>