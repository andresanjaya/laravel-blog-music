  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Andre Blog</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        DATA MASTER
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Nav Item - Charts -->
    <li class="nav-item  {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/posts">
            <i class="fa fa-file"></i>
            <span>My Posts</span></a>
    </li>

    @can('admin')
    <div class="sidebar-heading mt-2">
        ADMINISTRATOR
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}"">
        <a class="nav-link" href="/dashboard/categories">
            <i class="fas fa-fw fa-table"></i>
            <span>Categories</span></a>
    </li>
    @endcan
    
   
    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
   


</ul>
<!-- End of Sidebar -->