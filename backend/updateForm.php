<?php 
	include '../include/header.php';
	include '../include/db_connection.php';
?>
<?php
		if(isset($_POST['type'], $_POST['id'])){	
			// $type = $db->real_escape_string($_POST['type']);
			$type = $_POST['type'];
			include '../include/databaseTable.php';

            // $id = $db->real_escape_string($_POST['id']);
			$id = $_POST['id'];
			
            $query = "SELECT * FROM $tabelDatabase WHERE id = '$id'";
			$result = $db->query($query);

			$images = array();
            $contents = array();
            while($row = $result->fetch_assoc()) {
                $title = $row['title'];
                $date = $row['date'];
                $publisher = $row['publisher'];
                $coverimg = $row['cover_img'];
                $content = $row['content'];

                for($i = 2; $i <= 5; $i++){
                	if(empty($row['image_'.$i])) break;
                	$images[$i-1] = $row['image_'.$i];
                }

                for($i = 2; $i <= 5; $i++){
                	if(empty($row['content_'.$i])) break;
                	$contents[$i-1] = $row['content_'.$i];
                }
            }

			mysqli_free_result($result);
            mysqli_close($db);
		}
		else{
			header("Location : ".headerAddress()."interface/pagenotfound.php");
		}
	?>
	<script>
		var idxImage = <?php echo (sizeof($images)+1) ?>;
		var idxContent = <?php echo (sizeof($contents)+1) ?>;
		
		function onDocumentFinish(){	
			if(1 <= <?php echo sizeof($images) ?>){
				document.getElementById('newImg').innerHTML +=
				"<div id='img-"+(1)+"'class='form-group'> <label for='idImg-"+(1)+"'>Image-"+(1)+"</label>"+
					"<br><div for='oldIdImg-"+(1)+"'> Before Update: <strong>"+"<?php if(sizeof($images)>0) echo $images[1]?>"+"</strong></div>"+
					"<input type='text' class='input form-control' name='oldidImage-"+(1)+"' value='<?php if(sizeof($images)>0) echo $images[1] ?>' hidden>"+
	                "<input type='file' class='input form-control' name='idImage-"+(1)+"'>"+
				"</div>";
			}
			if(2 <= <?php echo sizeof($images) ?>){
				document.getElementById('newImg').innerHTML +=
				"<div id='img-"+(2)+"'class='form-group'> <label for='idImg-"+(2)+"'>Image-"+(2)+"</label>"+
					"<br><div for='oldIdImg-"+(2)+"'> Before Update: <strong>"+"<?php  if(sizeof($images)>1) echo $images[2]?>"+"</strong></div>"+
					"<input type='text' class='input form-control' name='oldidImage-"+(2)+"' value='<?php if(sizeof($images)>1) echo $images[2] ?>' hidden>"+
	                "<input type='file' class='input form-control' name='idImage-"+(2)+"'>"+
				"</div>";
			}
			if(3 <= <?php echo sizeof($images) ?>){
				document.getElementById('newImg').innerHTML +=
				"<div id='img-"+(3)+"'class='form-group'> <label for='idImg-"+(3)+"'>Image-"+(3)+"</label>"+
					"<br><div for='oldIdImg-"+(3)+"'> Before Update: <strong>"+"<?php if(sizeof($images)>2) echo $images[3]?>"+"</strong></div>"+
					"<input type='text' class='input form-control' name='oldidImage-"+(3)+"' value='<?php if(sizeof($images)>2)echo  $images[3] ?>' hidden>"+
	                "<input type='file' class='input form-control' name='idImage-"+(3)+"'>"+
				"</div>";
			}
			if(4 <= <?php echo sizeof($images) ?>){
				document.getElementById('newImg').innerHTML +=
				"<div id='img-"+(4)+"'class='form-group'> <label for='idImg-"+(4)+"'>Image-"+(4)+"</label>"+
					"<br><div for='oldIdImg-"+(4)+"'> Before Update: <strong>"+"<?php if(sizeof($images)>3) echo $images[4]?>"+"</strong></div>"+
					"<input type='text' class='input form-control' name='oldidImage-"+(4)+"' value='<?php if(sizeof($images)>3)echo  $images[4] ?>' hidden>"+
	                "<input type='file' class='input form-control' name='idImage-"+(4)+"'>"+
				"</div>";
			}

			if(1 <= <?php echo sizeof($contents) ?>){
				document.getElementById('newContent').innerHTML +=
				"<div id='content-"+(1)+"'class='form-group'> <label for='idContent-"+(1)+"'>Content-"+(1)+"</label>"+
					"<br><div for='oldIdContent-"+(1)+"'>"+
	                "<textarea type='text' rows='5' form='formUpdate' class='input form-control' name='idContent-"+(1)+"'><?php if(sizeof($contents)>0) echo $contents[1]?></textarea>"+
				"</div>";
			}
			if(2 <= <?php echo sizeof($contents) ?>){
				document.getElementById('newContent').innerHTML +=
				"<div id='content-"+(2)+"'class='form-group'> <label for='idContent-"+(2)+"'>Content-"+(2)+"</label>"+
					"<br><div for='oldIdContent-"+(2)+"'>"+
	                "<textarea type='text' rows='5' form='formUpdate' class='input form-control' name='idContent-"+(2)+"'><?php if(sizeof($contents)>1) echo $contents[2]?></textarea>"+
				"</div>";
			}
			if(3 <= <?php echo sizeof($contents) ?>){
				document.getElementById('newContent').innerHTML +=
				"<div id='content-"+(3)+"'class='form-group'> <label for='idContent-"+(3)+"'>Content-"+(3)+"</label>"+
					"<br><div for='oldIdContent-"+(3)+"'>"+
	                "<textarea type='text' rows='5' form='formUpdate' class='input form-control' name='idContent-"+(3)+"'><?php if(sizeof($contents)>2) echo $contents[3]?></textarea>"+
				"</div>";
			}
			if(4 <= <?php echo sizeof($contents) ?>){
				document.getElementById('newContent').innerHTML +=
				"<div id='content-"+(4)+"'class='form-group'> <label for='idContent-"+(4)+"'>Content-"+(4)+"</label>"+
					"<br><div for='oldIdContent-"+(4)+"'>"+
	                "<textarea type='text' rows='5' form='formUpdate' class='input form-control' name='idContent-"+(4)+"'><?php if(sizeof($contents)>3) echo $contents[4]?></textarea>"+
				"</div>";
			}
		}

	function deleteImage(){
		if(idxImage > 1){
			document.getElementById('img-'+(--idxImage)).remove();
		}
	}

	function deleteContent(){
		if(idxContent > 1){
			document.getElementById('content-'+(--idxContent)).remove();
		}
	}

	function addImage(){
		if(idxImage <= 4){
		    var div= document.createElement('div');
		    div.id= 'img-'+idxImage;
		    div.className= 'form-group';
		    div.innerHTML= "<label for='idImg-"+idxImage+"'>Image-"+idxImage+"</label>"+
                "<input type='file' class='input form-control' name='idImage-"+idxImage+"' accept='.jpg, .jpeg, .png' required>";
			document.getElementById('newImg').append(div);
            idxImage+=1;
		}
		else{
			alert("Image maximum capacity per article is 5");
		}
	}

	function addContent(){
		if(idxContent <= 4){
		    var div= document.createElement('div');
		    div.id= 'content-'+idxContent;
		    div.className= 'form-group';
			div.innerHTML="<label for='idContent-"+idxContent+"'>Content-"+idxContent+"</label>"+
                "<input type='text' class='input form-control' name='idContent-"+idxContent+"' required placeholder='Insert Content-"+idxContent+"'>";
            document.getElementById('newContent').append(div);
            idxContent+=1;
		}
		else{
			alert("Content maximum capacity per article is 5");
		}
	}

	function sendIndex(){
		document.getElementById('sendIndex').innerHTML +=
		"<input type='text' name='idxNewImage' value='"+idxImage+"' hidden>"+
		"<input type='text' name='idxNewContent' value='"+idxContent+"' hidden>"+
		"<input type='text' name='idxImage' value='"+<?=(sizeof($images)+1)?>+"' hidden>"+
		"<input type='text' name='idxContent' value='"+<?=(sizeof($contents)+1)?>+"' hidden>";
		if(idxImage < <?=(sizeof($images)+1)?>){
		    if(1 <= <?php echo sizeof($images) ?>){
				document.getElementById('sendIndex').innerHTML +=
				"<input type='text' class='input form-control' name='oldidImage-"+(1)+"' value='<?php if(sizeof($images)>0) echo $images[1] ?>' hidden>";
			}
			if(2 <= <?php echo sizeof($images) ?>){
				document.getElementById('sendIndex').innerHTML +=
				"<input type='text' class='input form-control' name='oldidImage-"+(2)+"' value='<?php if(sizeof($images)>1) echo $images[2] ?>' hidden>";
			}
			if(3 <= <?php echo sizeof($images) ?>){
				document.getElementById('sendIndex').innerHTML +=
				"<input type='text' class='input form-control' name='oldidImage-"+(3)+"' value='<?php if(sizeof($images)>2)echo  $images[3] ?>' hidden>";
			}
			if(4 <= <?php echo sizeof($images) ?>){
				document.getElementById('sendIndex').innerHTML +=
				"<input type='text' class='input form-control' name='oldidImage-"+(4)+"' value='<?php if(sizeof($images)>3)echo  $images[4] ?>' hidden>";
			}
		}
	}

	</script>

