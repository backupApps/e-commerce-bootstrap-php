<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
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

                           <form>

                              <div class="d-flex align-items-center mb-3 pb-1">
                                 <img src="assets/img/e-commerce.png" alt="" width="100">
                              </div>

                              <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                              <div data-mdb-input-init class="form-outline mb-1">
                                 <input type="email" id="form2Example17" class="form-control form-control-lg" />
                                 <label class="form-label" for="form2Example17">Surname</label>
                              </div>

                              <div data-mdb-input-init class="form-outline mb-1">
                                 <input type="email" id="form2Example17" class="form-control form-control-lg" />
                                 <label class="form-label" for="form2Example17">Email address</label>
                              </div>

                              <div data-mdb-input-init class="form-outline mb-1">
                                 <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                 <label class="form-label" for="form2Example27">Password</label>
                              </div>

                              <div class="pt-1 mb-4">
                                 <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block"
                                    type="button">Register</button>
                              </div>

                              <p class="mb-5 pb-lg-2" style="color: #393f81;">Have an account?
                                 <a href="login.php" style="color: #393f81;"> Login</a>
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