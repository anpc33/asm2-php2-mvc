<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
  data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">
<!-- Mirrored from themesbrand.com/velzon/html/master/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:31:12 GMT -->

<head>
  <meta charset="utf-8" />
  <title>Analytics | Velzon - Admin & Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="<?php echo BASE_URL . '/public/assets/images/favicon.ico';  ?> " />

  <!-- plugin css -->
  <link href="<?php echo BASE_URL . '/public/assets/libs/jsvectormap/jsvectormap.min.css'; ?>" rel="stylesheet"
    type="text/css" />

  <!-- Layout config Js -->
  <script src="<?php echo BASE_URL . '/public/assets/js/layout.js'; ?> "></script>
  <!-- Bootstrap Css -->
  <link href="<?php echo BASE_URL . '/public/assets/css/bootstrap.min.css'; ?>" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="<?php echo BASE_URL . '/public/assets/css/icons.min.css'; ?>" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="<?php echo BASE_URL . '/public/assets/css/app.min.css'; ?>" rel="stylesheet" type="text/css" />
  <!-- custom Css-->
  <link href="<?php echo BASE_URL . '/public/assets/css/custom.min.css'; ?>" rel="stylesheet" type="text/css" />
</head>

<body>
  <!-- Begin page -->
  <div id="layout-wrapper">
    @extends('components.header')

    <!-- removeNotificationModal -->
    <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
              id="NotificationModalbtn-close"></button>
          </div>
          <div class="modal-body">
            <div class="mt-2 text-center">
              <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                colors="primary:#f7b84b,secondary:#f06548" style="width: 100px; height: 100px"></lord-icon>
              <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                <h4>Are you sure ?</h4>
                <p class="text-muted mx-4 mb-0">
                  Are you sure you want to remove this Notification ?
                </p>
              </div>
            </div>
            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
              <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                Close
              </button>
              <button type="button" class="btn w-sm btn-danger" id="delete-notification">
                Yes, Delete It!
              </button>
            </div>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- ========== App Menu ========== -->
    @include('components.sidebar')
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
      <div class="page-content">
        <div class="container-fluid">
          <!-- start page title -->
          @include('components.breadcrumb', ['title' => $title, 'breadcrumb' => $breadcrumb])



          <!-- end page title -->

          <div class="row">
            <div class="col-xxl-5">
              <div class="d-flex flex-column h-100">
                <div class="row h-100">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body p-0">
                        <div class="alert alert-warning border-0 rounded-0 m-0 d-flex align-items-center" role="alert">
                          <i data-feather="alert-triangle" class="text-warning me-2 icon-sm"></i>
                          <div class="flex-grow-1 text-truncate">
                            Your free trial expired in <b>17</b> days.
                          </div>
                          <div class="flex-shrink-0">
                            <a href="pages-pricing.html" class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                          </div>
                        </div>

                        <div class="row align-items-end">
                          <div class="col-sm-8">
                            <div class="p-3">
                              <p class="fs-16 lh-base">
                                Upgrade your plan from a
                                <span class="fw-semibold">Free trial</span>,
                                to ‘Premium Plan’
                                <i class="mdi mdi-arrow-right"></i>
                              </p>
                              <div class="mt-3">
                                <a href="pages-pricing.html" class="btn btn-success">Upgrade Account!</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="px-3">
                              <img src="<?php echo BASE_URL . '/public/assets/images/user-illustarator-2.png'; ?>"
                                class=" img-fluid" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end card-body-->
                    </div>
                  </div>
                  <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-animate">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <p class="fw-medium text-muted mb-0">Users</p>
                            <h2 class="mt-4 ff-secondary cfs-22 fw-semibold">
                              <span class="counter-value" data-target="28.05">0</span>k
                            </h2>
                            <p class="mb-0 text-muted text-truncate">
                              <span class="badge bg-light text-success mb-0">
                                <i class="ri-arrow-up-line align-middle"></i>
                                16.24 %
                              </span>
                              vs. previous month
                            </p>
                          </div>
                          <div>
                            <div class="avatar-sm flex-shrink-0">
                              <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                <i data-feather="users" class="text-info"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end card body -->
                    </div>
                    <!-- end card-->
                  </div>
                  <!-- end col-->

                  <div class="col-md-6">
                    <div class="card card-animate">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <p class="fw-medium text-muted mb-0">Sessions</p>
                            <h2 class="mt-4 ff-secondary cfs-22 fw-semibold">
                              <span class="counter-value" data-target="97.66">0</span>k
                            </h2>
                            <p class="mb-0 text-muted text-truncate">
                              <span class="badge bg-light text-danger mb-0">
                                <i class="ri-arrow-down-line align-middle"></i>
                                3.96 %
                              </span>
                              vs. previous month
                            </p>
                          </div>
                          <div>
                            <div class="avatar-sm flex-shrink-0">
                              <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                <i data-feather="activity" class="text-info"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end card body -->
                    </div>
                    <!-- end card-->
                  </div>
                  <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-animate">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <p class="fw-medium text-muted mb-0">
                              Avg. Visit Duration
                            </p>
                            <h2 class="mt-4 ff-secondary cfs-22 fw-semibold">
                              <span class="counter-value" data-target="3">0</span>m
                              <span class="counter-value" data-target="40">0</span>sec
                            </h2>
                            <p class="mb-0 text-muted text-truncate">
                              <span class="badge bg-light text-danger mb-0">
                                <i class="ri-arrow-down-line align-middle"></i>
                                0.24 %
                              </span>
                              vs. previous month
                            </p>
                          </div>
                          <div>
                            <div class="avatar-sm flex-shrink-0">
                              <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                <i data-feather="clock" class="text-info"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end card body -->
                    </div>
                    <!-- end card-->
                  </div>
                  <!-- end col-->

                  <div class="col-md-6">
                    <div class="card card-animate">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <p class="fw-medium text-muted mb-0">
                              Bounce Rate
                            </p>
                            <h2 class="mt-4 ff-secondary cfs-22 fw-semibold">
                              <span class="counter-value" data-target="33.48">0</span>%
                            </h2>
                            <p class="mb-0 text-muted text-truncate">
                              <span class="badge bg-light text-success mb-0">
                                <i class="ri-arrow-up-line align-middle"></i>
                                7.05 %
                              </span>
                              vs. previous month
                            </p>
                          </div>
                          <div>
                            <div class="avatar-sm flex-shrink-0">
                              <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                <i data-feather="external-link" class="text-info"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end card body -->
                    </div>
                    <!-- end card-->
                  </div>
                  <!-- end col-->
                </div>
                <!-- end row-->
              </div>
            </div>
            <!-- end col-->

            <div class="col-xxl-7">
              <div class="row h-100">
                <div class="col-xl-6">
                  <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                      <h4 class="card-title mb-0 flex-grow-1">
                        Live Users By Country
                      </h4>
                      <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-primary btn-sm material-shadow-none">
                          Export Report
                        </button>
                      </div>
                    </div>
                    <!-- end card header -->

                    <!-- card body -->
                    <div class="card-body">
                      <div id="users-by-country" data-colors='["--vz-light"]' class="text-center" style="height: 252px">
                      </div>

                      <div class="table-responsive table-card mt-3">
                        <table class="table table-borderless table-sm table-centered align-middle table-nowrap mb-1">
                          <thead class="text-muted border-dashed border border-start-0 border-end-0 bg-light-subtle">
                            <tr>
                              <th>Duration (Secs)</th>
                              <th style="width: 30%">Sessions</th>
                              <th style="width: 30%">Views</th>
                            </tr>
                          </thead>
                          <tbody class="border-0">
                            <tr>
                              <td>0-30</td>
                              <td>2,250</td>
                              <td>4,250</td>
                            </tr>
                            <tr>
                              <td>31-60</td>
                              <td>1,501</td>
                              <td>2,050</td>
                            </tr>
                            <tr>
                              <td>61-120</td>
                              <td>750</td>
                              <td>1,600</td>
                            </tr>
                            <tr>
                              <td>121-240</td>
                              <td>540</td>
                              <td>1,040</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- end card body -->
                  </div>
                  <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-6">
                  <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                      <h4 class="card-title mb-0 flex-grow-1">
                        Sessions by Countries
                      </h4>
                      <div>
                        <button type="button" class="btn btn-soft-secondary btn-sm material-shadow-none">
                          ALL
                        </button>
                        <button type="button" class="btn btn-soft-primary btn-sm material-shadow-none">
                          1M
                        </button>
                        <button type="button" class="btn btn-soft-secondary btn-sm material-shadow-none">
                          6M
                        </button>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div>
                        <div id="countries_charts"
                          data-colors='["--vz-info", "--vz-info", "--vz-info", "--vz-info", "--vz-danger", "--vz-info", "--vz-info", "--vz-info", "--vz-info", "--vz-info"]'
                          data-colors-minimal='["--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary-rgb, 0.45", "--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary"]'
                          data-colors-material='["--vz-primary", "--vz-primary", "--vz-info", "--vz-info", "--vz-danger", "--vz-primary", "--vz-primary", "--vz-warning", "--vz-primary", "--vz-primary"]'
                          data-colors-galaxy='["--vz-primary-rgb, 0.4", "--vz-primary-rgb, 0.4", "--vz-primary-rgb, 0.4", "--vz-primary-rgb, 0.4", "--vz-primary", "--vz-primary-rgb, 0.4", "--vz-primary-rgb, 0.4", "--vz-primary-rgb, 0.4", "--vz-primary-rgb, 0.4", "--vz-primary-rgb, 0.4"]'
                          data-colors-classic='["--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary-rgb, 0.45", "--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary"]'
                          class="apex-charts" dir="ltr"></div>
                      </div>
                    </div>
                    <!-- end card body -->
                  </div>
                  <!-- end card -->
                </div>
                <!-- end col-->
              </div>
              <!-- end row-->
            </div>
            <!-- end col -->
          </div>
          <!-- end row-->

          <div class="row">
            <div class="col-xl-6">
              <div class="card">
                <div class="card-header border-0 align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">
                    Audiences Metrics
                  </h4>
                  <div>
                    <button type="button" class="btn btn-soft-secondary btn-sm material-shadow-none">
                      ALL
                    </button>
                    <button type="button" class="btn btn-soft-secondary btn-sm material-shadow-none">
                      1M
                    </button>
                    <button type="button" class="btn btn-soft-secondary btn-sm material-shadow-none">
                      6M
                    </button>
                    <button type="button" class="btn btn-soft-primary btn-sm material-shadow-none">
                      1Y
                    </button>
                  </div>
                </div>
                <!-- end card header -->
                <div class="card-header p-0 border-0 bg-light-subtle">
                  <div class="row g-0 text-center">
                    <div class="col-6 col-sm-4">
                      <div class="p-3 border border-dashed border-start-0">
                        <h5 class="mb-1">
                          <span class="counter-value" data-target="854">0</span>
                          <span class="text-success ms-1 fs-12">49%<i
                              class="ri-arrow-right-up-line ms-1 align-middle"></i></span>
                        </h5>
                        <p class="text-muted mb-0">Avg. Session</p>
                      </div>
                    </div>
                    <!--end col-->
                    <div class="col-6 col-sm-4">
                      <div class="p-3 border border-dashed border-start-0">
                        <h5 class="mb-1">
                          <span class="counter-value" data-target="1278">0</span>
                          <span class="text-success ms-1 fs-12">60%<i
                              class="ri-arrow-right-up-line ms-1 align-middle"></i></span>
                        </h5>
                        <p class="text-muted mb-0">Conversion Rate</p>
                      </div>
                    </div>
                    <!--end col-->
                    <div class="col-6 col-sm-4">
                      <div class="p-3 border border-dashed border-start-0 border-end-0">
                        <h5 class="mb-1">
                          <span class="counter-value" data-target="3">0</span>m
                          <span class="counter-value" data-target="40">0</span>sec
                          <span class="text-success ms-1 fs-12">37%<i
                              class="ri-arrow-right-up-line ms-1 align-middle"></i></span>
                        </h5>
                        <p class="text-muted mb-0">Avg. Session Duration</p>
                      </div>
                    </div>
                    <!--end col-->
                  </div>
                </div>
                <!-- end card header -->
                <div class="card-body p-0 pb-2">
                  <div>
                    <div id="audiences_metrics_charts" data-colors='["--vz-success", "--vz-light"]'
                      data-colors-minimal='["--vz-primary", "--vz-light"]'
                      data-colors-modern='["--vz-primary", "--vz-light"]'
                      data-colors-interactive='["--vz-primary", "--vz-light"]'
                      data-colors-creative='["--vz-secondary", "--vz-light"]'
                      data-colors-corporate='["--vz-primary", "--vz-light"]'
                      data-colors-galaxy='["--vz-primary", "--vz-light"]'
                      data-colors-classic='["--vz-primary", "--vz-secondary"]'
                      data-colors-vintage='["--vz-primary", "--vz-success-rgb, 0.5"]' class="apex-charts" dir="ltr">
                    </div>
                  </div>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-6">
              <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">
                    Audiences Sessions by Country
                  </h4>
                  <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                      <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Current
                          Week<i class="mdi mdi-chevron-down ms-1"></i></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Today</a>
                        <a class="dropdown-item" href="#">Last Week</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Current Year</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end card header -->
                <div class="card-body p-0">
                  <div>
                    <div id="audiences-sessions-country-charts" data-colors='["--vz-success", "--vz-info"]'
                      data-colors-minimal='["--vz-info", "--vz-primary"]'
                      data-colors-modern='["--vz-success", "--vz-secondary"]'
                      data-colors-interactive='["--vz-info", "--vz-primary"]'
                      data-colors-creative='["--vz-primary", "--vz-success"]'
                      data-colors-corporate='["--vz-secondary", "--vz-primary"]'
                      data-colors-galaxy='["--vz-primary", "--vz-secondary"]'
                      data-colors-classic='["--vz-primary", "--vz-danger"]'
                      data-colors-vintage='["--vz-success", "--vz-secondary"]' class="apex-charts" dir="ltr"></div>
                  </div>
                </div>
                <!-- end cardbody -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->

          <div class="row">
            <div class="col-xl-4">
              <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">Users by Device</h4>
                  <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                      <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Today</a>
                        <a class="dropdown-item" href="#">Last Week</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Current Year</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end card header -->
                <div class="card-body">
                  <div id="user_device_pie_charts" data-colors='["--vz-primary", "--vz-warning", "--vz-info"]'
                    data-colors-minimal='["--vz-primary", "--vz-primary-rgb, 0.60", "--vz-primary-rgb, 0.75"]'
                    data-colors-galaxy='["--vz-primary", "--vz-primary-rgb, .75", "--vz-primary-rgb, 0.60"]'
                    class="apex-charts" dir="ltr"></div>

                  <div class="table-responsive mt-3">
                    <table class="table table-borderless table-sm table-centered align-middle table-nowrap mb-0">
                      <tbody class="border-0">
                        <tr>
                          <td>
                            <h4 class="text-truncate fs-14 fs-medium mb-0">
                              <i class="ri-stop-fill align-middle fs-18 text-primary me-2"></i>Desktop Users
                            </h4>
                          </td>
                          <td>
                            <p class="text-muted mb-0">
                              <i data-feather="users" class="me-2 icon-sm"></i>78.56k
                            </p>
                          </td>
                          <td class="text-end">
                            <p class="text-success fw-medium fs-12 mb-0">
                              <i class="ri-arrow-up-s-fill fs-5 align-middle"></i>2.08%
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h4 class="text-truncate fs-14 fs-medium mb-0">
                              <i class="ri-stop-fill align-middle fs-18 text-warning me-2"></i>Mobile Users
                            </h4>
                          </td>
                          <td>
                            <p class="text-muted mb-0">
                              <i data-feather="users" class="me-2 icon-sm"></i>105.02k
                            </p>
                          </td>
                          <td class="text-end">
                            <p class="text-danger fw-medium fs-12 mb-0">
                              <i class="ri-arrow-down-s-fill fs-5 align-middle"></i>10.52%
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h4 class="text-truncate fs-14 fs-medium mb-0">
                              <i class="ri-stop-fill align-middle fs-18 text-info me-2"></i>Tablet Users
                            </h4>
                          </td>
                          <td>
                            <p class="text-muted mb-0">
                              <i data-feather="users" class="me-2 icon-sm"></i>42.89k
                            </p>
                          </td>
                          <td class="text-end">
                            <p class="text-danger fw-medium fs-12 mb-0">
                              <i class="ri-arrow-down-s-fill fs-5 align-middle"></i>7.36%
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-4 col-md-6">
              <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">
                    Top Referrals Pages
                  </h4>
                  <div class="flex-shrink-0">
                    <button type="button" class="btn btn-soft-primary btn-sm material-shadow-none">
                      Export Report
                    </button>
                  </div>
                </div>

                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-6">
                      <h6 class="text-muted text-uppercase fw-semibold text-truncate fs-12 mb-3">
                        Total Referrals Page
                      </h6>
                      <h4 class="mb-0">725,800</h4>
                      <p class="mb-0 mt-2 text-muted">
                        <span class="badge bg-success-subtle text-success mb-0">
                          <i class="ri-arrow-up-line align-middle"></i> 15.72
                          %
                        </span>
                        vs. previous month
                      </p>
                    </div>
                    <!-- end col -->
                    <div class="col-6">
                      <div class="text-center">
                        <img src="<?php echo BASE_URL . '/public/assets/images/illustrator-1.png'; ?>" class="img-fluid"
                          alt="" />
                      </div>
                    </div>
                    <!-- end col -->
                  </div>
                  <!-- end row -->
                  <div class="mt-3 pt-2">
                    <div class="progress progress-lg rounded-pill">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-info" role="progressbar" style="width: 18%" aria-valuenow="18"
                        aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-success" role="progressbar" style="width: 22%" aria-valuenow="22"
                        aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 16%" aria-valuenow="16"
                        aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 19%" aria-valuenow="19"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <!-- end -->

                  <div class="mt-3 pt-2">
                    <div class="d-flex mb-2">
                      <div class="flex-grow-1">
                        <p class="text-truncate text-muted fs-14 mb-0">
                          <i class="mdi mdi-circle align-middle text-primary me-2"></i>www.google.com
                        </p>
                      </div>
                      <div class="flex-shrink-0">
                        <p class="mb-0">24.58%</p>
                      </div>
                    </div>
                    <!-- end -->
                    <div class="d-flex mb-2">
                      <div class="flex-grow-1">
                        <p class="text-truncate text-muted fs-14 mb-0">
                          <i class="mdi mdi-circle align-middle text-info me-2"></i>www.youtube.com
                        </p>
                      </div>
                      <div class="flex-shrink-0">
                        <p class="mb-0">17.51%</p>
                      </div>
                    </div>
                    <!-- end -->
                    <div class="d-flex mb-2">
                      <div class="flex-grow-1">
                        <p class="text-truncate text-muted fs-14 mb-0">
                          <i class="mdi mdi-circle align-middle text-success me-2"></i>www.meta.com
                        </p>
                      </div>
                      <div class="flex-shrink-0">
                        <p class="mb-0">23.05%</p>
                      </div>
                    </div>
                    <!-- end -->
                    <div class="d-flex mb-2">
                      <div class="flex-grow-1">
                        <p class="text-truncate text-muted fs-14 mb-0">
                          <i class="mdi mdi-circle align-middle text-warning me-2"></i>www.medium.com
                        </p>
                      </div>
                      <div class="flex-shrink-0">
                        <p class="mb-0">12.22%</p>
                      </div>
                    </div>
                    <!-- end -->
                    <div class="d-flex">
                      <div class="flex-grow-1">
                        <p class="text-truncate text-muted fs-14 mb-0">
                          <i class="mdi mdi-circle align-middle text-danger me-2"></i>Other
                        </p>
                      </div>
                      <div class="flex-shrink-0">
                        <p class="mb-0">17.58%</p>
                      </div>
                    </div>
                    <!-- end -->
                  </div>
                  <!-- end -->

                  <div class="mt-2 text-center">
                    <a href="javascript:void(0);" class="text-muted text-decoration-underline">Show All</a>
                  </div>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-4 col-md-6">
              <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">Top Pages</h4>
                  <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                      <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Today</a>
                        <a class="dropdown-item" href="#">Last Week</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Current Year</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end card header -->
                <div class="card-body">
                  <div class="table-responsive table-card">
                    <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
                      <thead class="text-muted table-light">
                        <tr>
                          <th scope="col" style="width: 62">Active Page</th>
                          <th scope="col">Active</th>
                          <th scope="col">Users</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <a href="javascript:void(0);">/themesbrand/skote-25867</a>
                          </td>
                          <td>99</td>
                          <td>25.3%</td>
                        </tr>
                        <!-- end -->
                        <tr>
                          <td>
                            <a href="javascript:void(0);">/dashonic/chat-24518</a>
                          </td>
                          <td>86</td>
                          <td>22.7%</td>
                        </tr>
                        <!-- end -->
                        <tr>
                          <td>
                            <a href="javascript:void(0);">/skote/timeline-27391</a>
                          </td>
                          <td>64</td>
                          <td>18.7%</td>
                        </tr>
                        <!-- end -->
                        <tr>
                          <td>
                            <a href="javascript:void(0);">/themesbrand/minia-26441</a>
                          </td>
                          <td>53</td>
                          <td>14.2%</td>
                        </tr>
                        <!-- end -->
                        <tr>
                          <td>
                            <a href="javascript:void(0);">/dashon/dashboard-29873</a>
                          </td>
                          <td>33</td>
                          <td>12.6%</td>
                        </tr>
                        <!-- end -->
                        <tr>
                          <td>
                            <a href="javascript:void(0);">/doot/chats-29964</a>
                          </td>
                          <td>20</td>
                          <td>10.9%</td>
                        </tr>
                        <!-- end -->
                        <tr>
                          <td>
                            <a href="javascript:void(0);">/steex/pages-29739</a>
                          </td>
                          <td>10</td>
                          <td>07.3%</td>
                        </tr>
                        <!-- end -->
                      </tbody>
                      <!-- end tbody -->
                    </table>
                    <!-- end table -->
                  </div>
                  <!-- end -->
                </div>
                <!-- end cardbody -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

      @extends('components.footer')
    </div>
    <!-- end main content-->
  </div>
  <!-- END layout-wrapper -->

  <!--start back-to-top-->
  <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
  </button>
  <!--end back-to-top-->

  <!--preloader-->
  <div id="preloader">
    <div id="status">
      <div class="spinner-border text-primary avatar-sm" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </div>

  <div class="customizer-setting d-none d-md-block">
    <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
      data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
      <i class="mdi mdi-spin mdi-cog-outline fs-22"></i>
    </div>
  </div>

  <!-- Theme Settings -->
  <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
      <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

      <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn"
        data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
      <div data-simplebar class="h-100">
        <div class="p-4">
          <h6 class="mb-0 fw-semibold text-uppercase">Layout</h6>
          <p class="text-muted">Choose your layout</p>

          <div class="row gy-3">
            <div class="col-4">
              <div class="form-check card-radio">
                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical"
                  class="form-check-input" />
                <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="customizer-layout01">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Vertical</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio">
                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal"
                  class="form-check-input" />
                <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="customizer-layout02">
                  <span class="d-flex h-100 flex-column gap-1">
                    <span class="bg-light d-flex p-1 gap-1 align-items-center">
                      <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                      <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                      <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                    </span>
                    <span class="bg-light d-block p-1"></span>
                    <span class="bg-light d-block p-1 mt-auto"></span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Horizontal</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio">
                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn"
                  class="form-check-input" />
                <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="customizer-layout03">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1">
                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                      </span>
                    </span>
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Two Column</h5>
            </div>
            <!-- end col -->

            <div class="col-4">
              <div class="form-check card-radio">
                <input id="customizer-layout04" name="data-layout" type="radio" value="semibox"
                  class="form-check-input" />
                <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="customizer-layout04">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0 p-1">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column pt-1 pe-2">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Semi Box</h5>
            </div>
            <!-- end col -->
          </div>

          <div class="form-check form-switch form-switch-md mb-3 mt-4">
            <input type="checkbox" class="form-check-input" id="sidebarUserProfile" />
            <label class="form-check-label" for="sidebarUserProfile">Sidebar User Profile Avatar</label>
          </div>

          <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Theme</h6>
          <p class="text-muted">Choose your suitable Theme.</p>

          <div class="row">
            <div class="col-6">
              <div class="form-check card-radio">
                <input id="customizer-theme01" name="data-theme" type="radio" value="default"
                  class="form-check-input" />
                <label class="form-check-label p-0" for="customizer-theme01">
                  <img src="../../<?php echo BASE_URL . '/public/assets/images/demo/default.png'; ?>" alt=""
                    class="img-fluid" />
                </label>
              </div>
              <h5 class="fs-13 text-center fw-medium mt-2">Default</h5>
            </div>
            <div class="col-6">
              <div class="form-check card-radio">
                <input id="customizer-theme02" name="data-theme" type="radio" value="saas" class="form-check-input" />
                <label class="form-check-label p-0" for="customizer-theme02">
                  <img src="../../<?php echo BASE_URL . '/public/assets/images/demo/saas.png'; ?>" alt=""
                    class="img-fluid" />
                </label>
              </div>
              <h5 class="fs-13 text-center fw-medium mt-2">Sass</h5>
            </div>
            <div class="col-6">
              <div class="form-check card-radio">
                <input id="customizer-theme03" name="data-theme" type="radio" value="corporate"
                  class="form-check-input" />
                <label class="form-check-label p-0" for="customizer-theme03">
                  <img src="../../<?php echo BASE_URL . '/public/assets/images/demo/corporate.png'; ?>" alt=""
                    class="img-fluid" />
                </label>
              </div>
              <h5 class="fs-13 text-center fw-medium mt-2">Corporate</h5>
            </div>
            <div class="col-6">
              <div class="form-check card-radio">
                <input id="customizer-theme04" name="data-theme" type="radio" value="galaxy" class="form-check-input" />
                <label class="form-check-label p-0" for="customizer-theme04">
                  <img src="../../<?php echo BASE_URL . '/public/assets/images/demo/galaxy.png'; ?>" alt=""
                    class="img-fluid" />
                </label>
              </div>
              <h5 class="fs-13 text-center fw-medium mt-2">Galaxy</h5>
            </div>
            <div class="col-6">
              <div class="form-check card-radio">
                <input id="customizer-theme05" name="data-theme" type="radio" value="material"
                  class="form-check-input" />
                <label class="form-check-label p-0" for="customizer-theme05">
                  <img src="../../<?php echo BASE_URL . '/public/assets/images/demo/material.png'; ?>" alt=""
                    class="img-fluid" />
                </label>
              </div>
              <h5 class="fs-13 text-center fw-medium mt-2">Material</h5>
            </div>
            <div class="col-6">
              <div class="form-check card-radio">
                <input id="customizer-theme06" name="data-theme" type="radio" value="creative"
                  class="form-check-input" />
                <label class="form-check-label p-0" for="customizer-theme06">
                  <img src="../../<?php echo BASE_URL . '/public/assets/images/demo/creative.png'; ?>" alt=""
                    class="img-fluid" />
                </label>
              </div>
              <h5 class="fs-13 text-center fw-medium mt-2">Creative</h5>
            </div>
            <div class="col-6">
              <div class="form-check card-radio">
                <input id="customizer-theme07" name="data-theme" type="radio" value="minimal"
                  class="form-check-input" />
                <label class="form-check-label p-0" for="customizer-theme07">
                  <img src="../../<?php echo BASE_URL . '/public/assets/images/demo/minimal.png'; ?>" alt=""
                    class="img-fluid" />
                </label>
              </div>
              <h5 class="fs-13 text-center fw-medium mt-2">Minimal</h5>
            </div>
            <div class="col-6">
              <div class="form-check card-radio">
                <input id="customizer-theme08" name="data-theme" type="radio" value="modern" class="form-check-input" />
                <label class="form-check-label p-0" for="customizer-theme08">
                  <img src="../../<?php echo BASE_URL . '/public/assets/images/demo/modern.png'; ?>" alt=""
                    class="img-fluid" />
                </label>
              </div>
              <h5 class="fs-13 text-center fw-medium mt-2">Modern</h5>
            </div>
            <!-- end col -->
            <div class="col-6">
              <div class="form-check card-radio">
                <input id="customizer-theme09" name="data-theme" type="radio" value="interactive"
                  class="form-check-input" />
                <label class="form-check-label p-0" for="customizer-theme09">
                  <img src="../../<?php echo BASE_URL . '/public/assets/images/demo/interactive.png'; ?>" alt=""
                    class="img-fluid" />
                </label>
              </div>
              <h5 class="fs-13 text-center fw-medium mt-2">Interactive</h5>
            </div>
            <!-- end col -->

            <div class="col-6">
              <div class="form-check card-radio">
                <input id="customizer-theme10" name="data-theme" type="radio" value="classic"
                  class="form-check-input" />
                <label class="form-check-label p-0" for="customizer-theme10">
                  <img src="../../<?php echo BASE_URL . '/public/assets/images/demo/classic.png'; ?>" alt=""
                    class="img-fluid" />
                </label>
              </div>
              <h5 class="fs-13 text-center fw-medium mt-2">Classic</h5>
            </div>
            <!-- end col -->

            <div class="col-6">
              <div class="form-check card-radio">
                <input id="customizer-theme11" name="data-theme" type="radio" value="vintage"
                  class="form-check-input" />
                <label class="form-check-label p-0" for="customizer-theme11">
                  <img src="../../<?php echo BASE_URL . '/public/assets/images/demo/vintage.png'; ?>" alt=""
                    class="img-fluid" />
                </label>
              </div>
              <h5 class="fs-13 text-center fw-medium mt-2">Vintage</h5>
            </div>
            <!-- end col -->
          </div>

          <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Color Scheme</h6>
          <p class="text-muted">Choose Light or Dark Scheme.</p>

          <div class="colorscheme-cardradio">
            <div class="row">
              <div class="col-4">
                <div class="form-check card-radio">
                  <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light"
                    value="light" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="layout-mode-light">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Light</h5>
              </div>

              <div class="col-4">
                <div class="form-check card-radio dark">
                  <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark"
                    value="dark" />
                  <label class="form-check-label p-0 avatar-md w-100 bg-dark material-shadow" for="layout-mode-dark">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-white bg-opacity-10 d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-white bg-opacity-10 d-block p-1"></span>
                          <span class="bg-white bg-opacity-10 d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Dark</h5>
              </div>
            </div>
          </div>

          <div id="sidebar-visibility">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">
              Sidebar Visibility
            </h6>
            <p class="text-muted">Choose show or Hidden sidebar.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar-visibility"
                    id="sidebar-visibility-show" value="show" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="sidebar-visibility-show">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0 p-1">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column pt-1 pe-2">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Show</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar-visibility"
                    id="sidebar-visibility-hidden" value="hidden" />
                  <label class="form-check-label p-0 avatar-md w-100 px-2 material-shadow"
                    for="sidebar-visibility-hidden">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column pt-1 px-2">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Hidden</h5>
              </div>
            </div>
          </div>

          <div id="layout-width">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Width</h6>
            <p class="text-muted">Choose Fluid or Boxed layout.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check card-radio">
                  <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid"
                    value="fluid" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="layout-width-fluid">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Fluid</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio">
                  <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed"
                    value="boxed" />
                  <label class="form-check-label p-0 avatar-md w-100 px-2 material-shadow" for="layout-width-boxed">
                    <span class="d-flex gap-1 h-100 border-start border-end">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Boxed</h5>
              </div>
            </div>
          </div>

          <div id="layout-position">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">
              Layout Position
            </h6>
            <p class="text-muted">
              Choose Fixed or Scrollable Layout Position.
            </p>

            <div class="btn-group radio" role="group">
              <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed"
                value="fixed" />
              <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

              <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable"
                value="scrollable" />
              <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
            </div>
          </div>
          <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Topbar Color</h6>
          <p class="text-muted">Choose Light or Dark Topbar Color.</p>

          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio">
                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light" />
                <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="topbar-color-light">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Light</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio">
                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark" />
                <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="topbar-color-dark">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-primary d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Dark</h5>
            </div>
          </div>

          <div id="sidebar-size">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Size</h6>
            <p class="text-muted">Choose a size of Sidebar.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default"
                    value="lg" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="sidebar-size-default">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Default</h5>
              </div>

              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact"
                    value="md" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="sidebar-size-compact">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                          <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Compact</h5>
              </div>

              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small"
                    value="sm" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="sidebar-size-small">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1">
                          <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                          <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
              </div>

              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover"
                    value="sm-hover" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="sidebar-size-small-hover">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1">
                          <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                          <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
              </div>
            </div>
          </div>

          <div id="sidebar-view">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar View</h6>
            <p class="text-muted">Choose Default or Detached Sidebar view.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default"
                    value="default" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="sidebar-view-default">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Default</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached"
                    value="detached" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="sidebar-view-detached">
                    <span class="d-flex h-100 flex-column">
                      <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                        <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                        <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                        <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                      </span>
                      <span class="d-flex gap-1 h-100 p-1 px-2">
                        <span class="flex-shrink-0">
                          <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          </span>
                        </span>
                      </span>
                      <span class="bg-light d-block p-1 mt-auto px-2"></span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Detached</h5>
              </div>
            </div>
          </div>
          <div id="sidebar-color">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">
              Sidebar Color
            </h6>
            <p class="text-muted">Choose a color of Sidebar.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                  data-bs-target="#collapseBgGradient.show">
                  <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light"
                    value="light" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="sidebar-color-light">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Light</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                  data-bs-target="#collapseBgGradient.show">
                  <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark"
                    value="dark" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="sidebar-color-dark">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Dark</h5>
              </div>
              <div class="col-4">
                <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false"
                  aria-controls="collapseBgGradient">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0">
                      <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                        <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </button>
                <h5 class="fs-13 text-center mt-2">Gradient</h5>
              </div>
            </div>
            <!-- end row -->

            <div class="collapse" id="collapseBgGradient">
              <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient"
                    value="gradient" />
                  <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                    <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                  </label>
                </div>
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2"
                    value="gradient-2" />
                  <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                    <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                  </label>
                </div>
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3"
                    value="gradient-3" />
                  <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                    <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                  </label>
                </div>
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4"
                    value="gradient-4" />
                  <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                    <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div id="sidebar-img">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">
              Sidebar Images
            </h6>
            <p class="text-muted">Choose a image of Sidebar.</p>

            <div class="d-flex gap-2 flex-wrap img-switch">
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none"
                  value="none" />
                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                  <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                    <i class="ri-close-fill fs-20"></i>
                  </span>
                </label>
              </div>

              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01"
                  value="img-1" />
                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                  <img src="<?php echo BASE_URL . '/public/assets/images/sidebar/img-1.jpg'; ?>" alt=""
                    class="avatar-md w-auto object-fit-cover" />
                </label>
              </div>

              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02"
                  value="img-2" />
                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                  <img src="<?php echo BASE_URL . '/public/assets/images/sidebar/img-2.jpg'; ?>" alt=""
                    class="avatar-md w-auto object-fit-cover" />
                </label>
              </div>
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03"
                  value="img-3" />
                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                  <img src="<?php echo BASE_URL . '/public/assets/images/sidebar/img-3.jpg'; ?>" alt=""
                    class="avatar-md w-auto object-fit-cover" />
                </label>
              </div>
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04"
                  value="img-4" />
                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                  <img src="<?php echo BASE_URL . '/public/assets/images/sidebar/img-4.jpg'; ?>" alt=""
                    class="avatar-md w-auto object-fit-cover" />
                </label>
              </div>
            </div>
          </div>

          <div id="sidebar-color">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">
              Primary Color
            </h6>
            <p class="text-muted">Choose a color of Primary.</p>

            <div class="d-flex flex-wrap gap-2">
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-theme-colors" id="themeColor-01"
                  value="default" />
                <label class="form-check-label avatar-xs p-0" for="themeColor-01"></label>
              </div>
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-theme-colors" id="themeColor-02"
                  value="green" />
                <label class="form-check-label avatar-xs p-0" for="themeColor-02"></label>
              </div>
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-theme-colors" id="themeColor-03"
                  value="purple" />
                <label class="form-check-label avatar-xs p-0" for="themeColor-03"></label>
              </div>
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-theme-colors" id="themeColor-04" value="blue" />
                <label class="form-check-label avatar-xs p-0" for="themeColor-04"></label>
              </div>
            </div>
          </div>

          <div id="preloader-menu">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Preloader</h6>
            <p class="text-muted">Choose a preloader.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom"
                    value="enable" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="preloader-view-custom">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                    <!-- <div id="preloader"> -->
                    <div id="status" class="d-flex align-items-center justify-content-center">
                      <div class="spinner-border text-primary avatar-xxs m-auto" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div>
                    </div>
                    <!-- </div> -->
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Enable</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none"
                    value="disable" />
                  <label class="form-check-label p-0 avatar-md w-100 material-shadow" for="preloader-view-none">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Disable</h5>
              </div>
            </div>
          </div>
          <!-- end preloader-menu -->

          <div id="body-img" style="display: none">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">
              Background Image
            </h6>
            <p class="text-muted">Choose a body background image.</p>

            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-body-image" id="body-img-none" value="none" />
                  <label class="form-check-label p-0 avatar-md w-100" data-body-image="none" for="body-img-none">
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                          <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                        </span>
                      </span>
                      <span class="flex-grow-1">
                        <span class="d-flex h-100 flex-column">
                          <span class="bg-light d-block p-1"></span>
                          <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">None</h5>
              </div>
              <!-- end col -->
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-body-image" id="body-img-one" value="img-1" />
                  <label class="form-check-label p-0 avatar-md w-100" data-body-image="img-1" for="body-img-one">
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">One</h5>
              </div>
              <!-- end col -->

              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-body-image" id="body-img-two" value="img-2" />
                  <label class="form-check-label p-0 avatar-md w-100" data-body-image="img-2" for="body-img-two">
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Two</h5>
              </div>
              <!-- end col -->

              <div class="col-4">
                <div class="form-check sidebar-setting card-radio">
                  <input class="form-check-input" type="radio" name="data-body-image" id="body-img-three"
                    value="img-3" />
                  <label class="form-check-label p-0 avatar-md w-100" data-body-image="img-3" for="body-img-three">
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Three</h5>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
      <div class="row">
        <div class="col-6">
          <button type="button" class="btn btn-light w-100" id="reset-layout">
            Reset
          </button>
        </div>
        <div class="col-6">
          <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn btn-primary w-100">Buy Now</a>
        </div>
      </div>
    </div>
  </div>

  @extends('components.script')
</body>

<!-- Mirrored from themesbrand.com/velzon/html/master/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:31:13 GMT -->

</html>
