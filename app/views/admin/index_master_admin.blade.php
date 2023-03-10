<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2023 10:47:07 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HexaDash</title>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  @include('admin.body.css');
</head>
<body class="layout-light side-menu">
<div class="mobile-search">
  <form action="https://demo.dashboardmarket.com/" class="search-form">
    <img src="{{route(''.'app/views/admin/public/assets/img/svg/search.svg')}}" alt="search" class="svg">
    <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
  </form>
</div>
<div class="mobile-author-actions"></div>
@include('admin.body.header');
<main class="main-content">
  @include('admin.body.slibar');
  @yield('content');
  @include('admin.body.footer');
</main>
<div id="overlayer">
  <div class="loader-overlay">
    <div class="dm-spin-dots spin-lg">
      <span class="spin-dot badge-dot dot-primary"></span>
      <span class="spin-dot badge-dot dot-primary"></span>
      <span class="spin-dot badge-dot dot-primary"></span>
      <span class="spin-dot badge-dot dot-primary"></span>
    </div>
  </div>
</div>
<div class="overlay-dark-sidebar"></div>
<div class="customizer-overlay"></div>
<div class="customizer-wrapper">
  <div class="customizer">
    <div class="customizer__head">
      <h4 class="customizer__title">Customizer</h4>
      <span class="customizer__sub-title">Customize your overview page layout</span>
      <a href="#" class="customizer-close">
        <img class="svg" src="{{route(''.'app/views/admin/public/assets/img/svg/x2.svg')}}" alt="">
      </a>
    </div>
    <div class="customizer__body">
      <div class="customizer__single">
        <h4>Layout Type</h4>
        <ul class="customizer-list d-flex layout">
          <li class="customizer-list__item">
            <a href="https://demo.dashboardmarket.com/hexadash-html/ltr" class="active">
              <img src="{{route(''.'app/views/admin/public/assets/img/ltr.png')}}" alt="">
              <i class="fa fa-check-circle"></i>
            </a>
          </li>
          <li class="customizer-list__item">
            <a href="https://demo.dashboardmarket.com/hexadash-html/rtl">
              <img src="{{route(''.'app/views/admin/public/assets/img/rtl.png')}}" alt="">
              <i class="fa fa-check-circle"></i>
            </a>
          </li>
        </ul>
      </div>

      <div class="customizer__single">
        <h4>Sidebar Type</h4>
        <ul class="customizer-list d-flex l_sidebar">
          <li class="customizer-list__item">
            <a href="#" data-layout="light" class="dark-mode-toggle active">
              <img src="{{route(''.'app/views/admin/public/assets/img/light.png')}}" alt="">
              <i class="fa fa-check-circle"></i>
            </a>
          </li>
          <li class="customizer-list__item">
            <a href="#" data-layout="dark" class="dark-mode-toggle">
              <img src="{{route(''.'app/views/admin/public/assets/img/dark.png')}}" alt="">
              <i class="fa fa-check-circle"></i>
            </a>
          </li>
        </ul>
      </div>

      <div class="customizer__single">
        <h4>Navbar Type</h4>
        <ul class="customizer-list d-flex l_navbar">
          <li class="customizer-list__item">
            <a href="#" data-layout="side" class="active">
              <img src="{{route(''.'app/views/admin/public/assets/img/side.png')}}" alt="">
              <i class="fa fa-check-circle"></i>
            </a>
          </li>
          <li class="customizer-list__item top">
            <a href="#" data-layout="top">
              <img src="{{route(''.'app/views/admin/public/assets/img/top.png')}}" alt="">
              <i class="fa fa-check-circle"></i>
            </a>
          </li>
          <li class="colors"></li>
        </ul>
      </div>

    </div>
  </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>

@include('admin.body.js');

</body>

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2023 10:48:03 GMT -->
</html>
