@extends('layouts.master')

@section('title')
    الرئيسية
@endsection
@section('css')
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/customized.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Theme style -->
@endsection
@section('title_page1')
    الرئيسية
@endsection
@section('title_page2')
    لوحة التحكم
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ App\Models\customer::count() }}</h3>
                            <p>المرضى</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ App\Models\Test::count() }}</h3>

                            <p>الفحوصات</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">

                            <h3>{{ App\Models\Test::count() }}</h3>
                            <p> المواعيد</p>

                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ App\Models\Finance::count() }}</h3>
                            <p>الوثائق المالية</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-dollar-sign    "></i></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>





            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <!-- /.card-header -->

                        <!-- ./card-body -->

                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-12">
                    <!-- MAP & BOX PANE -->
                    <div class="card " dir="rtl">
                        <div class="card-header ">


                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <h3 class="card-title"> اخر المرضى
                            </h3>
                        </div>
                        <!-- /.card-header -->


                        <table id="example1" class="table table-bordered table-striped">

                            <thead>

                                <tr>
                                    <th>#</th>
                                    <th>الاسم</th>
                                    <th>رقم الهوية</th>



                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $customer->personal_id }}</td>
                                        <td>{{ $customer->name }}</td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>



                        <!-- /.card-body -->
                    </div>
                    <div class="card">
                        <div class="card-header">

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <h3 class="card-title"> اخر الفحوصات
                            </h3>
                        </div>
                        <!-- /.card-header -->


                        <table id="example1" class="table table-bordered table-striped">


                            <thead>

                                <tr dir="rtl">

                                    <th>رقم الفحص</th>
                                    <th>رقم الهوية</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($tests as $key => $test)
                                    <tr>
                                        <td>{{ $test->id }}</td>
                                        <td>{{ $test->customer->personal_id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.row -->

                    <!-- TABLE: LATEST ORDERS -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->


            </div>

            <!-- /.row -->
        </div>

        <!-- title row -->

        <!--/. container-fluid -->
    </section>

    <style>
        .column {
            display: flex;
            float: left;
            width: 50%;

        }

        .row:after {
            flex: 50%;
            content: "";
            display: table;
            clear: both;
        }
    </style>



























    <style>
        body {
            background-color: #F5F1E9;
        }

        .col-lg-12 {
            margin-left: auto;
            margin-right: auto;
            width: 320px;
            font-family: 'Lato', sans-serif;
        }

        #calendar_weekdays div {
            display: inline-block;
            vertical-align: top;
        }

        #calendar_content,
        #calendar_weekdays,
        #calendar_header {
            position: relative;
            width: 320px;
            overflow: hidden;
            float: left;
            z-index: 10;
        }

        #calendar_weekdays div,
        #calendar_content div {
            width: 40px;
            height: 40px;
            overflow: hidden;
            text-align: center;
            background-color: #FFFFFF;
            color: #787878;
        }

        #calendar_content {
            -webkit-border-radius: 0px 0px 12px 12px;
            -moz-border-radius: 0px 0px 12px 12px;
            border-radius: 0px 0px 12px 12px;
        }

        #calendar_content div {
            float: left;
        }

        #calendar_content div:hover {
            background-color: #F8F8F8;
        }

        #calendar_content div.blank {
            background-color: #E8E8E8;
        }

        #calendar_header,
        #calendar_content div.today {
            zoom: 1;
            filter: alpha(opacity=70);
            opacity: 0.7;
        }

        #calendar_content div.today {
            color: #FFFFFF;
        }

        #calendar_header {
            width: 100%;
            height: 37px;
            text-align: center;
            background-color: #FF6860;
            padding: 18px 0;
            -webkit-border-radius: 12px 12px 0px 0px;
            -moz-border-radius: 12px 12px 0px 0px;
            border-radius: 12px 12px 0px 0px;
        }

        #calendar_header h1 {
            font-size: 1.5em;
            color: #FFFFFF;
            float: left;
            width: 70%;
        }

        i[class^=icon-chevron] {
            color: #FFFFFF;
            float: left;
            width: 15%;
            border-radius: 50%;
        }
    </style>
@endsection






@section('scripts')
@endsection
