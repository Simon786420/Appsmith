<?php 
    $productName = $_GET['product'];
    $productPrice = $_GET['price'];
    include 'db_conn.php';
    session_start();
    if (isset($_SESSION['UserName'])) {
        $sql = "INSERT INTO cartproduct (ProductName, UserName, Price) VALUES (?, ?, ?)";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("sss", $productName,$_SESSION['UserName'],$productPrice,);
          if($stmt->execute()){
            echo 'Product Added successfully';
            header("Location: home.php");
          }
          $stmt->close();
          $conn->close();
    }else{
        header("Location: index.php");
    }
