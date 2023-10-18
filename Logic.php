<?php
session_start();
include('db_conn.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action === 'signup') {
            $name = $_POST["name"];
            $username = $_POST["username"];
            $mobile = $_POST["mobile"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confPass = $_POST["confPass"];
            $password = md5($password);
            $confPass = md5($confPass);
            echo signup($name, $username,$mobile,$email,$password,$conn,$confPass);
        } elseif ($action === 'login') {
            $uname = $_POST['username'];
            $pass = $_POST['password'];
            $pass = md5($pass);
            echo login($uname, $pass, $conn);
        }
    }
}
function signup($name, $username,$mobile,$email,$password,$conn,$confPass)
{  
    if(empty($name)){
        echo "Name cannot be empty";
    }elseif(empty($username) || strlen($username) < 8){
        echo "UserName should be of length 8";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Please enter valid EmailID";
    }elseif(!preg_match('/^\d{10}$/', $mobile)) {
        echo "Mobile Should be of 10 digits.";
    }elseif($password !== $confPass){
        echo "Passwords do not match";
    }
    else{
        $sql = "INSERT INTO users (Name,UserName, Mobile, Email,Password ) VALUES ('$name','$username', '$mobile','$email','$password')";
        if (mysqli_query($conn, $sql)){
        echo "Registered successfully";
        mysqli_close($conn);
        }else{
        echo mysqli_error($conn);
        }
    }
    
}

function login($uname, $pass, $conn)
{
    $sql = "SELECT * FROM users WHERE UserName='$uname' AND Password='$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['UserName'] === $uname && $row['Password'] === $pass) {
            $_SESSION['UserName'] = $uname;
            $_SESSION['Name'] = $row['Name'];
            return "Login Successful";
        } else {
            return "Incorrect credentials";
        }
    } else {
        return "Incorrect credentials";
    }
}
