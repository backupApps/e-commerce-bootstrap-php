<?php 
session_start();

if (isset($_GET['logout'])) {
   session_unset();
   session_destroy();
   header("Location: index.php"); // Tetap di index.php setelah logout
   exit;
}

// Cek apakah sesi login sudah ada
$isLoggedIn = isset($_SESSION['email']);
$username = $isLoggedIn ? $_SESSION['email'] : '';

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>E-Commerse</title>
   <link rel="stylesheet" href="styles.css" />
   <link rel="icon" href="assets/img/e-commerce-title.png" />

   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


   <!-- cdn -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   <!-- navbar -->
   <nav class="fixed-top bg-light w-100 p-3 align-items-center justify-content-between d-flex">
      <div class="d-flex align-items-center">
         <img class="ms-lg-5 me-lg-5" src="assets/img/e-commerce.png" alt="" width="100" />
         <ul class="nav nav-pills justify-content-end small me-lg-5">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="">HOME</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="">SERVICE</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="">PRODUCT</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="">BLOG</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="">CONTACT US</a>
            </li>
         </ul>
      </div>

      <div class="me-4 d-flex align-items-center">
         <div class="input-group me-3">
            <input type="text" class="form-control" placeholder="Search Product" aria-describedby="basic-addon2" />
            <button type="button" class="btn btn-dark">
               <i class="fa-solid fa-magnifying-glass fs-4"></i>
            </button>
         </div>
         <a href=""><i class="fa-solid fa-cart-shopping me-3 text-black fs-4"></i></a>
         <div class="dropdown d-flex align-items-center">
            <?php if ($isLoggedIn): ?>
            <span><?= htmlspecialchars($username); ?></span>
            <i class="fa-solid fa-user me-3 text-black fs-4 dropdown-toggle" data-bs-toggle="dropdown"
               aria-expanded="false" style="cursor: pointer;"></i>
            <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="profile.php">Profile</a></li>
               <li><a class="dropdown-item" href="settings.php">Settings</a></li>
               <li><a class="dropdown-item" href="index.php?logout=true">Logout</a></li>
            </ul>
            <?php else: ?>
            <a href="login_form.php"><i class="fa-solid fa-user me-3 text-black fs-4" style="cursor: pointer;"></i></a>
            <?php endif; ?>
         </div>
      </div>
   </nav>

   <!-- carousel -->
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="assets/img/ducati-panigale-v2-3840x2160-17581.jpg" class="d-block w-100" alt="" height="800" />
         </div>
         <div class="carousel-item">
            <img src="assets/img/triumph-daytona-660-3840x2160-19327.jpg" class="d-block w-100" alt="" height="800" />
         </div>
         <div class="carousel-item">
            <img src="assets/img/triumph-speed-3840x2160-17075.jpg" class="d-block w-100" alt="" height="800" />
         </div>
         <div style="
                  position: absolute;
                  top: 50%;
                  left: 30%;
                  transform: translate(-50%, -50%);
                  color: #fff;
               ">
            <h1 style="
                     font-weight: 300;
                     font-size: 100px;
                     -webkit-text-stroke: 1px #0d6efd;
                  ">
               Your Product.
            </h1>
            <button class="btn btn-primary p-3 w-50">Show Product</button>
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
         data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
         data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>

   <!-- cards -->
   <div class="container mt-5">
      <ul class="pagination">
         <li class="page-item disabled">
            <a class="page-link">Previous</a>
         </li>
         <li class="page-item"><a class="page-link" href="">1</a></li>
         <li class="page-item active" aria-current="page">
            <a class="page-link" href="">2</a>
         </li>
         <li class="page-item"><a class="page-link" href="">3</a></li>
         <li class="page-item">
            <a class="page-link" href="">Next</a>
         </li>
      </ul>
      <div class="row">
         <!-- Card 1 -->
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/triumph-speed-3840x2160-17075.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>

         <!-- Card 2 -->
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/ducati-panigale-v2-3840x2160-17581.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>

         <!-- Card 3 -->
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/triumph-speed-3840x2160-17075.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>

         <!-- Card 4 -->
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/ducati-panigale-v2-3840x2160-17581.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>

         <!-- Card 5 -->
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/triumph-speed-3840x2160-17075.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>

         <!-- Card 6 (this card will go to the next row) -->
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/ducati-panigale-v2-3840x2160-17581.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/triumph-speed-3840x2160-17075.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>

         <!-- Card 6 (this card will go to the next row) -->
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/ducati-panigale-v2-3840x2160-17581.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/triumph-speed-3840x2160-17075.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>

         <!-- Card 6 (this card will go to the next row) -->
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/ducati-panigale-v2-3840x2160-17581.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star "></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/triumph-speed-3840x2160-17075.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>

         <!-- Card 6 (this card will go to the next row) -->
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/ducati-panigale-v2-3840x2160-17581.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/triumph-speed-3840x2160-17075.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>

         <!-- Card 6 (this card will go to the next row) -->
         <div class="col-lg-2 me-lg-4 mb-3">
            <div class="card" style="width: 14rem">
               <img src="assets/img/ducati-panigale-v2-3840x2160-17581.jpg" class="card-img-top" alt="Card Image"
                  height="230" />
               <div class="card-body">
                  <p class="card-text fs-5 text-ellipsis">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Sit et, consequatur, molestiae molestias dolor dicta,
                     quam dolore repellendus iusto natus nihil esse
                     obcaecati. Corrupti exercitationem explicabo quae ullam
                     veritatis at?
                  </p>
                  <b class="text-danger fs-4">Rp. 20000</b>
                  <p>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star checked"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <ul class="pagination mb-5">
         <li class="page-item disabled">
            <a class="page-link">Previous</a>
         </li>
         <li class="page-item"><a class="page-link" href="">1</a></li>
         <li class="page-item active" aria-current="page">
            <a class="page-link" href="">2</a>
         </li>
         <li class="page-item"><a class="page-link" href="">3</a></li>
         <li class="page-item">
            <a class="page-link" href="">Next</a>
         </li>
      </ul>
   </div>

   <!-- FOOTER -->
   <footer class="bg-primary text-light pt-5">
      <div class="container">
         <div class="row">
            <!-- Customer Service Section -->
            <div class="col-md-3">
               <h5 class="text-uppercase mb-4">Customer Service</h5>
               <ul class="list-unstyled">
                  <li>
                     <a href="" class="text-light text-decoration-none">Help Center</a>
                  </li>
                  <li>
                     <a href="" class="text-light text-decoration-none">Order Tracking</a>
                  </li>
                  <li>
                     <a href="" class="text-light text-decoration-none">Returns</a>
                  </li>
                  <li>
                     <a href="" class="text-light text-decoration-none">Shipping & Delivery</a>
                  </li>
                  <li>
                     <a href="" class="text-light text-decoration-none">Payment Methods</a>
                  </li>
               </ul>
            </div>

            <!-- Company Section -->
            <div class="col-md-3">
               <h5 class="text-uppercase mb-4">Company</h5>
               <ul class="list-unstyled">
                  <li>
                     <a href="" class="text-light text-decoration-none">About Us</a>
                  </li>
                  <li>
                     <a href="" class="text-light text-decoration-none">Careers</a>
                  </li>
                  <li>
                     <a href="" class="text-light text-decoration-none">Privacy Policy</a>
                  </li>
                  <li>
                     <a href="" class="text-light text-decoration-none">Terms & Conditions</a>
                  </li>
               </ul>
            </div>

            <!-- Explore Section -->
            <div class="col-md-3">
               <h5 class="text-uppercase mb-4">Explore</h5>
               <ul class="list-unstyled">
                  <li>
                     <a href="" class="text-light text-decoration-none">Brands</a>
                  </li>
                  <li>
                     <a href="" class="text-light text-decoration-none">Gift Cards</a>
                  </li>
                  <li>
                     <a href="" class="text-light text-decoration-none">Affiliate Program</a>
                  </li>
                  <li>
                     <a href="" class="text-light text-decoration-none">Special Offers</a>
                  </li>
               </ul>
            </div>

            <!-- Stay Connected Section -->
            <div class="col-md-3">
               <h5 class="text-uppercase mb-4">Stay Connected</h5>
               <p>
                  Sign up for our newsletter and stay updated on our latest
                  offers and news.
               </p>
               <form class="d-flex">
                  <input type="email" class="form-control me-2" placeholder="Enter your email" />
                  <button class="btn btn-warning">Subscribe</button>
               </form>
               <div class="mt-3">
                  <a href="" class="text-light me-3"><i class="fab fa-facebook fa-2x"></i></a>
                  <a href="" class="text-light me-3"><i class="fab fa-instagram fa-2x"></i></a>
                  <a href="" class="text-light me-3"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="" class="text-light"><i class="fab fa-youtube fa-2x"></i></a>
               </div>
            </div>
         </div>

         <hr class="bg-light" />

         <div class="row">
            <div class="col-md-6">
               <p>&copy; 2024 Your Company Name. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-end">
               <p>
                  Designed by
                  <a href="" class="text-light text-decoration-none">YourCompany</a>
               </p>
            </div>
         </div>
      </div>
   </footer>

   <!-- Add the following script for the icons -->
   <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

   <!-- javascript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
   </script>
</body>

</html>