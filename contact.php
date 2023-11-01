<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Passion Beaats-Connects with music</title>
  <link rel="stylesheet" href="contact.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <?php include 'navBar.php'; ?>
  <div class="container my-4">
    <h2>Contact Us</h2>
    
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Select your Query</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Product</option>
          <option>Discounts</option>
          <option>Warranty and Return Policy</option>
          <option>Others</option>
        </select>
      </div>


      <div class="form-group row">
        <div class="col-sm-2">Are you a Distributor?</div>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
              Yes
            </label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-2">Are you a Teacher?</div>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck2">
            <label class="form-check-label" for="gridCheck2">
              Yes
            </label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-2">Are you a student?</div>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck3">
            <label class="form-check-label" for="gridCheck3">
              Yes
            </label>
          </div>
        </div>
      </div>



      <div class="form-group">
        <label for="exampleFormControlTextarea1">Tell us about yourself</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea2">Elaborate Your Concern</label>
        <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
      </div>
      <div>
      <button class="centered-button">Submit</button></div>
    </form>
    <section id="contact">
      <div class="container1">
        <div class="section-header">
          <h3 class="section-title">Contact Us</h3>
          <span class="section-divider"></span>
        </div>
        <br><br>
        <div class="row wow fadeInUp">

          <div class="col-lg-9 col-md-9">
            <div class="contact-about">
              <img src="images/logo223.jpeg" class="footer-logo">
              <br><br>
              <h4 style="color: #262626"> Passion Beats</h4>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-3">
            <div class="info">
              <br><br>
              <div>
                <strong><i class="ion-ios-email-outline"></i></strong>
                <p>simon43@gmail.com</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>555 987-4567</p>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- #contact -->

  </div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>