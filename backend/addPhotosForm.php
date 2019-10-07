<?php include '../include/header.php' ?>
<script>
	var idxContent = 1;

	function deleteContent(){
		if(idxContent > 1){
			document.getElementById('content-'+(--idxContent)).remove();
		}
	}

	function addContent(){
		if(idxContent <= 4){
			document.getElementById('newContent').innerHTML += 
			"<div id='content-"+idxContent+"'>"+
				"<div id='img-"+idxContent+"'class='form-group'> <label for='idImg-"+idxContent+"'>Image-"+idxContent+"</label>"+
	                "<input type='file' class='input form-control' name='idImage-"+idxContent+"' required accept='.jpg, .jpeg, .png'"+
	            "</div>"+
	            "<div id='desc-"+idxContent+"'class='form-group'> <label for='idDesc-"+idxContent+"'>Desc-"+idxContent+"</label>"+
	                "<input type='text' class='input form-control' name='idDesc-"+idxContent+"' required placeholder='Insert Desc-"+idxContent+"'>"+
	            "</div>"+
	        "</div>";
            idxContent+=1;
		}
		else{
			alert("Image maximum capacity per article is 5");
		}
	}

	function sendIndex(){
		document.getElementById('sendIndex').innerHTML +=
		"<input type='text' name='idxContent' value='"+idxContent+"' hidden>";
	}
</script>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div style="display: flex; justify-content: space-between; width: 80%">
				<div class="navbar-header">
					<h4 style="color: grey"> Adding New Post to <?php echo "<span class='title'>".$_POST['type']."</span>" ?> </h4>
				</div>
				<ul class="navbar-nav">
					<li class="navbar-right active"><a href="#">Student</a></li> 
				</ul>
			</div>
		</nav>
	</header>
    <div class="container">
		<form class="form" action="./cms/addPhotosContent.php" method="POST" enctype="multipart/form-data">
			<div style="float:right">
				<button class="btn btn-primary" onclick="addContent()">Add Content</button>
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
				<label for="content">Description</label>
                <input type="text" class="input form-control" name="description" required placeholder="Insert Description">
			</div>
			<div id="newContent">

			</div>
			<input type="text" class="input form-control hidden" name="type" required value="<?php echo $_POST['type'] ?>">
			<div id="sendIndex">

			</div>
			<button type="submit" class="btn btn-primary" name="submit" onclick="sendIndex()">Submit</button>
			<button class="btn btn-secondary"><a href="index.php" style="color: white">Cancel</a></button>
		</form>
	</div>
</body>
</html>