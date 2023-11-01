<?php
include 'db_conn.php';
session_start();

if (isset($_SESSION['UserName']) && isset($_SESSION['Name'])) {
?>

  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Passion Beaats-Connects with music</title>
    <link rel="icon" href="images/logo223.jpeg" type="image/gif" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4a3b1f73a2.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/logo223.jpeg" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">
                <h4>Home</h4>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">
                <h4>About Us</h4>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="courses.php">
                <h4>Courses</h4>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="repair.php">
                <h4>Repair</h4>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">
                <h4>Contact us</h4>
              </a>
            </li>
          </ul>
          <?php
          $currentPage = basename($_SERVER['PHP_SELF']);
          $usernameToFind = $_SESSION['UserName'];
          $sql = "SELECT COUNT(*) as count FROM cartproduct WHERE username = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("s", $usernameToFind);
          $stmt->execute();
          $result = $stmt->get_result();
          $row = $result->fetch_assoc();
          $rowCount = $row['count'];
          $stmt->close();
          $conn->close();
          if ($currentPage == 'home.php') {
            echo '
            <div class="d-flex" role="search">
            <div style = "color:white; font-size:2rem">'
              . $rowCount .
              '</div>
            <i class="fa-solid fa-cart-shopping m-2 fs-2" id="cartIconNav" style="color: #ffffff;cursor: pointer;"></i>
            <input class="form-control me-2" type="search" placeholder="Search for instruments" id="searchField" aria-label="Search">
            <button class="btn btn-outline-success" onclick="searchInstruments()" type="submit">Search</button>
            </div>';
          }
          ?>
        </div>
        <div class="mx-2">
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal"><?php echo $_SESSION['UserName']; ?></button>
          <a href="logout.php">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalRegisterForm">Logout</button>
          </a>
        </div>
      </div>

    </nav>

  </body>

  </html>
<?php
} else {
  header("Location: index.php");
  exit();
}
?>