<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/config/config.php');

	if($_POST){
		$images = $_FILES['slide']['tmp_name'];
		$gimages = [];
		$uid = md5(uniqid(rand(),1));
	
	
		if(move_uploaded_file($images, '../img/'.$uid.'.jpg')){
			$gimages = 'admin/img/'.$uid.'.jpg';
		}
			
			$slider = R::dispense('slider');
			$slider->img = $gimages;
			R::store($slider);
		
			header("Location:../main.php");
	

	}


?>