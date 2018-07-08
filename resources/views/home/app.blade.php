@include('home.layouts.header')

<body class="cms-index-index cms-home-page">

<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]--> 

<!-- mobile menu -->
@include('home.layouts.mobileMenu')
<!-- end mobile menu -->
<div id="page"> 
  <!-- Header -->
  @include('home.layouts.topMenu')
  <!-- end header --> 
  
  <!-- Navbar -->
  @include('home.layouts.mainMenu')
  <!-- end nav --> 
  
  @yield('page')
  
  <!-- Footer -->
  @include('home.layouts.footer')
</div>
  @include('home.layouts.scripts')
</body>
</html>
