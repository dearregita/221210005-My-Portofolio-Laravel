<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin - Profile Dear</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/admin/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/admin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}"        rel="stylesheet">
  <link href="{{ asset('assets/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"    rel="stylesheet">
  <link href="{{ asset('assets/admin/assets/vendor/boxicons/css/boxicons.min.css') }}"          rel="stylesheet">
  <link href="{{ asset('assets/admin/assets/vendor/quill/quill.snow.css') }}"                   rel="stylesheet">
  <link href="{{ asset('assets/admin/assets/vendor/quill/quill.bubble.css') }}"                 rel="stylesheet">
  <link href="{{ asset('assets/admin/assets/vendor/remixicon/remixicon.css') }}"                rel="stylesheet">
  <link href="{{ asset('assets/admin/assets/vendor/simple-datatables/style.css') }}"            rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/admin/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">AdminDearProfile</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
            <span class="d-none d-md-block ps-2"> K. Anderson     </span>
            <img src="{{ asset('assets/admin/assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
          </a><!-- End Profile Iamge Icon -->

        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

        <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('tabelhome') }}" class="active">
              <i class="bi bi-circle"></i><span>Home</span>
            </a>
          </li>
          <li>
            <a href="{{ route('tabelprofileexperience') }}">
              <i class="bi bi-circle"></i><span>Profile</span>
            </a>
          </li>
          <li>
            <a href="{{ route('tabelcontact-us') }}">
              <i class="bi bi-circle"></i><span>Contact Us</span>
            </a>
          </li>
          <li>
            <a href="{{ route('tabeluser') }}">
              <i class="bi bi-circle"></i><span>User</span>
            </a>
          </li>
          <li>
            <a href="{{ route('tabelinkfooter') }}">
              <i class="bi bi-circle"></i><span>Link Footer</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

    </ul>
  </aside><!-- End Sidebar-->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
        <div class="col-auto"><div class="small m-0">With <i class="bi bi-heart"></i> <strong><span>from 221210005-Dear</span></strong> </div></div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/admin/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/admin/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/admin/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/admin/assets/js/main.js') }}"></script>

</body>

</html>