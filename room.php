<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pahan Lanka</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/room.css">


  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/preloader.css">


  <!-- Fontawesome icon -->
  <script src="https://kit.fontawesome.com/72d6efc6c3.js" crossorigin="anonymous"></script>


</head>

<body>
  <div id="preloader" style="background:rgb(252, 252, 252) url(images/conactus\ background.png); background-repeat:no-repeat; background-size: cover; background-attachment: fixed;">
    <div class="image"> <img src="images/PAHAN LANKA logo.png" alt=""> </div>
    <div>
      <ul class="pre-loader">
        <li>L</li>
        <li>O</li>
        <li>A</li>
        <li>D</li>
        <li>I</li>
        <li>N</li>
        <li>G</li>
      </ul>
    </div>

  </div>

  <!-- header -->
  <header>

    <div class="navigator">
      <nav>
        <div class="logo">
          <a href="index.php">
            <img class="logo" src="images/PAHAN LANKA logo.png" alt="">
          </a>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="banquest.php">Banquets</a></li>
          <li><a class="active" href="#">Rooms</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>

    <div style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)),url(images/room/2.jpg);overflow: visible; background-position: 50% 100%; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;" class="contact-bg">
      <h3>Choose Your Comfort Room Right Now</h3>
      <h2>Rooms</h2>
      <div class="line">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <input class="dm-btn" type=button onClick="location.href='#aRooms'" value="MORE DETAILS"></input>
    </div>
  </header>
  <!-- end of header -->

  <section class="vistUS">
    <div class="vUS">
      <h3>Facilities</h3>
    </div>
    <div class="contact-info">
      <div>
        <span><i class="fas fa-bath"></i></span>
        <span>Attach Bathroom</span>
      </div>
      <div>
        <span><i class="fas fa-wifi"></i></span>
        <span>Free Wi-Fi</span>
      </div>
      <div>
        <span><i class="fas fa-utensils"></i></span>
        <span>Meals</span>
      </div>
      <div>
        <span><i class="fas fa-wind"></i></span>
        <span>Air Condition</span>
      </div>
    </div>
  </section>


  <div id="aRooms" class="section-seperator">
    <div class="divider"></div>
  </div>



  <section>
    <!-- single room -->
    <article class="room" style="background-image: url(images/conactus\ background.png) ; background-attachment: fixed; background-color: bisque;">
      <div class="room-image">
        <div class="card-wrapper">
          <div class="card">
            <!-- card left -->
            <div class="product-imgs">
              <div class="img-display">
                <div class="img-showcase1">
                  <img src="images/room/1.jpg" alt="">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="room-text">
        <h3>A/C Room</h3>
        <ul>
          <li>
            <i class="fas fa-solid fa-wifi"></i>
            Free wifi
          </li>
          <li>
            <i class="fa fa-mug-hot"></i>
            Tea & Coffee
          </li>
          <li>
            <i class="fas fa-solid fa-tv"></i>
            LED TV
          </li>
          <li>
            <i class="fa fa-fan"></i>
            Air Conditioner
          </li>
          <li>
            <i class="fas fa-solid fa-couch"></i>
            Seating Area
          </li>
          <li>
            <i class="fas fa-solid fa-clock"></i>
            24 Hour Room Service
          </li>
          <li>
            <i class="fa fa-bed"></i>
            Double Bed
          </li>
        </ul>
        <button type="button" class="btn" onclick="form1()">book now</button>
      </div>
    </article>

    <article class="room">
      <div class="room-image">
        <div class="card-wrapper">
          <div class="card">
            <!-- card left -->
            <div class="product-imgs">
              <div class="img-display">
                <div class="img-showcase2">
                  <img src="images/room/1.jpg" alt="">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="room-text">
        <h3>Non A/C Room</h3>
        <ul>
          <li>
            <i class="fas fa-solid fa-wifi"></i>
            Free wifi
          </li>
          <li>
            <i class="fa fa-mug-hot"></i>
            Tea & Coffee
          </li>
          <li>
            <i class="fas fa-solid fa-tv"></i>
            LED TV
          </li>
          <li>
            <i class="fas fa-solid fa-couch"></i>
            Seating Area
          </li>
          <li>
            <i class="fas fa-solid fa-clock"></i>
            24 Hour Room Service
          </li>
          <li>
            <i class="fa fa-bed"></i>
            Double Bed
          </li>
        </ul>
        <button type="button" class="btn" onclick="form1()">book now</button>
      </div>
    </article>

    <article class="room" style="background-image: url(images/conactus\ background.png) ; background-attachment: fixed; background-color: bisque;">
      <div class="room-image">
        <div class="card-wrapper">
          <div class="card">
            <!-- card left -->
            <div class="product-imgs">
              <div class="img-display">
                <div class="img-showcase3">
                  <img src="images/room/1.jpg" alt="">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="room-text">
        <h3>Delux Room</h3>
        <ul>
          <li>
            <i class="fas fa-solid fa-wifi"></i>
            Free wifi
          </li>
          <li>
            <i class="fa fa-mug-hot"></i>
            Tea & Coffee
          </li>
          <li>
            <i class="fas fa-solid fa-tv"></i>
            LED TV
          </li>
          <li>
            <i class="fa fa-fan"></i>
            Air Conditioner
          </li>
          <li>
            <i class="fas fa-solid fa-couch"></i>
            Seating Area
          </li>
          <li>
            <i class="fas fa-solid fa-clock"></i>
            24 Hour Room Service
          </li>
          <li>
            <i class="fa fa-bed"></i>
            King Size Bed
          </li>
        </ul>
        <button type="button" class="btn" onclick="form1()">book now</button>
      </div>
    </article>
    <article class="room">
      <div class="room-image">
        <div class="card-wrapper">
          <div class="card">
            <!-- card left -->
            <div class="product-imgs">
              <div class="img-display">
                <div class="img-showcase4
                        ">
                  <img src="images/room/1.jpg" alt="">

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="room-text">
        <h3>Family Room</h3>
        <ul>
          <li>
            <i class="fas fa-solid fa-wifi"></i>
            Free wifi
          </li>
          <li>
            <i class="fa fa-mug-hot"></i>
            Tea & Coffee
          </li>
          <li>
            <i class="fas fa-solid fa-tv"></i>
            LED TV
          </li>
          <li>
            <i class="fa fa-fan"></i>
            Air Conditioner
          </li>
          <li>
            <i class="fas fa-solid fa-couch"></i>
            Seating Area
          </li>
          <li>
            <i class="fas fa-solid fa-clock"></i>
            24 Hour Room Service
          </li>
          <li>
            <i class="fa fa-bed"></i>
            Double Bed
          </li>
        </ul>
        <button type="button" class="btn" onclick="form1()">book now</button>
      </div>
    </article>

    <section id="rForm">

      <div class="container-form" id="form-container">
        <div class="title">Room Reservation</div>
        <div class="content">
          <form method="POST" name="res-form" id="res-form">
            <div class="user-details">
              <div class="input-box">
                <span class="details">First Name</span>
                <input type="text" placeholder="Enter your first name" name="first" id="first" required>
              </div>
              <div class="input-box">
                <span class="details">Last Name</span>
                <input type="text" placeholder="Enter your last name" name="last" id="last" required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="email" placeholder="Enter your email" name="email" id="email">
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" placeholder="Enter your number" name="number" id="" number required>
              </div>
              <div class="input-box">
                <span class="details">Arrival Date</span>
                <input type="date" name="adate" id="adate" required>
              </div>
              <div class="input-box">
                <span class="details">Depature Date</span>
                <input type="date" name="ddate" id="ddate" required>
              </div>
            </div>
            <div class="input-box">
              <span class="details">Number of Rooms</span>
              <select class="rooms-num" name="noOfRooms">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>
            <div class="button">
              <button class="sub-btn" type="submit" name="submit1">Submit</button>
            </div>
            <div class="alert alert-danger" id="error" style="display:none;">
              <div class="thank-u" id="thank-u">
                <h2>Sorry</h2>
                <p>Your details not submitted. Try again</p>
              </div>
            </div>

            <div class="alert alert-success" id="success" style="display:none;">
              <div class="thank-u" id="thank-u">
                <h2>Thank You!</h2>
                <p>Your details has been successfully submitted. Our management will contact you shortly.</p>
              </div>
            </div>
          </form>


        </div>
      </div>
    </section>
  </section>


  <?php
  if (isset($_POST["submit1"])) {
    //get data from form
    $count = 0;
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $adate = $_POST['adate'];
    $ddate = $_POST['ddate'];
    $noOfRooms = $_POST['noOfRooms'];
    $to = "contactus@pahanlanka.com";
    $subject = "Mail From website";
    $txt = "First Name = " . $first . "\r\nLast Name = " . $last . "\r\nE-mail = " . $email . "\r\nMobile Number =" . $number . "\r\n Arrival-Date =" . $adate . "\r\n Departure Date =" . $ddate . "\r\n Rooms Count =" . $noOfRooms;
    $headers = "From: noreply@pahanlanka.com";
    if ($email != NULL) {
      $send = mail($to, $subject, $txt, $headers);
      $count = mysqli_num_rows($send);
      if ($count > 0) {
  ?>
        <script type="text/javascript">
          document.getElementById("preloader").style.display = "none";
          document.getElementById("form-container").style.display = "block";
          document.getElementById("success").style.display = "none";
          document.getElementById("error").style.display = "block";
        </script>
      <?php
      } else {
      ?>
        <script type="text/javascript">
          document.getElementById("preloader").style.display = "none";
          document.getElementById("form-container").style.display = "block";
          document.getElementById("error").style.display = "none";
          document.getElementById("success").style.display = "block";
          setTimeout(function() {
            window.location.href = "room.php";
          }, 3000);
        </script>
  <?php
      }
    }
  }
  ?>


  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>About us</h4>
          <p>We, Pahan Lanka Hotel, Filled with hospitality, warmth of the sunny climate and the cool of the sea breeze
            provide you a very unique experience to your money making your holiday a dreamlike.</p>
        </div>
        <div class="footer-col">
          <h4>Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="banquest.php">Banquets</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact Info</h4>
          <ul>
            <li><a href="#"></a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>

        </div>
      </div>
    </div>
  </footer>

  <script src="js/room.js"></script>

  <script src="js/preloader.js"></script>


</body>

</html>