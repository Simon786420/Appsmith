<?php
$productName = $_GET['product'];
$productPrice = $_GET['price'];
$Action = $_GET['Action'];
include 'db_conn.php';
session_start();
if (isset($_SESSION['UserName'])) {
  if ($Action != 'del') {
    $sql = "INSERT INTO cartproduct (ProductName, UserName, Price) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $productName, $_SESSION['UserName'], $productPrice,);
    if ($stmt->execute()) {
      echo 'Product Added successfully';
      header("Location: home.php");
    }
    $stmt->close();
    $conn->close();
  } else {
    $sql = "DELETE FROM cartproduct WHERE ProductName = ? AND UserName = ? AND Price = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $productName, $_SESSION['UserName'], $productPrice,);
    if ($stmt->execute()) {
      echo 'Product Deleted successfully';
      header("Location: home.php");
    }
    $stmt->close();
    $conn->close();
  }
} else {
  header("Location: index.php");
}
