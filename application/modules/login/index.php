<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php 
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	if (isset($_POST["submit"])) {
		if (isset($_POST["ten"]) && isset($_POST["matkhau"])) {
			$ten = $_POST['ten'];
			$matkhau = $_POST['matkhau'];

			$connect_db = mysql_connect("localhost", "root", "");
			$select_db = mysql_select_db("hs", $connect_db);
			$set_lang = mysql_query("SET NAMES 'utf-8'");

			$sql = "SELECT * FROM user WHERE ten = '$ten' AND matkhau = '$matkhau' ";
			$query = mysql_query($sql);
			$num_row = mysql_num_rows($query);

			if ($num_row > 0) {
				$_SESSION['ten'] = $ten;
				$_SESSION['matkhau'] = $matkhau;
				//header("location: http://localhost/php/admin/admincp.php");
			}else{
				echo "<script>alert('Tài khoản không hợp lệ!')</script>";
			}
		}
	}

	if (!$_SESSION['ten'] && !$_SESSION['matkhau']) {
		?>
		<div class="container" >
			<div class="row">
				<div class="col-md-4 col-md-offset-4" style="margin-top:150px;">
					<form action="" method="POST" role="form">
						<legend>ĐĂNG NHẬP</legend>

						<div class="form-group">
							<label for="">Tài khoản</label>
							<input type="text" class="form-control" id="" name="ten">
						</div>
						<div class="form-group">
							<label for="">Mật khẩu</label>
							<input type="password" class="form-control" id="" name="matkhau">
						</div>

						<button type="submit" class="btn btn-primary" name="submit">Đăng nhập</button>
					</form>
				</div>
			</div>
		</div>

		<?php 
	}else{
		//header("location: http://localhost/php/admin/admincp.php");
	}
	?>
</body>
</html>