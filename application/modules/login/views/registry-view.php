<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>		
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-push-4">
					<form action="http://localhost/git/login/registry/insert" method="POST" role="form">
						<legend>Đăng ký</legend>
						<div class="form-group">							
							<input type="text" class="form-control" id="" name="username" placeholder="Nhập tên"><br>
							<input type="password" class="form-control" id="" name="password" placeholder="Nhập mật khẩu"><br>							
							<input type="email" class="form-control" id="" name="email" placeholder="Nhập mật email"><br>							
						</div>
						<button type="submit" class="btn btn-primary">Đăng ký</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>