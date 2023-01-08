@extends('layouts.master')
@section('title')
    patient profile
@endsection
@section('css')
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
                                {{ $customers->name }}
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> address</strong>

                            <p class="text-muted"> {{ $customers->address }}</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> national id</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">{{ $customers->personal_id }}</span>

                            </p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> mobile</strong>

                            <p class="text-muted">{{ $customers->phone }}</p>
                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> gender</strong>

                            <p class="text-muted">{{ $customers->gender }}</p>
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
                                    <table id="example1" class="table table-bordered table-striped" dir="rtl">
                                        <thead>
                                            <tr>



                                                <th> right_eye_without_corr </th>
                                                <th>left_eye_without_corr</th>
                                                <th> right_eye_with_corr </th>
                                                <th>left_eye_with_corr</th>
                                                <th>date</th>



                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($customers->personalTests as $customer)
                                                <tr>


                                                    <td>{{ $customer->right_eye_without_corr }}</td>
                                                    <td>{{ $customer->left_eye_without_corr }}</td>
                                                    <td>{{ $customer->right_eye_with_corr }}</td>
                                                    <td>{{ $customer->left_eye_with_corr }}</td>
                                                    <td>{{ $customer->date }}</td>

                                                </tr>
                                            @endforeach



                                        </tbody>

                                    </table>
                                    <!-- /.post -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <table id="example1" class="table table-bordered table-striped" dir="rtl">
                                        <thead>
                                            <tr>

                                                <th>note</th>

                                                <th> date </th>
                                                <th> hour </th>
                                                <th>clinic</th>
                                                <th> optimistic </th>




                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($customers->appointments as $customer)
                                                <tr>
                                                    <td>{{ $customer->note }}</td>
                                                    <td>{{ $customer->date }}</td>
                                                    <td>{{ $customer->hour }}</td>
                                                    <td>{{ $customer->clinic }}</td>
                                                    <td>{{ $customer->optimimstic }}</td>



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
                                                <th> finance id </th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($customers->finance as $customer)
                                                <tr>
                                                    <td>{{ $customer->note }}</td>

                                                    <td>{{ $customer->date }}</td>

                                                    <td>{{ $customer->remaining }}</td>
                                                    <td>{{ $customer->amount }}</td>

                                                </tr>
                                            @endforeach



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
            </div><!-- /.container-fluid -->
    </section>
@endsection






@section('scripts')

@endsection
