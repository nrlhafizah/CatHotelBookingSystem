
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
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
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
              <a href="#" class="nav-link">
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
 
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="admin/assets/pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin/assets/pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin/assets/pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin/assets/pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin/assets/pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
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
            

            <div class="container">
        <form action="{{url('/custSearch')}}" method="POST" role="search" value="PUT">
          {{csrf_field()}}

          <div class="input-group">
            <input type="text" class="form-control" name="q" placeholder="Search for"><span class="input-group-btn">
             <button type="submit" class="btn btn-info">
         <i class="fas fa-search fa-sm"></i> Search
        </button>
            </span>
            
          </div>

        </form> 
      </div> <br/><br/>

     

            @include('flash-message')
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Customer List</h4>
                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      @if(request()->has('view_deleted'))
                      <a href="{{ route('customer.index') }}" class="badge badge-warning p-2" >View All List</a>
                      &ensp;
                      <a href="{{ route('post.restore_all') }}" class="badge badge-warning p-2" >Restore All</a>
                      @else
                      &emsp;&emsp;
                    <a href="{{ route('customer.index', ['view_deleted' => 'DeletedRecords']) }}" class="badge badge-warning p-2">View Deleted Data</a>

                      @endif
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                        <tr>
                            
                            <th class="font-weight-bold">Name</th>
                            <th class="font-weight-bold">Email</th>
                            <th class="font-weight-bold">Created at</th>
                            <th class="font-weight-bold">Updated at</th>
                            <th class="font-weight-bold">  </th>
                       
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $user)
                       
                        @if ($user->usertype=='1')
                        
                      
                        <tr>
                           
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                   

                          @if(request()->has('view_deleted'))
<td>
                            <a href="{{ route('post.restore', $user->id) }}" class="badge badge-warning p-2">Restore</a>
                                        @else
                          
                            <form action="/deletecustomer/{{$user->id}}" method="post" >
</td>
                            @csrf
                            <td>
                            <input type="hidden" name="_method" value="DELETE" />
                              <button type="submit" class="badge badge-warning p-2">Delete</button>
                            </td>
                            </form>
                       @endif
                            
                          </tr>

                  
                        </tbody>
                       
                        
                        @endif
                       
                        @endforeach

                        <br/>
         

                      </table>
                    </div>
                    
     
      
                        <!-- <ul class="pagination separated pagination-info">
                          <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                          <li class="page-item active"><a href="#" class="page-link">1</a></li>
                          <li class="page-item"><a href="#" class="page-link">2</a></li>
                          <li class="page-item"><a href="#" class="page-link">3</a></li>
                          <li class="page-item"><a href="#" class="page-link">4</a></li>
                          <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                        </ul>
                      </nav>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? Nurul Hafizah</span>
            <style>

              .w-5
              {
                    display:none;
              }
              </style>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
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