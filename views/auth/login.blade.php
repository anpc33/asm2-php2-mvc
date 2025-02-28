<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
  data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">
<!-- Mirrored from themesbrand.com/velzon/html/master/auth-signin-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:32:04 GMT -->

<head>
  <meta charset="utf-8" />
  <title>Sign In | Admin & Dashboard </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="<?php echo BASE_URL . '/public/assets/images/favicon.ico'; ?>" type="image/x-icon">
  <!-- Layout config Js -->
  <link rel="stylesheet" href="<?php echo BASE_URL . '/public/assets/js/layout.js'; ?>">
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="<?php echo BASE_URL . '/public/assets/css/bootstrap.min.css'; ?>">
  <!-- Icons Css -->
  <link rel="stylesheet" href="<?php echo BASE_URL . '/public/assets/css/icons.min.css'; ?>">
  <!-- App Css-->
  <link rel="stylesheet" href="<?php echo BASE_URL . '/public/assets/css/app.min.css'; ?>">
  <!-- custom Css-->
  <link rel="stylesheet" href="<?php echo BASE_URL . '/public/assets/css/custom.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo BASE_URL . '/public/assets/css/customs.css'; ?>">
  @extends('components.head')

</head>

<body>
  <!-- auth-page wrapper -->
  <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card overflow-hidden card-bg-fill galaxy-border-none">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="p-lg-5 p-4 auth-one-bg h-100">
                    <div class="bg-overlay"></div>
                    <div class="position-relative h-100 d-flex flex-column">
                      <div class="mb-4">
                        <a href="index.html" class="d-block">
                          <img src="../../../images/logo-light.png" alt="" height="18" />
                        </a>
                      </div>
                      <div class="mt-auto">
                        <div class="mb-3">
                          <i class="ri-double-quotes-l display-4 text-success"></i>
                        </div>

                        <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0"
                              class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1"
                              aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2"
                              aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner text-center text-white-50 pb-5">
                            <div class="carousel-item active">
                              <p class="fs-15 fst-italic">
                                " Great! Clean code, clean design, easy for
                                customization.
                                Thanks very much! "
                              </p>
                            </div>
                            <div class="carousel-item">
                              <p class="fs-15 fst-italic">
                                " The theme is really great with an amazing customer
                                support."
                              </p>
                            </div>
                            <div class="carousel-item">
                              <p class="fs-15 fst-italic">
                                " Great! Clean code, clean design, easy for
                                customization.
                                Thanks very much! "
                              </p>
                            </div>
                          </div>
                        </div>
                        <!-- end carousel -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                  <div class="p-lg-5 p-4">
                    <div>
                      <h5 class="text-primary">Welcome Back !</h5>
                      <p class="text-muted">Sign in to continue to Dashboard.</p>
                    </div>

                    <div class="mt-4">
                      @if(isset($flash))
                      <script>
                        document.addEventListener('DOMContentLoaded', function() {
                              toastr.options = {
                                  "closeButton": true,
                                  "progressBar": true,
                                  "positionClass": "toast-top-right",
                                  "showDuration": "300",
                                  "hideDuration": "1000",
                                  "timeOut": "5000",
                                  "extendedTimeOut": "1000",
                              };
                              toastr.{{ $flash['type'] }}("{{ $flash['message'] }}");
                          });
                      </script>
                      @endif
                      <form action="{{ $_ENV['BASE_URL'] }}/auth/login" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="email" value=""
                            placeholder="Enter email" />
                        </div>
                        <div class="mb-3">
                          <div class="float-end">
                            <a href="auth-pass-reset-cover.html" class="text-muted">Forgot
                              password?</a>
                          </div>
                          <label class="form-label" for="password-input">Password</label>
                          <div class="position-relative auth-pass-inputgroup mb-3">
                            <input type="password" name="password" class="form-control pe-5 password-input"
                              placeholder="Enter password" id="password-input" />
                            <button
                              class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none"
                              type="button" id="password-addon">
                              <i class="ri-eye-fill align-middle"></i>
                            </button>

                          </div>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="auth-remember-check" />
                          <label class="form-check-label" for="auth-remember-check">Remember
                            me</label>
                        </div>

                        <div class="mt-4">
                          <button class="btn btn-success w-100" type="submit">
                            Sign In
                          </button>
                        </div>

                        <div class="mt-4 text-center">
                          <div class="signin-other-title">
                            <h5 class="fs-13 mb-4 title">Sign In with</h5>
                          </div>

                          <div>
                            <button type="button" class="btn btn-primary btn-icon waves-effect waves-light">
                              <i class="ri-facebook-fill fs-16"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-icon waves-effect waves-light">
                              <i class="ri-google-fill fs-16"></i>
                            </button>
                            <button type="button" class="btn btn-dark btn-icon waves-effect waves-light">
                              <i class="ri-github-fill fs-16"></i>
                            </button>
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light">
                              <i class="ri-twitter-fill fs-16"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="mt-5 text-center">
                      <p class="mb-0">
                        Don't have an account ?
                        <a href="auth-signup-cover.html" class="fw-semibold text-primary text-decoration-underline">
                          Signup</a>
                      </p>
                    </div>
                  </div>
                </div>
                <!-- end col -->
              </div>
              <!-- end row -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer galaxy-border-none">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="mb-0">
                &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                @Shark51578 Crafted with
                <i class="mdi mdi-heart text-danger"></i> by Themesbrand
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end Footer -->
  </div>
  <!-- end auth-page-wrapper -->

  <!-- JAVASCRIPT -->
  <!-- Bootstrap Bundle JS -->
  <script src="<?php echo BASE_URL . '/public/assets/libs/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
  <script src="<?php echo BASE_URL . '/public/assets/libs/simplebar/simplebar.min.js'; ?>"></script>
  <script src="<?php echo BASE_URL . '/public/assets/libs/node-waves/waves.min.js'; ?>"></script>
  <script src="<?php echo BASE_URL . '/public/assets/libs/feather-icons/feather.min.js'; ?>"></script>
  <script src="<?php echo BASE_URL . '/public/assets/js/pages/plugins/lord-icon-2.1.0.js'; ?>"></script>
  <script src="<?php echo BASE_URL . '/public/assets/js/plugins.js'; ?>"></script>
  <script src="<?php echo BASE_URL . '/public/assets/js/pages/password-addon.init.js'; ?>"></script>
</body>
