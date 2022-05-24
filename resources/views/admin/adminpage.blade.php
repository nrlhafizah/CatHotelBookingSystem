
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="shortcut icon" type="cat/png" href="img/cat.png">
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="admin/assets/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
   
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="{{url('/redirect')}}">
            <h2>MEOWIE</h2>
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{url('/redirect')}}"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome Meowie dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            
          
           
        
          <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              
              <img class="img-xs rounded-circle ml-2" src="admin/assets/images/faces/face29.jpg" alt="Profile image">
            
        @auth
                      <a href="{{ route('logout') }}"  onclick = "event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <form method="POST" action="{{ route('logout')}}">
                      @csrf
                      <a href="{{ route('logout') }}" class="dropdown-item"
                                 onclick="event.preventDefault();
                                  this.closest('form').submit();"><span class="rect"></span>
                          <i class="font-weight-normal"></i> Sign Out
                    
                      </a>
              </form>
              @csrf
              @endauth
</li>
        </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="{{url('/redirect')}}" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="admin/assets/images/faces/face29.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Nurul Hafizah</p>
                  <p class="designation">Administrator</p>
                </div>
                <div class="icon-container">
              
             
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/redirect')}}">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Management</span></li>
        
            <li class="nav-item">
              <a class="nav-link" href="{{url('/listRequest')}}">
                <span class="menu-title">Request</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/listCustomer')}}">
                <span class="menu-title">Customer</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/listProvider')}}">
                <span class="menu-title">Provider</span>
                <i class="icon-chart menu-icon"></i>
              </a>
            </li>
 
        
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            
              
            <!-- Quick Action Toolbar Starts-->
            <div class="row quick-action-toolbar">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-header d-block d-md-flex">
                    <h5 class="mb-0">Quick Actions</h5>
                    <p class="ml-auto mb-0">List Users<i class="icon-bulb"></i></p>
                  </div>
                  <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                  <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                  <a  type="button" class="btn px-0"> <i class="icon-user mr-2"></i> </a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a href="{{url('/listRequest')}}" type="button" class="btn px-0"><i class="icon-docs mr-2"></i> Request</a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a href="{{url('/listCustomer')}}" type="button" class="btn px-0"><i class="icon-folder mr-2"></i> Customer</a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a href="{{url('/listProvider')}}" class="btn px-0"><i class="icon-book-open mr-2"></i>Provider</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Quick Action Toolbar Ends-->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">System Summary</h5> </button>
                        </div>
                      </div>
                    </div>

                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">CUSTOMER</span><br>
                          <h4>{{$customer}}</h4>
                 <br>
                 
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">PROVIDER</span><br>
                          <h4>{{$provider}}</h4>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">BOOKING</span><br>
                          <h4>{{$booking}}</h4>
       
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">TOTAL USERS</span><br>
                          <h4>{{$total}}</h4>

                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
         
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">Percentage Calculation</h5> </button>
                        </div>
                      </div>
                    </div>

                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text"> 
                          <label class="w3-text-green"><b>Target Customer</b></label>
                          <input name="tot_pin_requested" onchange="calculateCust(this.value)" required>
		                      <br><br>
                          <label><b>Current percentage (%)</b></label>
                          <input class="w3-input w3-border" name="cust" id="cust" type="text" readonly>
                    </div>
                  </div>
          
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text"> 
                          <label class="w3-text-green"><b>Target Provider</b></label>
                          <input name="tot_pin_requested" onchange="calculateProv(this.value)" required>
		                      <br><br>
                          <label><b>Current percentage (%)</b></label>
                          <input class="w3-input w3-border" name="prov" id="prov" type="text" readonly>
                    </div>
                  </div>
                  <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text"> 
                          <label class="w3-text-green"><b>Target Booking</b></label>
                          <input name="tot_pin_requested" onchange="calculateBooking(this.value)" required>
		                      <br><br>
                          <label><b>Current percentage (%)</b></label>
                          <input class="w3-input w3-border" name="booking" id="booking" type="text" readonly>
                    </div>
                  </div>
                  <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text"> 
                          <label class="w3-text-green"><b>Target Total Users</b></label>
                          <input name="tot_pin_requested" onchange="calculateTotal(this.value)" required>
		                      <br><br>
                          <label><b>Current percentage (%)</b></label>
                          <input class="w3-input w3-border" name="total" id="total" type="text" readonly>
                    </div>
                  </div>
         
                  </div>
                </div>
              </div>
            </div>

            
      
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <script>
            function calculateCust(val) {
              var msg = "{{$customer}}";
                var tot_price = ((msg/val) * 100).toFixed(2);
                /*display the result*/
                var divobj = document.getElementById('cust');
                divobj.value = tot_price;
            }
        </script>
          <script>
            function calculateProv(val) {
              var msg = "{{$provider}}";
                var tot_price = ((msg/val) * 100).toFixed(2);
                /*display the result*/
                var divobj = document.getElementById('prov');
                divobj.value = tot_price;
            }
        </script>
          <script>
            function calculateBooking(val) {
              var msg = "{{$booking}}";
                var tot_price = ((msg/val) * 100).toFixed(2);
                /*display the result*/
                var divobj = document.getElementById('booking');
                divobj.value = tot_price;
            }
        </script>
          <script>
            function calculateTotal(val) {
              var msg = "{{$total}}";
                var tot_price = ((msg/val) * 100).toFixed(2);
                /*display the result*/
                var divobj = document.getElementById('total');
                divobj.value = tot_price;
            }
        </script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/moment/moment.min.js"></script>
    <script src="admin/assets/vendors/daterangepicker/daterangepicker.js"></script>
    <script src="admin/assets/vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>