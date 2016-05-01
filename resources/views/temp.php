<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\TeacherRepository;
use App\Repositories\ClubRepository;
$arr=array();
array_push($arr, "Select A");
array_push($arr, "Select");
$classes = DB::table('section')
			->select('class_id')
			->distinct()
			->get();
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