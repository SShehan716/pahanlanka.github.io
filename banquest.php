<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pahan Lanka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/banquest.css">


    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/preloader.css">


    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
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
                    <li><a class="active" href="banquest.php">Banquets</a></li>
                    <li><a href="room.php">Rooms</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>

        <div style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)),url(images/banquet/10.jpg);overflow: visible; background-position: 50% 100%; background-repeat: no-repeat; background-attachment: fixed;" class="contact-bg">
            <h3>Celebrate Your Event With Us</h3>
            <h2>Banquets Halls</h2>
            <div class="line">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <input class="dm-btn" type=button onClick="location.href='#wHalls'" value="MORE DETAILS"></input>
        </div>
    </header>
    <!-- end of header -->

    <section class="vistUS">
        <div class="vUS">
            <h3>Facilities</h3>
        </div>
        <div class="contact-info">
            <div>
                <span><i class="fas fa-map-marker-alt"></i></span>
                <span>Close to Kalutara Town</span>
            </div>
            <div>
                <span><i class="fas fa-solid fa-utensils"></i></i></i></span>
                <span>Meals</span>
            </div>
            <div>
                <span><i class="fas fa-solid fa-hand-holding-heart"></i></span>
                <span>Friendly Service</span>
            </div>
            <div>
                <span><i class="fas fa-solid fa-swatchbook"></i></span>
                <span>Wedding Planning</span>
            </div>
        </div>
    </section>




    <div id="wHalls" class="section-seperator">
        <div class="divider"></div>
    </div>


    <!-- fullscreen modal -->
    <div id="modal"></div>
    <!-- end of fullscreen modal -->

    <!-- body content  -->

    <section class="rooms sec-width" id="rooms">
        <div class="title">
            <h2>BANQUET HALL</h2>
        </div>
        <div class="rooms-container">
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="images/banquet/109833066_3060334337422787_8143524888069312072_n.jpg" alt="wedding hall">
                </div>
                <div class="room-text">
                    <h3>DIAMOND BANQUET HALL</h3>
                    <ul>
                        <li>
                            <i class="fas fa-solid fa-star-of-life"></i> Dancing Floor
                        </li>
                        <li>
                            <i class="fas fa-solid fa-car"></i> Ample Parking
                        </li>
                        <li>
                            <i class="fas fa-solid fa-disease"></i>
                            Free Deco
                        </li>
                        <li>
                            <i class="fas fa-solid fa-square"></i>
                            Red Carpet
                        </li>
                        <li>
                            <i class="fas fa-solid fa-utensils"></i>
                            Free Bite
                        </li>
                        <li>
                            <i class="fas fa-solid fa-person-booth"></i>
                            Changing Room
                        </li>
                    </ul>
                    <p class="rate">
                        <span>250 Pax Hall</span>
                    </p>
                    <button type="button" onClick="location.href='halldetails.php'" class="btn">More details</button>
                </div>
            </article>
            <!-- end of single room -->

        </div>
    </section>

    <section class="services sec-width" id="services">
        <div class="title">
            <h2>services</h2>
        </div>
        <div class="services-container">
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-solid fa-star-of-life"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Dance Floor</h2>

                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-solid fa-car"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Large Parking</h2>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa fa-disease"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Free Deco</h2>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-solid fa-utensils"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Free Bites</h2>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-solid fa-person-booth"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Changing Room</h2>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-solid fa-bed"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Delux Honey Moon Rooms</h2>
                </div>
            </article>
            <!-- end of single service -->
        </div>
    </section>


    <section class="customers" id="customers" style="background-image: url(images/aera.jpg); background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
        <div class="sec-width">
            <div class="title">
                <h2>customers</h2>
            </div>
            <div class="customers-container">
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <h3>Family-friendly · Romantic atmosphere</h3>
                    <p>Our wedding ceremony was held at the Pahan Lanka Hotel. They arranged it exactly the way we wanted it. Delicious food, surroundings, as well as prompt service are very attractive. Their commitment to make today the happiest day of our lives should be appreciated. Plan your wedding today at the Pahan Lanka Hotel and have this beautiful and new experience.</p>
                    <img src="images/customers/shehan Lakshitha.jpg" alt="customer image">
                    <span>Shehan Lakshitha</span>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <h3>Helpful concierge · Good room service · Romantic atmosphere</h3>
                    <p>Tasty foods for reasonable prices..
                        very comfortable room & good service..
                        Nice small location with pool
                        highly recommended</p>
                    <img src="images/customers/Oshin Ganegoda.jpg" alt="customer image">
                    <span>Oshin Ganegoda</span>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <h3>Good room service
                        ·
                        Thoughtful amenities
                        ·
                        Family-friendly
                        ·
                        Helpful concierge
                        ·
                        Great hotel bar
                        ·
                        Spacious rooms
                        ·
                        Quiet rooms
                        ·
                        Large suites
                        ·
                        Historic building
                        ·
                        Romantic atmosphere</h3>
                    <p>amazing place and very fast and kindly service</p>
                    <img src="images/customers/Lahiru Dilranga Silva.jpg" alt="customer image">
                    <span>Customer Name, Country</span>
                </div>
                <!-- end of single customer -->
            </div>
        </div>
    </section>
    <!-- end of body content -->

    <!-- footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>About us</h4>
                    <p>We, Pahan Lanka Hotel, Filled with hospitality, warmth of the sunny climate and the cool of the sea breeze provide you a very unique experience to your money making your holiday a dreamlike.</p>
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

    <!-- end of footer -->

    <script src="js/banquest.js"></script>
    <script src="js/preloader.js"></script>
</body>

</html>