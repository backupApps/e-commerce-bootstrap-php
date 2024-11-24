<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>E-Commerse</title>
   <link rel="icon" href="assets/img/e-commerce-title.png" />

   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

   <!-- cdn -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   <section class="vh-100 bg-primary">
      <div class="container py-5 h-100">
         <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
               <div class="card" style="border-radius: 1rem;">
                  <div class="row g-0">
                     <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img src="assets/img/shopping-vektor.png" alt="login form" class="img-fluid"
                           style="border-radius: 1rem 0 0 1rem;" />
                     </div>
                     <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">

                           <form method="POST" action="functions/register.php" enctype="multipart/form-data">

                              <div class="d-flex align-items-center mb-3 pb-1">
                                 <img src="assets/img/e-commerce.png" alt="" width="100">
                              </div>

                              <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                              <div data-mdb-input-init class="form-outline mb-3">
                                 <label class="form-label" for="name">Full Name</label>
                                 <input type="text" id="name" name="name" class="form-control form-control-lg" />
                              </div>

                              <div data-mdb-input-init class="form-outline mb-3">
                                 <label class="form-label" for="email">Email address</label>
                                 <input type="email" id="email" name="email" class="form-control form-control-lg" />
                              </div>

                              <div data-mdb-input-init class="form-outline mb-3">
                                 <label class="form-label" for="password">Password</label>
                                 <input type="password" id="password" name="password"
                                    class="form-control form-control-lg" />
                              </div>

                              <div class="pt-1 mb-4">
                                 <button class="btn btn-dark btn-lg btn-block" type="submit"
                                    name="submit">Register</button>
                              </div>

                              <p class="mb-5 pb-lg-2" style="color: #393f81;">Have an account?
                                 <a href="login_form.php" style="color: #393f81;"> Login</a>
                              </p>
                              <a href="#!" class="small text-muted">Terms of use.</a>
                              <a href="#!" class="small text-muted">Privacy policy</a>
                           </form>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</body>

</html>