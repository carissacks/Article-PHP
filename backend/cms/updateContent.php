<?php
    include '../../include/db_connection.php';
	include '../../include/function.php';
	
	$idxNewImage = $_POST['idxNewImage'];
	$idxNewContent = $_POST['idxNewContent'];
	
	$idxImage = $_POST['idxImage'];	
	$idxContent = $_POST['idxContent'];
	
	$type = $_POST['type'];
	$id = $_POST['id'];
	$title = $_POST['title'];
// 	$date = $_POST['date'];
    $publisher = $_POST['publisher'];
    $coverimg = $_FILES['coverimg'];
	$content = $_POST['content'];
	$updated = '1';

	if($_FILES['coverimg']['size'] == 0){
		$image = $_POST['oldcoverimg'];
	}
	else{
		$image = $id.'0'.$_FILES['coverimg']['name'];
		$img = $_FILES['coverimg']['tmp_name'];
		$filepath = "images/".$type."/".$image;
	}

	$images = array();
	$imagesTmp = array();
	$contents = array();
	$filepathextend = array();
	
	$i = 1;
    if($idxNewImage < $idxImage){
        for(;$i<$idxNewImage;$i++){
    		if($_FILES['idImage-'.$i]['size'] == 0){
    			$images[$i] = $_POST['oldidImage-'.$i];
    		}
    		else{
    			$images[$i] = $id.$i.$_FILES['idImage-'.$i]['name'];
    			$imagesTmp[$i] = $_FILES['idImage-'.$i]['tmp_name'];
    			$filepathextend[$i] = "images/".$type."/".$images[$i];
    		}
    	} 
    }
    else{
        for(;$i<$idxImage;$i++){
    		if($_FILES['idImage-'.$i]['size'] == 0){
    			$images[$i] = $_POST['oldidImage-'.$i];
    		}
    		else{
    			$images[$i] = $id.$i.$_FILES['idImage-'.$i]['name'];
    			$imagesTmp[$i] = $_FILES['idImage-'.$i]['tmp_name'];
    			$filepathextend[$i] = "images/".$type."/".$images[$i];
    		}
    	}  
    }
	
	if($idxNewImage > $idxImage){
	    for($i = $idxImage; $i < $idxNewImage; $i++){
	        $images[$i] = $id.$i.$_FILES['idImage-'.$i]['name'];
			$imagesTmp[$i] = $_FILES['idImage-'.$i]['tmp_name'];
			$filepathextend[$i] = "images/".$type."/".$images[$i];
	    }    
	}
	
	for(;$i<5;$i++)
	{
		$images[$i] = NULL;
	}
    
    $i = 1;
    if($idxNewContent < $idxContent){
        for(;$i<$idxNewContent;$i++){
            $contents[$i] = $_POST['idContent-'.$i];
        }
    }
    else{
        for(;$i<$idxContent;$i++)
    	{
    		$contents[$i] = $_POST['idContent-'.$i];
    	}
    }
	
	if($idxNewContent > $idxContent){
        for($i=$idxContent;$i<$idxNewContent;$i++){
            $contents[$i] = $_POST['idContent-'.$i];
        }
    }

	for(;$i<5;$i++)
	{
		$contents[$i] = NULL;
	}	
	
    $query = "UPDATE ms_category_$type SET title = '$title', publisher = '$publisher', cover_img = '$image', content = '$content', image_2= '$images[1]', content_2 = '$contents[1]', image_3='$images[2]', content_3='$contents[2]', image_4='$images[3]', content_4='$contents[3]', image_5='$images[4]', content_5='$contents[4]', updated = '$updated' WHERE id = '$id';";
		$result = mysqli_query($db, $query);

	if($_FILES['coverimg']['size'] != 0){
		
		$path = "images/".$type."/".$_POST['oldcoverimg'];
		unlink($path) or die("Failed to <strong class='highlight'>delete</strong> file");
		move_uploaded_file($img, $filepath);
	}

	for($j=1;$j<$idxImage;$j++)
	{
		if($_FILES['idImage-'.$j]['size'] != 0){
			$path = "images/".$type."/".$_POST['oldidImage-'.$j];
			unlink($path) or die("Failed to <strong class='highlight'>delete</strong> file");
			move_uploaded_file($imagesTmp[$j], $filepathextend[$j]);
		}
	}
    
	if($idxNewImage > $idxImage){
	    for($j=$idxImage; $j < $idxNewImage; $j++){
	        move_uploaded_file($imagesTmp[$j], $filepathextend[$j]);
	    }
	}
	
	
	if($idxNewImage < $idxImage){
	    for($j=$idxImage; $j > $idxNewImage; $j--){
	        $path = "images/".$type."/".$_POST['oldidImage-'.($j-1)];
			unlink($path) or die("Failed to <strong class='highlight'>delete</strong> file");
	    }
	}

	if($result == true):
			headTo("../index.php?type=".$type);
	endif;
	    
?>