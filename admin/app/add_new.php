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
			
		
		
		$news = R::dispense('news');
		$news->title=$title;
		$news->author=$author;
		$news->short_text=$short_text;
		$news->photograph=$photograph;
		$news->text=$text;
		$news->images=$gimages;
		$news->data_add = date('h-i-s j-m-y');
		R::store($news);

		header('Location:../main.php');





	}




?>