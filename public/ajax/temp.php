<?php
//include "server.php";

//echo "hello world";
use Illuminate\Support\Facades\Input;

$arr=array();
array_push($arr, "Select A Section");
array_push($arr, "Select");
//$classes = DB::table('section')
//			->select('class_id')
//			->distinct()
//			->get();


/*for ($i=0; $i < sizeof($result); $i++) { 
	 //$arr.push($result[$i]["section_id"]);
	 array_push($arr, $result[$i]["section_id"]);
	
}*/
echo json_encode($arr);
//echo $arr[0];
//echo "hello world";
//echo $result[0]["section_id"];;
?>