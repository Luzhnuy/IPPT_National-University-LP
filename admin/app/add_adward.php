<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');


	if($_POST){
		$title = $_POST['title'];
		$author = $_POST['author'];
		$short_text = $_POST['short_text'];
		$photograph = $_POST['photograph'];
		$text = $_POST['text'];
		
		$images = $_FILES['photo']['tmp_name'];
		$gimages = [];
		
		
		$uid = md5(uniqid(rand(),1));
	;
	
		if(move_uploaded_file($images, '../img/'.$uid.'.jpg')){
			$gimages = 'admin/img/'.$uid.'.jpg';
		}
			
		
		
		$adward = R::dispense('adward');
		$adward->title=$title;
		$adward->author=$author;
		$adward->short_text=$short_text;
		$adward->photograph=$photograph;
		$adward->text=$text;
		$adward->images=$gimages;
		$adward->data_add = date('h-i-s j-m-y');
		R::store($adward);

		header('Location:../main.php');





	}




?>