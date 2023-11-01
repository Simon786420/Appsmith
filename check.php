<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Passion Beaats-Connects with music</title>
  <link rel="stylesheet" href="checkout.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    .Quantity button {
      width: 50px;
      height: 50px;
      background-color: white;
      border-radius: 5px;
    }

    .Quantity input {
      text-align: center;
      font-size: 1rem;
      font-weight: 700;
      width: 100px;
      border: 2px solid green;
    }
  </style>
</head>

<body>
  <?php include 'navBar.php';
  $productName = $_GET['product'];
  $productPrice = $_GET['price'];
  ?> 
   <div class="row g-5">
  <div class="col-md-5 col-lg-4 order-md-last">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="text-primary">Your Order</span>
    </h4>
    <ul class="list-group mb-3">
      <li class="list-group-item d-flex justify-content-between lh-sm">
        <h6 class="my-0">Product name</h6>
        <h6><?php echo $productName ?></h6>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span>Total (Rs)</span>
        <h6 id="totQuat"><?php echo $productPrice ?></h6>
      </li>
      <li class="list-group-item d-flex justify-content-between Quantity">
        <h6>Quantity</h6>
        <button id="QuatPlus"><i class="fa-solid fa-plus"></i></button>
        <input id="Quat" type="text" placeholder="1" disabled value="1">
        <button id="QuatMin"><i class="fa-solid fa-minus"></i></button>
      </li>
    </ul>


  </div>

      <div class="row g-3">
        <div class="col-sm-6">
          <label for="firstName" class="form-label">First name</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="fname">
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <input type="hidden" name="total" id="total_2" name="total_price">
        <div class="col-sm-6">
          <label for="lastName" class="form-label">Last name</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" name="lname">
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>


        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="col-12">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" name="address">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="col-12">
          <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="col-md-5">
          <label for="country" class="form-label">Country</label>
          <select class="form-select" id="country" required="">
            <option value="">Choose...</option>
            <option>India</option>
            <option>USA</option>
            <option>United Kingdom</option>
            <option>France</option>
            <option>Russia</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid country.
          </div>
        </div>

        <div class="col-md-4">
          <label for="state" class="form-label">State</label>
          <select class="form-select" id="state" required="">
            <option value="">Choose...</option>
            <option>Maharshtra</option>
            <option>California</option>
            <option>London</option>
            <option>Moscow</option>
            <option>Paris</option>
          </select>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>

        <div class="col-md-3">
          <label for="zip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="zip" placeholder="" required="">
          <div class="invalid-feedback">
            Zip code required.
          </div>
        </div>

        <hr class="my-4">

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="same-address">
          <label class="form-check-label" for="same-address">Shipping address is the same as my billing
            address</label>
        </div>


        <a href="	https://rzp.io/i/ErjzGYOjp">
          <input type="submit" value="Continue to checkout" class="centered-button">
        </a>
      </div>
    </div>
    </form>

    <!-- <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4"> -->

    <!-- <a href="orderPlaced.html">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
          </a>
        </form> -->
  </div>
  </div> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script>
    // import {price} from './home.php';
    // console.log(price);
    // window.onload = console.log(localStorage.getItem("storageName"))
    document.getElementById("name_1").innerHTML = localStorage.getItem("fn");
    document.getElementById("total_1").innerHTML = localStorage.getItem("fn1");
    document.getElementById("total_2").value = localStorage.getItem("fn1");
    // document.getElementById("total_1").innerHTML = localStorage.getItem("fn");
  </script>
</body>

</html>