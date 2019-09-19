<!DOCTYPE html>
<html>

<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title></title>

	<script>
		function showModal() {
			$('#myModal').modal();
		}
	</script>
</head>

<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">CMS</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li onclick="showModal()" class="navbar-brand" id="mouse"><span
						class="glyphicon glyphicon-log-in"></span> Login</li>
			</ul>
		</div>
	</nav>
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<p>Some text in the modal.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="grid">
			Featured
		</div>
		<div class="grid">
			Events
		</div>
		<div class="grid">
			News
		</div>
		<div class="grid">
			Articles
		</div>
		<div class="grid">
			Photos
		</div>
		<div class="grid">
			Accounting Update
		</div>
		<div class="grid">
			Research
		</div>
		<div class="grid">
			Book Review
		</div>
	</div>
</body>

</html>