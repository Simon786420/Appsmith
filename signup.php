<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h2>Sign Up</h2>
  
  <?php
  include('db_conn.php');
  // Define variables and initialize with empty values
  $name = $username = $email = $password = $confirmPassword = "";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    
    // Perform basic validation
    if (empty($name) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
      echo "All fields are required.";
    } elseif ($password != $confirmPassword) {
      echo "Passwords do not match.";
    } else {
      $hashed_password = md5($password);
      $sql = "INSERT INTO users (Name,UserName, Mobile, Email,Password ) VALUES ('$name','$username', '$mobile','$email','$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        echo "Signup successful!"."<br/>"."Redirecting to login page";
        sleep(3);
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    }
  }
  ?>
  
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label>Name:</label>
    <input type="text" name="name"><br>
    
    <label>Username:</label>
    <input type="text" name="username"><br>

    <label>Mobile:</label>
    <input type="tel" name="mobile" required pattern="[0-9]{10}"><br>
    
    <label>Email:</label>
    <input type="email" name="email"><br>
    
    <label>Password:</label>
    <input type="password" name="password" minimum length="8"><br>
    
    <label>Confirm Password:</label>
    <input type="password" name="confirmPassword"><br>
    
    <input type="submit" value="Sign Up">

  </form>
 
</body>
</html>
