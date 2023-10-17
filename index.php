<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="images/logo223.jpeg" type="image/gif" sizes="16x16">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
	</link>
</head>

<body>
	<form id="loginForm">
		<h2>LOGIN</h2>
		<label>User Name</label>
		<input type="text" name="uname" id="uname" placeholder="User Name"><br>

		<label>Password</label>
		<input type="password" name="password" id="password" placeholder="Password"><br>

		<button type="button" id="loginBtn">Login</button>
		<a href="signup.php" class="ca">Create an account</a>
	</form>
	<script>
		$(document).ready(function() {
			$("#loginBtn").click(function(event) {
				var username = $("#uname").val();
				var password = $("#password").val();
				$.ajax({
					type: "POST",
					url: 'Logic.php',
					data: {
						action: "login",
						username: username,
						password: password
					},
					success: function(response) {
						if (response == "Login Successful") {
							swal({
								title: "Success",
								text: response,
								type: "success",
								showLoaderOnConfirm: true,
							}).then((result) => {
								if (result.value) {
									window.location.href = 'home.php';
								}
							});
						} else {
							swal({
								title: "Error",
								text: response,
								type: "error",
								showLoaderOnConfirm: true,
							}).then((result) => {
								if (result.value) {
									window.location.href = 'index.php';
								}
							});
						}
					}
				})
			});
		});
	</script>
</body>

</html>