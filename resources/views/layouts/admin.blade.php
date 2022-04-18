<!DOCTYPE html>
<html lang="en">

<head>
   @include('includes.meta')

   <title>@yield('title')</title>

   @stack('prepend-style')
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
   <link href="/style/main.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.css" />
   @stack('addon-style')
</head>

<body>
   <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
         <!-- sidebar -->
         <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-center">
               <img src="/images/admin.png" alt="" class="my-4" />
            </div>
            <div class="list-group list-group-flush">
               <a href="{{ route('admin-dashboard') }}" class="list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : '' }}">
                  Dashboard
               </a>
               <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}">
                  Categories
               </a>
               <a href="#" class="list-group-item list-group-item-action">Products</a>
               <a href="#" class="list-group-item list-group-item-action">Transactions</a>
               <a href="#" class="list-group-item list-group-item-action">Users</a>
               <a href="#" class="list-group-item list-group-item-action">Sign Out</a>
            </div>
         </div>
         <!-- End of sidebar -->

         <!-- Page Content -->
         <div id="page-content-wrapper">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
               <div class="container-fluid">
                  <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">&laquo; Menu</button>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <!-- Desktop Menu -->
                     <ul class="navbar-nav d-none d-lg-flex ml-auto">
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                              <img src="/images/icon-user.png" alt="icon-user" class="rounded-circle profile-picture mr-2" />
                              Hi, Angga
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/">Logout</a>
                           </div>
                        </li>
                     </ul>

                     <!-- Mobile Menu -->
                     <ul class="navbar-nav d-block d-lg-none">
                        <li class="nav-item">
                           <a href="#" class="nav-link">Hi, Angga</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
            <!-- End Navbar -->

            <!-- Section Content -->
            @yield('content')
            <!-- End of Section Content -->
         </div>
         <!-- End of Page Content -->
      </div>
   </div>

   <!-- Bootstrap core JavaScript -->
   @stack('prepend-script')
   <script src="/vendor/jquery/jquery.min.js"></script>
   <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>
   <script>
      $("#menu-toggle").click(function(e) {
         e.preventDefault();
         $("#wrapper").toggleClass("toggled");
      });
   </script>
   @stack('addon-script')
</body>

</html>
