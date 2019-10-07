<?php include '../include/header.php' ?>
<?php 
	if(isset($_GET['failed']))
	{
		echo "<script> alert('Insert photos failed') </script>";
	}
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
	<header>
		<nav class="navbar navbar-default">
			<div style="display: flex; justify-content: space-between; width: 80%">
				<div class="navbar-header">
					<h4 style="color: grey"> Adding New Post to <?php echo "<span class='title'>".$_POST['type']."</span>"?></h4>
				</div>
				<ul class="navbar-nav">
					<li class="navbar-right active"><a href="#">Student</a></li> 
				</ul>
			</div>
		</nav>
	</header>
    <div class="container">
		<form id="formAdd" class="form" action="./cms/addContent.php" method="POST" enctype="multipart/form-data">
			<div style="float:right">
				<button class="btn btn-primary" onclick="addImage()">Add Image</button>
				<button class="btn btn-primary" onclick="addContent()">Add Content</button>
				<button class="btn btn-primary" onclick="deleteImage()">Delete Image</button>
				<button class="btn btn-primary" onclick="deleteContent()">Delete Content</button>
			</div>
			<br>
			<br>
			<br>
			<div class="form-group">
				<label for="id">ID</label>
                <input type="text" class="input form-control" name="id" required placeholder="Insert ID">
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
			<div id="sendIndex">

			</div>
			<button type="submit" class="btn btn-primary" name="submit" onclick="sendIndex()">Submit</button>
			<button class="btn btn-secondary"><a href="home.php" style="color: white">Cancel</a></button>
		</form>
	</div>
</body>
</html>