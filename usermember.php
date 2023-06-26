<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demandailing</title>

    <!-- Fonts From Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Call File style.css -->
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#home" class="navbar-logo">Demandailing<span>.</span></a>

      <div class="navbar-cen">
        <a href="#home">Home</a>
        <a href="#menu">Menu</a>
        <a href="#outlet">Outlet</a>
        <a href="#contact">Contact</a>
        <a href="guestlist.php">Reservation</a>
      </div>

      <div class="navbar-right">
        <a href="logout.php" id="logout"><i data-feather="log-out"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Home Section Start -->
    <section class="home" id="home">
      <main class="content">
        
        <h2>Your Everyday Cafe<br />With Delicious Food</h2>

        <p>
          Hai! Kamu ngerasa Surabaya panas banget? Butuh tempat yang nyaman
          untuk kerja? Nah! Demandailing hadir untuk kamu dengan tempat yang
          <i><b>comfy</b></i> dan banyak menu-menu spesial.
        </p>
        <a href="bookingform.php"><button><strong>Book a Table</strong></button></a>
      </main>
    </section>
    <!-- Home Section End -->

    <!-- Menu Section Start -->
    <section id="menu" class="menu">
      <h2>Our<span> Menu</span></h2>

      <div class="opsimenu">
        <a href="#food">Food</a></li>
        <a href="#dessert">Dessert</a>
        <a href="#drink">Drink</a>
      </div>

      <h1 id="food" >Food</h1>
      
      <div class="row">


     
        <img src="img/food11.jpeg " height="350" width="230 " />
        <img src="img/food2.jpeg "  height="350" width="230 " />


        <img src="img/food3.jpeg " height="350" width="230 " />

        <img src="img/food4.jpeg " height="350" width="230 " />

        <img src="img/food5.jpeg "  height="350" width="230 " />

        <img src="img/food6.jpeg " height="350" width="230 " />
      </div>
  <div class="popup">
        <span>&times</span>
        <img src="img/food11.jpeg">
      </div>
      <h1 id="dessert" >Dessert</h1>
      
      <div class="row">
        <img src="img/dessert1.jpeg " height="350" width="230 " />

        <img src="img/dessert2.jpeg " height="350" width="230 " />

        <img src="img/dessert3.jpeg " height="350" width="230 " />

        <img src="img/dessert4.jpeg " height="350" width="230 " />

        <img src="img/dessert5.jpeg " height="350" width="230 " />

        <img src="img/dessert6.jpeg " height="350" width="230 " />
      </div>

      <h1 id="drink" >Drink</h1>
      
      <div class="row">
        <img src="img/drink1.jpeg " height="350" width="230 " />

        <img src="img/drink2.jpeg " height="350" width="230 " />

        <img src="img/drink3.jpeg " height="350" width="230 " />
        </div>
    </section>
    <!-- Menu Section End -->

    
    <!-- Outlet Section Start -->
    <section id="outlet" class="outlet">
        <h2>Our<span> Outlet</span></h2>

        <div class="row">
            <div class="outlett">
                <img class ="outlet-img" src="img/outlet1.jpeg " height="400" width="350" />
                <h4 class="judul-outlet">JEMURSARI</h4>
                 <span>Raya Jemursari No.71<br>Surabaya - 60237</span>
                <p>10 AM - 10 PM<br><span>EVERYDAY</span></p>
              </div> 

              <div class="outlett">
                <img class ="outlet-img" src="img/outlet2.jpeg " height="400" width="350" />
                <h4 class="judul-outlet">RUKO BUKIT DARMO GOLF 1</h4>
                <span>Jl. Raya Putat Gede Timur 1G<br>Surabaya - 60226</span>
                <p>8 AM - 11.30 PM<br><span>EVERYDAY</span></p>
              </div> 

              <div class="outlett">
                <img class ="outlet-img" src="img/outlet3.jpeg " height="400" width="350" />
                <h4 class="judul-outlet">RUKO KLAMPIS JAYA</h4>
                <span>Jl. Klampis Jaya 144<br>Surabaya - 60117</span>
                <p>10 AM - 11 PM<br><span>EVERYDAY</span></p>
              </div> 
        </div>
</section>  
    <!-- Outlet Section End-->

    <!-- Contact Section Start -->
    <section id="contact" class="contact"> 
    <h2>Need Help? <span class="span5">Contact Us</span></h2>

    <div class="contactatas">
      <div class="contact1">
          <i data-feather="phone"></i>
          <h3><span1>Klampis</span1><p>0311-599 5500</p></h3>  
      </div>

      <div class="contact1">
          <i data-feather="mail"></i>
          <h3><span1>All Outlet</span1><p>demandailingcare@gmail.com</p></h3>
      </div>
    </div>

    <div class="contactbawah">
      <div class="contact1">
          <i data-feather="phone"></i>
          <h3><span1>Jemursari</span1><p>031-848 0367</p></h3>
      </div>

      <div class="contact1">
          <i data-feather="phone"></i>
          <h3><span1>Bukit Darmo Golf</span1><p>031-9914 6370</p></h3>
      </div>
    </div>

    </section>

    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer> 
      <div class="medsos">
       <a href="https://instagram.com/demandailingcafe?igshid=MmJiY2I4NDBkZg=="> <img src="img/instagram1.jpg " height="30" width="30 " /></a>

       <a href="https://gofood.link/a/y1CB4zN"> <img class="img" src="img/gojek1.png" height="30" width="30 " /></a>

       <a href="https://food.grab.com/id/id/restaurant/de-mandailing-kedung-baruk-delivery/6-CZLKPA4JL4CENN">  <img class="img" src="img/grab1.png " height="30" width="30 " /></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#menu">Menu</a>
        <a href="#outlet">Outlet</a>
        <a href="#contact">Contact</a>
        <a href="guestlist.php">Reservation</a>
      </div>

      <div class="credit">
        <p>Created by <a href="https://www.linkedin.com/in/shintyadhita-wputri">Dhita</a> <span>&</span>  <a href="https://www.linkedin.com/in/nadenggansrgr">Rora</a>. | &copy; 2023.</p>
    </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- JavaScript -->
    <script src="script.js"></script>
  </body>
</html>
