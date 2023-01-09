@if (auth()->user()->is_admin == 1)
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
        </li>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/alqadilogo.jpg') }}">

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->


<div class="container"  style="display:flex; margin: 2px" >

        <li class="nav-item" >

            <li class="nav-item">

                <a href="{{ route('admin.transaction.create') }}" >
                    <button type="button" class="btn btn-info">  add payments
                    </button>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.finance.create') }}" >
                    <button type="button" class="btn btn-info">add finance informations
                    </button>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('admin.ptest.create') }}" >
                    <button type="button" class="btn btn-info"> add personal tests

                    </button>
                </a>
            </li>
  <li class="nav-item">
            <a href="{{ route('admin.test.create') }}" >
                <button type="button" class="btn btn-info">   add test </button>
            </a>
 </li>
  <li class="nav-item">
            <a href="{{ route('admin.appointment.create') }}">
                <button type="button" class="btn btn-info"> add appointment
                </button>
            </a>
        </li>
            <a href="{{ route('admin.customer.checkId') }}">
                <button type="button" class="btn btn-info"> add patient
                    </button>
            </a>
        </li>



        <!-- Messages Dropdown Menu -->

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

    </ul>
</nav>
</div>

@elseif (auth()->user()->is_admin==0)

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
        </li>


    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->



<div class="container"  style="display:flex; margin: 2px" >
<li class="nav-item">
    <a href="{{ route('admin.ptest.create') }}" >
        <button type="button" class="btn btn-info">   add personal  test
        </button>
    </a>
</li>
<li class="nav-item">
<a href="{{ route('admin.test.create') }}" >
    <button type="button" class="btn btn-info">  add  test
    </button>
</a>
</li>
<li class="nav-item">
<a href="{{ route('admin.appointment.create') }}">
    <button type="button" class="btn btn-info"> add appointment
    </button>
</a>
</li>
<a href="{{ route('admin.customer.create') }}">
    <button type="button" class="btn btn-info"> add patient
        </button>
</a>
</li>
<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
            aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
    </div>
</div>
</nav>
</div>
@endif
