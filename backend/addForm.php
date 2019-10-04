<?php include '../include/header.php' ?>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div style="display: flex; justify-content: space-between; width: 80%">
				<div class="navbar-header">
					<h4 style="color: grey"> Adding New Post </h4>
				</div>
				<ul class="navbar-nav">
					<li class="navbar-right active"><a href="#">Student</a></li> 
				</ul>
			</div>
		</nav>
	</header>
	<?php
		if(isset($_POST['type'])){	
			// $category = $_POST['category'];
			$type = $_POST['type'];
			echo $type;
		}
	?>
    <div class="container">
		<form class="form" action="./cms/addContent.php" method="POST" enctype="multipart/form-data">
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
                <input type="file" class="input form-control" name="coverimg" required placeholder="Insert Cover Image">

			</div>
            <div class="form-group">
				<label for="content">Content</label>
                <input type="text" class="input form-control" name="content" required placeholder="Insert Content">
			</div>
			<input type="text" class="input form-control hidden" name="type" required value="<?php echo $type ?>">
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
			<button class="btn btn-secondary"><a href="index.php" style="color: white">Cancel</a></button>
		</form>
	</div>
</body>
</html>