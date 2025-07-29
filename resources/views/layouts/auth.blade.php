<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vaganza</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/auth/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/auth/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/auth/images/favicon.ico') }}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('assets/auth/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/vendor/fonts/circular-std/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/csss/style.css') }}">
    
    @yield('styles')

  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('assets/auth/images/logov.svg') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/auth/images/logov.svg') }}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>

          <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>

            <li class="nav-item nav-logout d-none d-lg-block">
              <form id="logout-form" method="post" action="{{ route('logout') }}">
                @csrf
                <a id="logout-button" class="nav-link" href="#">
                  <i class="mdi mdi-power"></i>
                </a>
              </form>
             
            </li>

          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
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
                <div class="nav-profile-image">
                  <img src="{{ asset('assets/auth/images/faces/face1.jpg') }}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{ auth()->user()->name }}</span>
                  <span class="text-secondary text-small">Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('auth.dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#posts-menu" aria-expanded="false" aria-controls="posts-menu">
                <span class="menu-title">Posts</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-pencil"></i>
              </a>
              <div class="collapse" id="posts-menu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('posts.create') }}">Create Post</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('posts.index') }}">Posts</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#categories" data-bs-toggle="tab">
                <span class="menu-title">Categories</span>
                <i class="mdi mdi-folder ms-auto"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#users" data-bs-toggle="tab">
                <span class="menu-title">Users</span>
                <i class="mdi mdi-account-multiple ms-auto"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#media" data-bs-toggle="tab">
                <span class="menu-title">Media</span>
                <i class="mdi mdi-image ms-auto"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#comments" data-bs-toggle="tab">
                <span class="menu-title">Comments</span>
                <i class="mdi mdi-comment ms-auto"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#settings" data-bs-toggle="tab">
                <span class="menu-title">Settings</span>
                <i class="mdi mdi-settings ms-auto"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile" data-bs-toggle="tab">
                <span class="menu-title">Profile</span>
                <i class="mdi mdi-account ms-auto"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        
        @yield('content')

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/auth/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/auth/vendors/chart.js/Chart.min.js') }}"></script>
    <script src=" {{ asset('assets/auth/js/chart.js') }}"></script>
    <script src="{{ asset('assets/auth/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/auth/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/auth/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/auth/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/auth/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/auth/js/todolist.js') }}"></script>
    <script src=" {{ asset('assets/auth/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src=" {{ asset('assets/auth/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src=" {{ asset('assets/auth/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src=" {{ asset('assets/auth/libs/js/main-js.js') }}"></script>

    @yield('scripts')

    <script>
      $(document).ready(function(){
        $('#logout-button').click(function() {
          $('#logout-form').submit();
        });
      }); 
    </script>

    <script>

      @if(Session::has('alert-success'))
        Swal.fire(
          "Good job!",
          "{{ Session::get('alert-success') }}",
          "success"
        );
        @endif
        
        @if(Session::has('alert-update'))
        Swal.fire(
          "Good job!",
          "{{ Session::get('alert-update') }}",
          "info"
        );
        @endif

        @if(Session::has('alert-danger'))
        Swal.fire(
          "Good job!",
          "{{ Session::get('alert-danger') }}",
          "error"
        );
        @endif


    </script>





    <!-- End custom js for this page -->
  </body>
</html>