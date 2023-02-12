@extends('layouts.master')

@section('title')
    الرئيسية
@endsection
@section('css')
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/jsgrid/jsgrid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jsgrid/jsgrid-theme.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css?v=3.2.0') }}">
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
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fullcalendar/main.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css?v=3.2.0') }}">


    <!-- Theme style -->
@endsection
@section('title_page1')
    الرئيسية
@endsection
@section('title_page2')
    لوحة التحكم
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row" id="printbtn">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">appointments</h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped" dir="rtl">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>national id </th>
                                    <th>date </th>
                                    <th>hour</th>
                                    <th>clinic</th>
                                    <th>optimistic</th>
                                    <th>notes</th>
                                    <th>actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $key => $appointment)
                                    <tr>
                                        <td>{{ $key = $key + 1 }}</td>
                                        <td> {{ $appointment->customer->personal_id }}</td>
                                        <td>{{ $appointment->date }} </td>
                                        <td>{{ $appointment->hour }}</td>
                                        <td>{{ $appointment->clinic }}</td>
                                        <td>{{ $appointment->optimimstic }}</td>
                                        <td>{{ $appointment->note }}</td>
                                        <td>
                                            <a href="{{ route('admin.appointment.edit', ['id' => $appointment->id]) }}"
                                                class="btn btn-primary btn-sm" id="edit"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('admin.appointment.delete', ['id' => $appointment->id]) }}"
                                                class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>

        </div>

        <div class="card card-primary" id="printbtn">
            <div class="card-header">
                <h3 class="card-title">Check Id</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.checkidAction') }}" method="head">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter National id</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="personal_id"
                            placeholder="Enter id" fdprocessedid="f3s7fb">
                    </div>
                    @error('personal_id')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer" id="printbtn">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

        <form action="{{ route('store') }}" method="post">
            @csrf
            <p style="text-align: justify;"><strong>visit information report&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                </strong><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong> <img style="float: right;"
                    src=" {{ asset('assets/img/alqadilogo.jpg') }}" alt="" width="150" height="150" /></p>
            <p style="text-align: justify;">&nbsp;</p>
            <p style="text-align: justify;">&nbsp;</p>
            <p style="text-align: justify;">&nbsp;</p>
            <p style="text-align: justify;">Patient information:&nbsp;</p>
            <table style="border-collapse: collapse; width: 99.5739%; height: 31px;" border="1">
                <tbody>
                    <tr style="height: 13px;">
                        <td style="width: 8.36976%; height: 13px;">National id</td>
                        <td style="width: 19.1412%; height: 13px;">&nbsp;<input type="text" name="personal_id"
                            value="{{ $personal_id }}">
                        </td>
                        <td style="width: 12.4454%; height: 13px;">Patient name</td>
                        <td style="width: 28.7482%; height: 13px;">&nbsp;<input type="text" name="name" /></td>
                        <td style="width: 12.4454%; height: 13px;"> Mobile</td>
                        <td style="width: 28.7482%; height: 13px;">&nbsp;<input type="text" name="phone" /></td>
                        <td style="width: 12.4454%; height: 13px;"> start date</td>
                        <td style="width: 28.7482%; height: 13px;">&nbsp;<input type="date" name="start_date" /></td>
                    </tr>
                    <tr style="height: 18px;">
                        <td style="width: 8.36976%; height: 18px;">Birth date</td>
                        <td style="width: 19.1412%; height: 18px;">&nbsp; <input type="date" name="" /></td>
                        <td style="width: 12.4454%; height: 18px;">Gender</td>
                        <td style="width: 28.7482%; height: 18px;">&nbsp;<input type="text" name="gender" /></td>
                        <td style="width: 12.4454%; height: 18px;">Address</td>
                        <td style="width: 28.7482%; height: 18px;">&nbsp;<input type="text" name="address" /></td>
                    </tr>
                </tbody>
            </table>
            <p>Encounter information :</p>
            <table style="border-collapse: collapse; width: 91.6458%; height: 54px;" border="1">
                <tbody>
                    <tr style="height: 18px;">
                        <td style="width: 16.6667%; height: 18px;">Enc.date</td>
                        <td style="width: 16.6667%; height: 18px;">&nbsp;<input type="date" name="date" value="" /></td>
                        <td style="width: 16.6667%; height: 18px;">Enc.time</td>
                        <td style="width: 14.536%; height: 18px;">&nbsp;<input id="date-time"
                                type="time"value="" name="hour" /></td>
                        <td style="width: 18.7974%; height: 18px;">Enc.clinic</td>
                        <td style="width: 16.6667%; height: 18px;">&nbsp;<input type="text" name="clinic"
                                value="" /></td>
                    </tr>
                    <tr>
                        <td style="width: 16.6667%;">Plan</td>
                        <td style="width: 16.6667%;" colspan="5">&nbsp; <input type="text"></td>
                    </tr>
                </tbody>
            </table>
            <p>Patient Complain :</p>
            <table style="border-collapse: collapse; width: 100%; height: 100px;" border="1">
                <tbody>
                    <tr>
                        <td style="width: 57.339%;">&nbsp;
                            <textarea id="" cols="30" name="" rows="3"></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p>Eye Vision :</p>
            <table style="border-collapse: collapse; width: 74.3506%; height: 67px;" border="1">
                <tbody>
                    <tr style="height: 16px;">
                        <td style="width: 10%; height: 16px; text-align: center;">
                            <p>Added</p>
                            <p>By</p>
                        </td>
                        <td style="width: 10%; height: 16px; text-align: center;">
                            <p>Added</p>
                            <p>Date</p>
                        </td>
                        <td style="width: 10.2616%; height: 16px; text-align: center;">Right Without Corr.</td>
                        <td style="width: 5.77875%; height: 16px; text-align: center;">Right With Corr.</td>
                        <td style="width: 7.67817%; height: 16px; text-align: center;">left Without Corr.</td>
                        <td style="width: 7.51837%; height: 16px; text-align: center;"> Left With Corr. </td>


                        <td style="width: 6.82589%; height: 16px; text-align: center;">Corrected By</td>
                    </tr>
                    <tr style="height: 51px;">
                        <td style="width: 10%; height: 51px;">&nbsp;<input id="" name="addedBy"
                                value="{{ Auth()->user()->name }}" size="15px" type="text" /></td>
                        <td style="width: 10%; height: 51px;">&nbsp;<input size="10px" type="date"
                                value="" /></td>
                        <td style="width: 10.2616%; height: 51px;">&nbsp;<input id="" value=""
                                name="right_eye_without_corr" size="12px" type="text" /></td>
                        <td style="width: 5.77875%; height: 51px;">&nbsp;<input id="" name="right_eye_with_corr"
                                value="" size="15px" type="text" /></td>
                        <td style="width: 7.67817%; height: 51px;">&nbsp;<input id=""
                                name="left_eye_without_corr" size="15px" type="text" /></td>
                        <td style="width: 7.51837%; height: 51px;">&nbsp;<input type="text" name="left_eye_with_corr">
                        </td>
                        <td style="width: 6.82589%; height: 51px;">&nbsp;<input id="" name="correctedBy"
                                size="15px" type="text" /></td>
                    </tr>
                </tbody>
            </table>
            <p>Eye Examination :</p>
            <p>&nbsp;N/A&nbsp; &nbsp; &nbsp; Reason:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Right&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Left&nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; N/A&nbsp; &nbsp; &nbsp; &nbsp; Reason&nbsp;</p>
            <table id="tbl" style="border-collapse: collapse; width: 100.142%; height: 291px;" border="1">
                <tbody>
                    <tr style="height: 18px;">
                        <td style="width: 33.3333%; height: 18px;">R.Note</td>
                        <td style="width: 33.3333%; height: 18px;">L.Note</td>
                    </tr>
                    <tr style="height: 18px;">
                        <td style="width: 33.3333%; height: 18px;">&nbsp;
                            <textarea name="" id="" cols="50" rows="20"></textarea>
                        </td>
                        <td style="width: 33.3333%; height: 18px;">&nbsp;
                            <textarea name="" id="" cols="50" rows="20"></textarea>
                        </td>
                    </tr>

                </tbody>
            </table>
            <p><br /><br /></p>

            <p>Signature:</p>

            <button type="submit" class="btn btn-primary">
                <i class="la la-check-square-o"></i> حفظ
            </button>

        </form>

        <button onclick="  window.print();" id="printbtn" class="print-button" type="button"> <span
                class="print-icon"> </button>



        <style type="text/css">
            @media print {
                #printbtn {
                    display: none;
                }
            }
        </style>
        <style>
            button.print-button {
                width: 100px;
                height: 100px;
            }

            span.print-icon,
            span.print-icon::before,
            span.print-icon::after,
            button.print-button:hover .print-icon::after {
                border: solid 4px #333;
            }

            span.print-icon::after {
                border-width: 2px;
            }

            button.print-button {
                position: relative;
                padding: 0;
                border: 0;

                border: none;
                background: transparent;
            }

            span.print-icon,
            span.print-icon::before,
            span.print-icon::after,
            button.print-button:hover .print-icon::after {
                box-sizing: border-box;
                background-color: #fff;
            }

            span.print-icon {
                position: relative;
                display: inline-block;
                padding: 0;
                margin-top: 20%;

                width: 60%;
                height: 35%;
                background: #fff;
                border-radius: 20% 20% 0 0;
            }

            span.print-icon::before {
                content: "";
                position: absolute;
                bottom: 100%;
                left: 12%;
                right: 12%;
                height: 110%;

                transition: height .2s .15s;
            }

            span.print-icon::after {
                content: "";
                position: absolute;
                top: 55%;
                left: 12%;
                right: 12%;
                height: 0%;
                background: #fff;
                background-repeat: no-repeat;
                background-size: 70% 90%;
                background-position: center;
                background-image: linear-gradient(to top,
                        #fff 0, #fff 14%,
                        #333 14%, #333 28%,
                        #fff 28%, #fff 42%,
                        #333 42%, #333 56%,
                        #fff 56%, #fff 70%,
                        #333 70%, #333 84%,
                        #fff 84%, #fff 100%);

                transition: height .2s, border-width 0s .2s, width 0s .2s;
            }

            button.print-button:hover {
                cursor: pointer;
            }

            button.print-button:hover .print-icon::before {
                height: 0px;
                transition: height .2s;
            }

            button.print-button:hover .print-icon::after {
                height: 120%;
                transition: height .2s .15s, border-width 0s .16s;
            }
        </style>
        <script>
            function addField(table) {

                var tableRef = document.getElementById(table);
                var newRow = tableRef.insertRow(-1);

                var newCell = newRow.insertCell(0);
                var newElem = document.createElement('input');
                newElem.setAttribute("name", "links");
                newElem.setAttribute("type", "text");
                newCell.appendChild(newElem);

                newCell = newRow.insertCell(1);
                newElem = document.createElement('input');
                newElem.setAttribute("name", "keywords");
                newElem.setAttribute("type", "text");
                newCell.appendChild(newElem);

                newCell = newRow.insertCell(2);
                newElem = document.createElement('input');
                newElem.setAttribute("name", "violationtype");
                newElem.setAttribute("type", "text");
                newCell.appendChild(newElem);


            }
        </script>

    </div>
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

    <!-- Page specific script -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>

    <script>
        $(document).on("click", "#delete", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'هل تريد تأكيد الحذف
                icon: 'question',
                iconHtml: '؟',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'نعم',
                cancelButtonText: 'لا',
                showCancelButton: true,
                showCloseButton: true

            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                    Swal.fire(
                        'تم الحذف!',
                        'تم الحذف بنجاح.',
                        'نجاح'
                    )
                }
            });
        });
    </script>
@endsection
