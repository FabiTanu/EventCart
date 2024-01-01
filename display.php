<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INDEX</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link rel = "stylesheet" href="bd.css">

</head>
<body>
        <nav class="navbar navbar-expand-lg" style="background-color: #420303;">
        <div class="container">
        <a class="navbar-brand" href="index.html">EventCart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="display.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="OurTeam.php">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Packages
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="wedding.php">Wedding</a></li>
                <li><a class="dropdown-item" href="birthday.php">Birthday</a></li>
                <li><a class="dropdown-item" href="others.php">Other Event</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
            </li><li class="nav-item">
                <a class="nav-link" href="Login.php">LogIn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Registration.php">SignUp</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>


<?php
    @include 'slide.php';
    
?>


  <!------packages----->
  <div class="title">
    <h1><span>P</span>ackages</h1>  
  </div>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="package">
          <h2>Basic Package</h2>
          <p>Price: $299.99</p>
          <button><a href="basic.php"> See Details </a></button>
        </div>
      </div>
      <div class="col-4">
        <div class="package">
          <h2>Premium Package</h2>
          <p>Price: $599.99</p>
          <button><a href="premium.php"> See Details </a></button>
        </div>
      </div>
      <div class="col-4">
        <div class="package">
          <h2>Deluxe Package</h2>
          <p>Price: $999.99</p>
          <button><a href="deluxe.php"> See Details </a></button>
        </div>
      </div>
    </div>
  </div>
  </div>



  <!------------------------services-------------------->
  <section class="service" id="service">
        <div class="title">
            <h1><span>S</span>ervice</h1>
        </div>
        <div class="services-row">
            <div class="services-col">
                <i class="fas fa-book-open"></i>
                <h2>Invitation</h2>
                <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
            </div>
            <div class="services-col">
                <i class="fas fa-camera"></i>
                <h2>Photography & Video</h2>
                <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
            </div>
            <div class="services-col">
                <i class="fas fa-brush"></i>
                <h2>Beauty & Makeup</h2>
                <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
            </div>
            <div class="services-col">
                <i class="fas fa-birthday-cake"></i>
                <h2>Birthday cake</h2>
                <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
            </div>
            <div class="services-col">
                <i class="fas fa-music"></i>
                <h2>music band</h2>
                <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
            </div>
            <div class="services-col">
                <i class="fas fa-utensils"></i>
                <h2>Catering</h2>
                <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
            </div>
        </div>
    </section>

     <!------------------Gallery------------------>
     <section class="invite" id="invite">
        <div class="title">
            <h1><span>G</span>allery</h1>
        </div>
        <div class="invitation-row">
            <div class="invitation-box">
                <img src="concert.jpg" alt="">
            </div>
            <div class="invitation-box">
                <img src="event.jpg" alt="">
            </div>
            <div class="invitation-box">
                <img src="birthdayy.jpg">
            </div>
        </div>
    </section>


    
     <!----------------------------venue Section-------------->
     <section class="venue" id="venue">
        <div class="title">
            <h1><span>V</span>enues</h1>
        </div>
        <div class="venue-list">
            <div class="venue-box">
                <img src="img/GrandSylhet.jpg" alt="img">
                <div class="venue-info">
                    <h2>Sylhet</h2>
                    <p>Hotel Grand Sylhet, Sylhet</p>
                    <button class="btn">More Info</button>
                </div>
            </div>
            <div class="venue-box">
                <img src="img/hgSultan.jpg" alt="img">
                <div class="venue-info">
                    <h2>Sylhet</h2>
                    <p>Hotel Grand Sultan</p>
                    <button class="btn">More Info</button>
                </div>
            </div>
            <div class="venue-box">
                <img src="img/khans.jpg" alt="img">
                <div class="venue-info">
                    <h2>Sylhet</h2>
                    <p>khan Palace Convention Hall, Sylhet</p>
                    <button class="btn">More Info</button>
                </div>
            </div>
            <div class="venue-box">
                <img src="img/roseView.jpg" alt="img">
                <div class="venue-info">
                    <h2>Sylhet</h2>
                    <p>Hotel Rose View</p>
                    <button class="btn">More Info</button>
                </div>
            </div>
            <div class="venue-box">
                <img src="img/haat.jpg" alt="img">
                <div class="venue-info">
                    <h2>Sylhet</h2>
                    <p>HAAT Food Court</p>
                    <button class="btn">More Info</button>
                </div>
            </div>
            <div class="venue-box">
                <img src="img/kushiara.jpg" alt="img">
                <div class="venue-info">
                    <h2>Sylhet</h2>
                    <p>Kushiara Convention Hall</p>
                    <button class="btn">More Info</button>
                </div>
            </div>
        </div>
    </section>


<!------------------------footer-------------------->
    <footer>
    <div class="container p-4">
            <div class="row">
                <div class="col-6">
                <h1 class="text-uppercase">Quick links</h1>
                    <ul>
                        <li>
                            <a href="display.php" class="text-dark">Home</a>
                        </li>
                        <li>
                            <a href="about.php" class="text-dark">ABOUT</a>      
                        </li>
                        <li>
                            <a href="#!" class="text-dark">PACKAGE</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">GALLERY</a>
                        </li>
                    </ul>
                    </div>
                <div class="col-6">
                <h1 class="text-uppercase">Links</h1>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100007980257976&mibextid=ZbWKwL" class="text-dark">Facebook</a>
                        </li>
                        <li>
                            <a href="https://instagram.com/farhanamunnnii?igshid=MzNlNGNkZWQ4Mg==" class="text-dark">Instagram</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 4</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    <div class="text-center p-3">
        <p class="credit">Creat by <span style="color: #771153;">Munni Mahi Fabi</span></p>
    </div>
    </footer>
  
  <!-- Make sure to include Bootstrap JS at the end of the body -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>