<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/alqadilogo.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
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
        @if (auth()->user()->is_admin == 1)
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="ion ion-home"></i>
                            <p>
                                الرئيسية

                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.customer') }}" class="nav-link">
                            <i class="ion ion-person"></i>
                            <p>
                                المرضى
                                <span class="right badge badge-danger">{{ App\Models\customer::count() }}</span>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.appointment') }}" class="nav-link">
                            <i class="ion ion-calendar"></i>
                            <p>
                                المواعيد
                                <span class="right badge badge-danger">{{ App\Models\Appointment::count() }}</span>
                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="{{ route('admin.test') }}" class="nav-link">
                            <i class="fa fa-file-invoice"></i>
                            <p>
                                الفحص الاساسي
                                <span class="right badge badge-danger">{{ App\Models\Test::count() }}</span>
                            </p>
                        </a>
                    </li>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.ptest') }}" class="nav-link">
                            <i class="fa fa-hospital-user"></i>
                            <p>
                                فحص المريض
                                <span class="right badge badge-danger">{{ App\Models\PersonalTest::count() }}</span>

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.finance') }}" class="nav-link">
                            <i class="fa fa-file-invoice-dollar"></i>
                            <p>
                                المالية
                                <span class="right badge badge-danger">{{ App\Models\Finance::count() }}</span>

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.transaction') }}" class="nav-link">
                            <i class="fa fa-file-invoice-dollar"></i>
                            <p> الدفعات المالية
                                <span class="right badge badge-danger">{{ App\Models\Transaction::count() }}</span>

                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('report') }}" class="nav-link">
                            <i class="fa fa-file-invoice-dollar"></i>
                            <p>  طباعة تقرير

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.employee') }}" class="nav-link">
                            <i class="fa fa-file-invoice-dollar"></i>
                            <p> الموظفين
                                <span class="right badge badge-danger">{{ App\Models\User::count() }}</span>

                            </p>
                        </a>
                    </li>

                    {{-- @include('layouts.navigation') --}}
                    <a href="{{ url('/logout') }}">
                      <button type="button" class="btn btn-secondary ">تسجيل الخروج</button> </a>

                    <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</aside>
@elseif (auth()->user()->is_admin == 0)
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->

        <li class="nav-item">
            <a href="{{ route('admin.customer') }}" class="nav-link">
                <i class="ion ion-person"></i>
                <p>
                    المرضى
                    <span class="right badge badge-danger">{{ App\Models\customer::count() }}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.customer.create') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    اضافة مريض
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.appointment') }}" class="nav-link">
                <i class="ion ion-calendar"></i>
                <p>
                    المواعيد
                    <span class="right badge badge-danger">{{ App\Models\Appointment::count() }}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.appointment.create') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    اضافة موعد
                </p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('admin.ptest') }}" class="nav-link">
                <i class="fa fa-hospital-user"></i>
                <p>
                    فحص المريض
                    <span class="right badge badge-danger">{{ App\Models\PersonalTest::count() }}</span>

                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.ptest.create') }}" class="nav-link">
                <i class="fa fa-hospital-user"></i>
                <p>
                    اضافة فحص مريض
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('emp.finance') }}" class="nav-link">
                <i class="fa fa-file-invoice-dollar"></i>
                <p>
                    المالية
                    <span class="right badge badge-danger">{{ App\Models\Finance::count() }}</span>

                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('emp.transaction') }}" class="nav-link">
                <i class="fa fa-file-invoice-dollar"></i>

                <p>
                    الدفعات المالية
                    <span class="right badge badge-danger">{{ App\Models\Transaction::count() }}</span>

                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('report') }}" class="nav-link">
                <i class="fa fa-file-invoice-dollar"></i>
                <p>  طباعة تقرير

                </p>
            </a>
        </li>
        <a href="{{ url('/logout') }}">
            <i class="fa-sharp fa-solid fa-house-person-leave"></i> تسجيل الخروج

        </a>

        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
        </aside>
        @endif
        <!-- Sidebar Menu -->
