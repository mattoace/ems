<?php

require_once('core/PictureCut.php');
$student_id = $_GET['student_id'];
try {

	$pictureCut = PictureCut::createSingleton();
	
	if($pictureCut->crop($student_id )){
		print $pictureCut->toJson();
	} else {
     print $pictureCut->exceptionsToJson(); //print exceptions if the upload fails
  	}

} catch (Exception $e) {
	print $e->getMessage();
}


