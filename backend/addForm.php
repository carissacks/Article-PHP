<?php
	include '../include/header.php';
	include '../include/db_connection.php';

	date_default_timezone_set("Asia/Jakarta");
	
	if(isset($_POST['failed']))
	{
		echo "<script> alert('Insert photos failed') </script>";
	}

	if(isset($_POST['type'])):
        $type = $db->real_escape_string($_POST['type']);
    else:
        $type= 'featured';
    endif;
?>
<script>
	var idxImage = 1;
	var idxContent = 1;
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
			document.getElementById('newImg').innerHTML += 
			"<div id='img-"+idxImage+"'class='form-group'> <label for='idImg-"+idxImage+"'>Image-"+idxImage+"</label>"+
                "<input type='file' class='input form-control' name='idImage-"+idxImage+"' accept='.jpg, .jpeg, .png' required>"+
            "</div>";
            idxImage+=1;
		}
		else{
			alert("Image maximum capacity per article is 5");
		}
	}

	function addContent(){
		if(idxContent <= 4){
			document.getElementById('newContent').innerHTML += 
			"<div id='content-"+idxContent+"'class='form-group'> <label for='idContent-"+idxContent+"'>Content-"+idxContent+"</label>"+
                "<input type='text' class='input form-control' name='idContent-"+idxContent+"' required placeholder='Insert Content-"+idxContent+"'>"+
            "</div>";
            idxContent+=1;
		}
		else{
			alert("Content maximum capacity per article is 5");
		}
	}

	function sendIndex(){
		document.getElementById('sendIndex').innerHTML +=
		"<input type='text' name='idxImage' value='"+idxImage+"' hidden>"+
		"<input type='text' name='idxContent' value='"+idxContent+"' hidden>";
	}
</script>
<body>
	<?php 
		include '../include/databaseTable.php'; 
		$query = "SELECT * FROM $tabelDatabase";
		$result = $db->query($query);

		$count = mysqli_num_rows($result);
		$count--;
		$query_last_item = "SELECT * FROM $tabelDatabase LIMIT 1 OFFSET $count";    // query data terakhir di tabel -> dapet id data terakhir
		$result_last_item = $db->query($query_last_item);

		if($result_last_item)
		{
			while($row = $result_last_item->fetch_assoc()){
				$id = $row['id'];
			}
			$id++;
		}
		else
		{
			$id = strtoupper(substr($type, 0, 2)) . "01";
		}
	?>
	<header>
		<nav class="navbar navbar-default">
			<div style="display: flex; justify-content: space-between; width: 80%">
				<div class="navbar-header">
					<h4 style="color: grey"> Adding New Post to <?php echo "<span class='title'>".ucfirst($type)."</span>"?></h4>
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
		<form id="formAdd" class="form" action="./cms/addContent.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="id">ID</label>
                <input type="text" class="input form-control" name="id" disabled value="<?= $id ?>">
			</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="input form-control" name="title" required placeholder="Insert Title">
			</div>
                <input type="date" class="input form-control" name="date" value="<?=date("Y-m-d")?>" hidden>
			<div class="form-group">
				<label for="publisher">Publisher</label>
				<input type="text" class="input form-control" name="publisher" required placeholder="Insert Publisher">
            </div>
            <div class="form-group">
				<label for="cover">Cover Image</label>
                <input type="file" class="input form-control" name="coverimg" required placeholder="Insert Cover Image"  accept='.jpg, .jpeg, .png'>
			</div>
            <div class="form-group">
				<label for="content">Content</label>
                <input type="text" class="input form-control" name="content" required placeholder="Insert Content">
			</div>
			<div id="newImg">

			</div>
			<div id="newContent">

			</div>
			<input type="text" class="input form-control hidden" name="type" required value="<?php echo $_POST['type']; ?>">
			<input type="text" class="input form-control" name="id" hidden value="<?= $id ?>">
			<div id="sendIndex">

			</div>
			<button type="submit" class="btn btn-primary" name="submit" onclick="sendIndex()">Submit</button>
			<button class="btn btn-secondary"><a href="index.php?type=<?=$type?>" style="color: white">Cancel</a></button>
		</form>
	</div>
</body>
</html>