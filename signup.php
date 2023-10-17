<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <form id="SignupForm">
    <h2>Sign Up</h2>
    <label>Name:</label>
    <input type="text" id="name" name="name"><br>
    <label>Username:</label>
    <input type="text" name="username" id="username"><br>

    <label>Mobile:</label>
    <input type="tel" name="mobile" required pattern="[0-9]{10}" id="mobile"><br>

    <label>Email:</label>
    <input type="email" name="email" id="email"><br>

    <label>Password:</label>
    <input type="password" name="password" minimum length="8" id="password"><br>

    <label>Confirm Password:</label>
    <input type="password" name="confirmPassword" id="confPass"><br>

    <input type="button" value="Sign Up" id="SubmitBtn">
    <a href="index.php" class="ca">Go back to Login</a>
  </form>
  <script>
    $(document).ready(function() {
      $("#SubmitBtn").click(function(event) {
        var name = $("#name").val();
        var username = $("#username").val();
        var mobile = $("#mobile").val();
        var email = $("#email").val();
        var password = $("#password").val();
        $.ajax({
          type: "POST",
          url: 'Logic.php',
          data: {
            action: "signup",
            name: name,
            username: username,
            mobile: mobile,
            email: email,
            password: password
          },
          success: function(response) {
            if (response == "Registered successfully") {
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
            }else{

            }
          }
        });
      });
    });
  </script>
</body>

</html>