<body onload="onDocumentFinish()">
	<header>
		<nav class="navbar navbar-default">
			<div style="display: flex; justify-content: space-between; width: 80%">
				<div class="navbar-header">
					<h4 style="color: grey"> Updating Post in <?php echo "<span class='title'>".ucfirst($type)."</span>"?></h4>
				</div>
			</div>
		</nav>
	</header>

    <div class="container">
		<div class="mb-5 text-right">
			<button class="btn btn-primary" onclick="addImage()">Add Image</button>
			<button class="btn btn-primary" onclick="addContent()">Add Content</button>
			<button class="btn btn-primary" onclick="deleteImage()">Delete Image</button>
			<button class="btn btn-primary" onclick="deleteContent()">Delete Content</button>
		</div>

		<form class="form" id="formUpdate" action="./cms/updateContent.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="id">ID</label>
                <input type="text" class="input form-control" name="id" value="<?php echo $id?>" disabled placeholder="Insert ID">
			</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="input form-control" name="title" value="<?php echo $title?>" required placeholder="Insert Title">
			</div>
			<div class="form-group">
				<label for="publisher">Publisher</label>
				<input type="text" class="input form-control" name="publisher" value="<?php echo $publisher?>" required placeholder="Insert Publisher">
            </div>
            <div class="form-group">
				<label for="cover">Cover Image</label>
				<div for="oldCoverImage">Before Update: <strong><?php echo $coverimg ?></strong></div>
				<input type="text" class="input form-control" name="oldcoverimg" value="<?php echo $coverimg ?>" hidden>
                <input type="file" class="input form-control" name="coverimg" value="<?php echo $coverimg?>" placeholder="Insert Cover Image">
			</div>
            <div class="form-group">
				<label for="content">Content</label>
				<textarea class='input form-control' rows='7' form='formUpdate' name="content" required placeholder="Insert Content"><?= $content?></textarea>
			</div>
			<div id="newImg">

			</div>
			<div id="newContent">

			</div>
			<div id="sendIndex">

			</div>
			<input type="text" class="input form-control hidden" name="type" required value="<?php echo $type?>">
			<input type="text" class="input form-control" name="id" value="<?php echo $id?>" hidden>
			<input type="date" class="input form-control" name="date" value="<?=date("Y-m-d")?>" hidden>
			<button type="submit" class="btn btn-primary" onclick="sendIndex()">Submit</button>
			<button class="btn btn-secondary"><a href="<?=headerAddress()?>/backend/index.php" style="color: white">Cancel</a></button>
		</form>
	</div>
</body>
</html>