<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
         <i class="fa fa-shopping-cart"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sispen</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fa fa-list-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('barang') }}">
            <i class="fa fa-table"></i>
            <span>Barang</span></a>
    </li>

    @if (auth()->user()->level == 'Admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('kategori') }}">
            <i class="fa fa-align-justify"></i>
            <span>Kategori</span></a>
    </li>
     @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>