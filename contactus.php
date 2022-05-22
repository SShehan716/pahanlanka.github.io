<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pahan Lanka</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/contactus.css">


  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/preloader.css">

  <!-- Fontawesome icon -->
  <script src="https://kit.fontawesome.com/72d6efc6c3.js" crossorigin="anonymous"></script>


</head>

<body>
  <div id="preloader"
    style="background:rgb(252, 252, 252) url(images/conactus\ background.png); background-repeat:no-repeat; background-size: cover; background-attachment: fixed;">
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
          <li><a href="room.php">Rooms</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a class="active" href="contactus.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>

    <div
      style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)),url(images/contactus\ cover.jpg);overflow: visible; background-position: 50% 100%; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;"
      class="contact-bg">
      <h3>Get in Touch with Us</h3>
      <h2>contact us</h2>
      <div class="line">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <input class="dm-btn" type=button onClick="location.href='#cForm'" value="DROP A MESSAGE"></input>
    </div>

  </header>


  <section class="vistUS">
    <div class="vUS">
      <h3>Visit us</h3>
    </div>
    <div class="contact-info">
      <div>
        <span><i class="fas fa-mobile-alt"></i></span>
        <span>Phone No.</span>
        <span class="text">+9477 492 5213</span>
      </div>
      <div>
        <span><i class="fas fa-envelope-open"></i></span>
        <span>E-mail</span>
        <span class="text">contactus@pahanlanka.com</span>
      </div>
      <div>
        <span><i class="fas fa-map-marker-alt"></i></span>
        <span>Address</span>
        <span class="text">Horana Road, Millagashandiya, Panapitiya, Waskaduwa, Kalutara</span>
      </div>
      <div>
        <span><i class="fas fa-clock"></i></span>
        <span>Opening Hours</span>
        <span class="text">Always Open</span>
      </div>
    </div>
  </section>



  <div id="cForm" class="section-seperator">
    <div class="divider"></div>
  </div>

  <section class="contactSection"
    style="background-image: url(images/conactus\ background.png); background-size: 100%; background-attachment: fixed;">
    <div class="contact-body">


      <div class="contact-form">
        <!--       <form>
        <div>
          <input type = "text" class = "form-control" placeholder="First Name">
          <input type = "text" class = "form-control" placeholder="Last Name">
        </div>
        <div>
          <input type = "email" class = "form-control" placeholder="E-mail">
          <input type = "text" class = "form-control" placeholder="Phone">
        </div>
        <textarea rows = "5" placeholder="Message" class = "form-control"></textarea>
        <input type = "submit" class = "send-btn" value = "send message">
      </form> -->

        <form method="POST" name="c-form" id="c-form">
          <h3>Drop Us A Message</h3>

          <div class="input-group">
            <input type="text" id="first" name="first" required>
            <label for="first-name"><i class="fa-solid fa-user"></i> First Name</label>
          </div>
          <div class="input-group">
            <input type="text" id="last" name="last" required>
            <label for="last-name"><i class="fa-solid fa-user"></i> Last Name</label>
          </div>
          <div class="input-group">
            <input type="tel" id="number" name="number" required>
            <label for="number"><i class="fa-solid fa-phone"></i> Mobile Number</label>
          </div>
          <div class="input-group">
            <input type="email" id="email" name="email" required>
            <label for="email"><i class="fa-solid fa-envelope"></i> E-mail</label>
          </div>
          <div class="input-group">
            <textarea id="msg" name="msg" rows="10" required></textarea>
            <label for="message"><i class="fa-solid fa-message"></i> Your Message</label>
          </div>
          <button class="send-btn" type="submit" name="cus">Submit <i class="fa-solid fa-paper-plane"></i></button>

          <div class="alert alert-danger" id="error" style="display:none;">
            <div class="thank-u" id="thank-u">
              <h2>Sorry</h2>
              <p>Your mail not sent. Try again</p>
            </div>
          </div>

          <div class="alert alert-success" id="success" style="display:none;">
            <div class="thank-u" id="thank-u">
              <h2>Thank You!</h2>
              <p>Your message has been successfully sent. Our management will contact you shortly.</p>
            </div>
          </div>

        </form>

        <?php
      if(isset($_POST["cus"])){

//get data from form  
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$number = $_POST['number'];
$msg = $_POST['msg'];

$to = "contactus@pahanlanka.com";
$subject = "Mail From website";
$txt ="First Name = ". $first . "\r\nLast Name = ". $last . "\r\nE-mail = " . $email . "\r\nMobile Number =" . $number."\r\nMessage =" . $msg;
$headers = "From: noreply@pahanlanka.com";
if($email!=NULL){
  $send = mail($to,$subject,$txt,$headers);
  $count=mysqli_num_rows($send);
  if ($count>0)
  {
      ?>
        <script type="text/javascript">
          document.getElementById("preloader").style.display = "none";
          document.getElementById("form-container").style.display = "block";
          document.getElementById("success").style.display = "none";
          document.getElementById("error").style.display = "block";
        </script>
        <?php
  }else{
    ?>
        <script type="text/javascript">
          document.getElementById("preloader").style.display = "none";
          document.getElementById("form-container").style.display = "block";
          document.getElementById("error").style.display = "none";
          document.getElementById("success").style.display = "block";
          setTimeout(function () {
            window.location.href = "room.php";
          }, 3000);
        </script>
        <?php
}
}
}
?>

        <div class="map">

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.139820249006!2d79.9714226145572!3d6.62955029520604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae236370d96bc1d%3A0x9313a813e1bba69c!2sPahan%20Lanka%20Hotel!5e0!3m2!1sen!2slk!4v1652475592043!5m2!1sen!2slk"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </section>






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


  <script src="js/preloader.js"></script>


</body>

</html>