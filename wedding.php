<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INDEX</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bd.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg" style="background-color: #420303;">
    <div class="container">
      <a class="navbar-brand" href="index.html">EventCart</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="HomePage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="OurTeam.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Packages
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="wedding.php">Wedding</a></li>
              <li><a class="dropdown-item" href="birthday.php">Birthday</a></li>
              <li><a class="dropdown-item" href="other.php">Other Event</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!--packages-->

  <div class="title">
    <h1><span>W</span>edding <span>P</span>ackages</h1>
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
      <div class="services-col">
        <i class="fas fa-users"></i>
        <h2>Security</h2>
        <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
      </div>
      <div class="services-col">
        <i class="fas fa-car"></i>
        <h2>Horse carriage</h2>
        <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
      </div>
      <div class="services-col">
        <i class="fas fa-car"></i>
        <h2>Car</h2>
        <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
      </div>
    </div>
  </section>

  <!------------------E-invitation------------------>

  <section class="invite" id="invite">

    <div class="title">
      <h1>Card<span>Design</span></h1>
      <p>Choose the best card Design.</p>
    </div>
    <div class="invitation-row">
      <div class="invitation-box">
        <img src="img/WeddingCard.jpg" alt="">
      </div>
      <div class="invitation-box">
        <img src="img/Weddingcard2.jpg" alt="">
      </div>
      <div class="invitation-box">
        <img src="img/wc.jpg" alt="">
      </div>
      <div class="invitation-box">
        <img src="img/wc2.avif" alt="">
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
          <p>Grand Sylhet</p>
          <a href="https://grandsylhet.com/"><button class="btn">More Info</button></a>
        </div>
      </div>
      <div class="venue-box">
        <img src="img/hgSultan.jpg" alt="img">
        <div class="venue-info">
          <h2>Sylhet</h2>
          <p>Hotel Grand Sultan</p>
          <a href="https://www.grandsultanresort.com/"><button class="btn">More Info</button></a>
        </div>
      </div>
      <div class="venue-box">
        <img src="img/khans.jpg" alt="img">
        <div class="venue-info">
          <h2>Sylhet</h2>
          <p>khan Palace Convention Hall</p>
          <a href="https://kpchbd.com/"><button class="btn">More Info</button></a>
        </div>
      </div>
      <div class="venue-box">
        <img src="img/roseView.jpg" alt="img">
        <div class="venue-info">
          <h2>Sylhet</h2>
          <p>Hotel Rose View</p>
          <a href="https://www.roseviewhotel.com/"><button class="btn">More Info</button></a>
        </div>
      </div>
      <div class="venue-box">
        <img src="img/haat.jpg" alt="img">
        <div class="venue-info">
          <h2>Sylhet</h2>
          <p>HAAT Food Court</p>
          <a href="https://www.facebook.com/haatbdnk/"><button class="btn">More Info</button></a>
        </div>
      </div>
      <div class="venue-box">
        <img src="img/kushiara.jpg" alt="img">
        <div class="venue-info">
          <h2>Sylhet</h2>
          <p>Kushiara Convention Hall</p>
          <a href="https://www.facebook.com/kushiara.ich/"><button class="btn">More Info</button></a>
        </div>
      </div>
    </div>
  </section>






  <!-- Make sure to include Bootstrap JS at the end of the body -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>