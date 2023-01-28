@extends('layouts.master')
@section('title')
    patient profile
@endsection
@section('css')
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('title_page1')
@endsection
@section('title_page2')
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->

                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header" dir="ltr">
                            <h3 class="card-title">About patient </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> name</strong>

                            <p class="text-muted">
                                {{ $customerse->name }}
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> address</strong>

                            <p class="text-muted"> {{ $customerse->address }}</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> national id</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">{{ $customerse->personal_id }}</span>

                            </p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> mobile</strong>

                            <p class="text-muted">{{ $customerse->phone }}</p>
                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> gender</strong>

                            <p class="text-muted">{{ $customerse->gender }}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">tests</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">appointment</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">finance</a>
                                </li>


                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="activity">
                                    <!-- Post -->

                                    <!-- /.post -->

                                    <!-- Post -->
                                    <table id="example1" class="table table-bordered table-striped" class="pagination"
                                        dir="rtl">
                                        <thead>
                                            <tr>


                                                <th>test id</th>

                                                <th>left_eye_without_corr</th>
                                                <th>left_eye_with_corr</th>
                                                <th> right_eye_without_corr </th>

                                                <th> right_eye_with_corr </th>
                                                <th>date</th>
                                                <th>action</th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($customerse->personalTests as $customer)
                                                <tr>

                                                    <td> {{$customer->id}}</td>

                                                    <td>{{ $customer->right_eye_without_corr }}</td>

                                                    <td>{{ $customer->right_eye_with_corr }}</td>
                                                    <td>{{ $customer->left_eye_without_corr }}</td>
                                                    <td>{{ $customer->left_eye_with_corr }}</td>
                                                    <td>{{ $customer->date }}</td>
                                                    <td> <a href="{{ route('admin.ptest.edit', ['id' => $customer->id]) }}"
                                                            class="btn btn-primary btn-sm" id="edit"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a href="{{ route('admin.ptest.delete', ['id' => $customer->id]) }}"
                                                            class="btn btn-danger btn-sm" id="edit"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach



                                        </tbody>

                                    </table>
                                    <!-- /.post -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <table id="example1" class="table table-bordered table-striped" class="pagination"
                                        dir="rtl">
                                        <thead>
                                            <tr>

                                                <th>note</th>

                                                <th> date </th>
                                                <th> hour </th>
                                                <th>clinic</th>
                                                <th> optimistic </th>
                                                <th>action</th>



                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($customerse->appointments as $customer)
                                                <tr>
                                                    <td>{{ $customer->note }}</td>
                                                    <td>{{ $customer->date }}</td>
                                                    <td>{{ $customer->hour }}</td>
                                                    <td>{{ $customer->clinic }}</td>
                                                    <td>{{ $customer->optimimstic }}</td>

                                                    <td> <a href="{{ route('admin.appointment.edit', ['id' => $customer->id]) }}"
                                                            class="btn btn-primary btn-sm" id="edit"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a href="{{ route('admin.appointment.delete', ['id' => $customer->id]) }}"
                                                            class="btn btn-danger btn-sm" id="edit"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach



                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">

                                    <table id="example1" class="table table-bordered table-striped" dir="rtl">
                                        <thead>
                                            <tr>

                                                <th>note</th>


                                                <th> date </th>

                                                <th> remaining </th>

                                                <th>total ammount</th>
                                                <th> test id </th>
                                                <th>action</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($customerse->finance as $customer)
                                                <tr>
                                                    <td>{{ $customer->note }}</td>

                                                    <td>{{ $customer->date }}</td>

                                                    <td>{{ $customer->remaining }}</td>
                                                    <td>{{ $customer->amount }}</td>
                                                    <td>{{ $customer->id }}</td>
                                                    <td> {{--   <a href="{{ route('admin.finance.edit', ['id' => $customerse->id],['customer_id'=>$customerse->personal_id]) }}"
                                                            class="btn btn-primary btn-sm" id="edit"><i
                                                                class="fa fa-edit"></i></a> --}}
                                                        <a href="{{ route('admin.finance.delete', ['id' => $customer->id]) }}"
                                                            class="btn btn-danger btn-sm" id="edit"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {{ $customers->links() }}


                                        </tbody>

                                    </table>

                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->

                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>

                <!-- /.row -->
            </div>
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->

                    <!-- /.card -->

                    <!-- About Me Box -->

                    <!-- /.card -->
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity2" data-toggle="tab">add
                                        tests</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#timeline2" data-toggle="tab">add
                                        appointment</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings2" data-toggle="tab">add
                                        finance</a>
                                </li>

                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="activity2">
                                    <!-- Post -->

                                    <!-- /.post -->
                                    <form class="form" action="{{ route('admin.ptest.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i>  test details </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" hidden>
                                                        <label for="projectinput1">national id </label>
                                                        <input type="text" value="{{ $customerse->personal_id }}"
                                                            id="customer_id" class="form-control" name="customer_id">
                                                        @error('customer_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">right eye without corr</label>
                                                        <input type="text" value="" id="right_eye_without_corr"
                                                            class="form-control" name="right_eye_without_corr">
                                                        @error('right_eye_without_corr')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">right eye with corr </label>
                                                        <input type="text" value="" id="right_eye_with_corr"
                                                            class="form-control" name="right_eye_with_corr">
                                                        @error('right_eye_with_corr')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">left eye without corr</label>
                                                        <input type="text" value="" id="left_eye_without_corr"
                                                            class="form-control" name="left_eye_without_corr">
                                                        @error('left_eye_without_corr')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">left eye with corr </label>
                                                        <input type="text" value="" id="left_eye_with_corr"
                                                            class="form-control" name="left_eye_with_corr">
                                                        @error('left_eye_with_corr')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput1">date </label>
                                                    <input type="date" value="" id="date"
                                                        class="form-control" name="date">
                                                    @error('date')
                                                        <span class="text-danger">{{ $message }} </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput1">cost </label>
                                                    <input type="text" value="" id="cost"
                                                        class="form-control" name="cost">
                                                    @error('cost')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>




                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput1">corrected By </label>
                                                    <input type="text" value="" id="correctedBy"
                                                        class="form-control" name="correctedBy">
                                                    @error('correctedBy')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>



                                        </div>
                                        <div class="form-actions">

                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> save
                                            </button>
                                            <a href="{{ route('admin.ptest') }}"> <button type="button"
                                                    class="btn btn-warning ">
                                                    all tests </button></a>
                                        </div>
                                    </form>

                                    <!-- Post -->

                                    <!-- /.post -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline2">
                                    <!-- The timeline -->
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <form class="form" action="{{ route('admin.appointment.store') }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-body">
                                                    <h4 class="form-section"><i class="ft-home"></i> appointment details
                                                    </h4>

                                                    <div class="row">
                                                        <div class="col-md-6" hidden>
                                                            <div class="form-group">
                                                                <label for="projectinput1">national id </label>
                                                                <input type="text"
                                                                    value="{{ $customerse->personal_id }}" id="txt_9"
                                                                    onchange='saveValue(this);' class="form-control"
                                                                    name="customer_id">
                                                                @error('customer_id')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group" hidden>
                                                                <label for="projectinput1">name </label>
                                                                <input type="text" value="{{ $customerse->name }}"
                                                                    id="txt_10" onchange='saveValue(this);'
                                                                    class="form-control" name="name">
                                                                @error('name')
                                                                    <span class="text-danger">{{ $message }} </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">date </label>
                                                                <input type="date" value="" id="txt_11"
                                                                    onchange='saveValue(this);' class="form-control"
                                                                    name="date">
                                                                @error('date')
                                                                    <span class="text-danger">{{ $message }} </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">hour </label>
                                                                <input type="time" value="" id="txt_12"
                                                                    onchange='saveValue(this);' class="form-control"
                                                                    name="hour">
                                                                @error('hour')
                                                                    <span class="text-danger">{{ $message }} </span>
                                                                @enderror
                                                            </div>







                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="projectinput1">clinic </label>
                                                                <input type="text" value="" id="txt_13"
                                                                    onchange='saveValue(this);' class="form-control"
                                                                    name="clinic">
                                                                @error('clinic')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="projectinput1">optimistic </label>
                                                                <input type="text" value="" id="txt_14"
                                                                    onchange='saveValue(this);' class="form-control"
                                                                    name="optimimstic">
                                                                @error('optimimstic')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="projectinput1">notes </label>
                                                                <textarea type="text" value="" id="txt_15" onchange='saveValue(this);' class="form-control"
                                                                    name="note"></textarea>
                                                                @error('note')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                        </div>


                                        <div class="form-actions">

                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i>save
                                            </button>
                                            <a href="{{ route('admin.appointment') }}"> <button type="button"
                                                    class="btn btn-warning ">
                                                    all appointment
                                                </button></a>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings2">

                                    <form class="form" action="{{ route('admin.finance.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i> finance details </h4>
                                            <div class="row">
                                                <div class="col-md-6" hidden>
                                                    <div class="form-group">
                                                        <label for="projectinput1">national id </label>
                                                        <input type="text" value="{{ $customerse->personal_id }}"
                                                            id="customer_id" class="form-control" name="customer_id">
                                                        @error('customer_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">test id </label>
                                                        <input type="text" value="" id="test_id"
                                                            class="form-control" name="test_id">
                                                        @error('test_id')
                                                            <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">amount </label>
                                                        <input type="text" value="" id="amount"
                                                            class="form-control" name="amount">
                                                        @error('amount')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">date </label>
                                                        <input type="date" value="" id="date"
                                                            class="form-control" name="date">
                                                        @error('date')
                                                            <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>




                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">notes </label>
                                                        <textarea type="text" value="" id="note" class="form-control" name="note"></textarea>
                                                        @error('note')
                                                            <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6" hidden>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">ملاحظات </label>
                                                            <textarea type="text" value="" id="note" class="form-control" name="note"></textarea>
                                                            @error('note')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>


                                            <div class="form-actions">

                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> save
                                                </button>
                                                <a href="{{ route('admin.finance') }}"> <button type="button"
                                                        class="btn btn-warning ">
                                                        all finances
                                                    </button></a>

                                            </div>
                                        </div>
                                    </form>

                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div><!-- /.container-fluid -->
    </section>
@endsection






@section('scripts')
    <script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.j') }}s"></script>
    <script src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
