<?php
session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: ../index.php');
  exit();
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Go-Books</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css" />
  <link href="../gambar/icon aff (1).png" rel="icon" />
  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <style>
    .logo {
      height: 40px;
      width: 40px;
      margin-top: 15px;
      margin-bottom: 15px;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0" cz-shortcut-listen="true">
  <header id="header" class="header fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="gambar/affinity-.png" class="logo">
      </a>
      <nav id="navbar" class="navbar navbar-expand-lg">
        <ul class="nav justify-content-center">
          <li>
            <a href="#main">Home</a>
          </li>
          <li>
            <a href="#about">About</a>
          </li>
          <li>
            <a href="#service">Genre</a>
          </li>
          <li>
            <a href="#pricing">Pricing</a>
          </li>
          <li>
            <a href="#gallery">Library</a>
          </li>
        </ul>
      </nav>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="btn-login" href="?logout=true">Logout</a>
        </li>
      </ul>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>

  <section id="main" class="main d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up" class="aos-init aos-animate">One book opens the door to a brighter future.</h2>
          <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">We offer affordable book rental services and easy access to a wide variety of books. Enjoy a delightful reading experience with our website.</p>
          <div class="d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <a href="#pricing" class="btn-login">Get Books</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="gambar/test.jpg" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about pt-0">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="gambar/about.svg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3>About Us</h3>
          <p>
            Welcome to Go-Books, We have a constantly updated and diverse collection of books, including the latest and most popular books from various genres. We strive to continuously update our book collection and provide high-quality book rental services so that customers can enjoy an optimal reading experience.
          </p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
              <i class="bi bi-diagram-3"></i>
              <div>
                <h5>Easy Access to Many Books</h5>
                <p>At Go-Books, customers to have easy access to various books from different genres and categories. Customers can browse the online book collection and choose the books they want easily, without the need to go to physical bookstores. .</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
              <i class="bi bi-award-fill"></i>
              <div>
                <h5>Cost Savings</h5>
                <p>customers can read many books without spending a lot of money on buying each book. Book rental can also help customers save on transportation costs and the time needed to go to physical bookstores.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
              <i class="bi bi-person-lines-fill"></i>
              <div>
                <h5>Flexibility and Ease of Use</h5>
                <p>Customers don't have to worry about storing books, as they can return them when they finish reading. In addition, book rental services are also flexible in terms of duration, so customers can choose a subscription package that suits their needs and cancel it anytime without extra charges.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <section id="service" class="services pt-0">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Genres</h2>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <div class="card-img">
              <img src="gambar/comic.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html" class="stretched-link">Fiction</a></h3>
            <p>Fiction is a form of literature that focuses on stories created or invented by the author, with characters, plot, and setting that are generally imaginative and fictional.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="card">
            <div class="card-img">
              <img src="gambar/romance.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html#2" class="stretched-link">Romance</a></h3>
            <p>He plot usually involves conflicts faced by romantic couples, whether it be due to social differences, personal issues, or other obstacles.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="card">
            <div class="card-img">
              <img src="gambar/sience.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html#3" class="stretched-link">Science fiction</a></h3>
            <p>This genre often involves complex moral or social decision-making, as well as exploring possibilities of the future or different alternate worlds.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
          <div class="card">
            <div class="card-img">
              <img src="gambar/horror.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html#4" class="stretched-link">Horror</a></h3>
            <p>Horror is a genre of fiction that aims to create a sense of fear, terror, or disgust in the reader. The plot usually involves supernatural or paranormal elements, such as ghosts, monsters, or other terrifying creatures, as well as psychological horror that plays on the fears and anxieties of the reader.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
          <div class="card">
            <div class="card-img">
              <img src="gambar/thriller.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html#5" class="stretched-link">Thriller</a></h3>
            <p>hriller is a genre of fiction that focuses on creating a sense of excitement, tension, and suspense for the reader. The plot usually involves a high-stakes situation, such as a crime or a dangerous situation, and the protagonist must use their skills and intelligence to solve the problem or overcome the danger. </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
          <div class="card">
            <div class="card-img">
              <img src="gambar/college.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="details.html#6" class="stretched-link">College / Education Book</a></h3>
            <p>he content of education and college books can vary widely, from specific subject matter such as mathematics or biology, to general topics such as study skills, time management, and career development.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section id="pricing" class="pricing pt-0">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-header">
        <h2>Pricing</h2>
      </div>

      <div class="row gy-4">
        <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Basic</h3>
            <h4><sup>$</sup>7<span> / Month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> Fiction</li>
              <li><i class="bi bi-check"></i> Sience Fiction</li>
              <li><i class="bi bi-check"></i> Romance</li>
              <li class="na"><i class="bi bi-x"></i> <span>Horror</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Thriller</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>College / Education Book</span></li>
            </ul>
            <a href="buy.php" class="buy-btn">Buy Now</a>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-item featured">
            <h3>Advanced</h3>
            <h4><sup>$</sup>15<span> / Month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> Fiction</li>
              <li><i class="bi bi-check"></i> Sience Fiction</li>
              <li><i class="bi bi-check"></i> Romance</li>
              <li><i class="bi bi-check"></i>Horror</li>
              <li class="na"><i class="bi bi-x"></i> <span>Thriller</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>College / Education Book</span></li>
            </ul>
            <a href="buy.php" class="buy-btn">Buy Now</a>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="pricing-item">
            <h3>Premium</h3>
            <h4><sup>$</sup>21<span> / Month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> Fiction</li>
              <li><i class="bi bi-check"></i> Sience Fiction</li>
              <li><i class="bi bi-check"></i> Romance</li>
              <li><i class="bi bi-check"></i> Horror</li>
              <li><i class="bi bi-check"></i>Thriller</li>
              <li><i class="bi bi-check"></i>College / Education Book</li>
            </ul>
            <a href="buy.php" class="buy-btn">Buy Now</a>
          </div>
        </div><!-- End Pricing Item -->

      </div>

    </div>
  </section>

  <section id="gallery" class="gallery pt-0">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="section-header">
        <h2>Gallery</h2>
      </div>

      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="gambar/galitem1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="gambar/galitem2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="gambar/galitem3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  </section>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-absolute align-items-center">
            <span>Go-Books</span>
          </a>
          <p>Brand product photography involves capturing high-quality images of products that represent a company's brand identity. The product photos are typically used for marketing and advertising purposes.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#main">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#service">Genres</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Genres</h4>
          <ul>
            <li><a href="details.html#1">Fiction</a></li>
            <li><a href="details.html#2">Sience Fiction</a></li>
            <li><a href="details.html#3">Romance</a></li>
            <li><a href="details.html#4">Horror</a></li>
            <li><a href="details.html#5">Thriller</a></li>
            <li><a href="details.html#6">College / Education Book</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Ks Tubun Dalam Street <br>
            Samarinda, SMD 75123<br>
            Indonesia <br><br>
            <strong>Phone:</strong> +628 1234 8822 99<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        © Copyright <strong><span>Go-Books</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Albygael Rifal Nifansa</a>
      </div>
    </div>

  </footer>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/main.js"></script>

</body>

</html>