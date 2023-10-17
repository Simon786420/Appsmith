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
            $password = md5($password);
            echo signup($name, $username,$mobile,$email,$password,$conn);
        } elseif ($action === 'login') {
            $uname = $_POST['username'];
            $pass = $_POST['password'];
            $pass = md5($pass);
            echo login($uname, $pass, $conn);
        }
    }
}
function signup($name, $username,$mobile,$email,$password,$conn)
{  
    $sql = "INSERT INTO users (Name,UserName, Mobile, Email,Password ) VALUES ('$name','$username', '$mobile','$email','$password')";
    if (mysqli_query($conn, $sql)){
        echo "Registered successfully";
        mysqli_close($conn);
    }else{
        echo mysqli_error($conn);
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
