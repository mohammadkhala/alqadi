@extends('layouts.master')
@section('title')
    فحص المريض
@endsection
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('title_page1')
    فحص المريض
@endsection
@section('title_page2')
    لوحة التحكم
@endsection
@section('content')
    @method('PUT')
    <input type="hidden" name="id">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped" dir="rtl">
            <thead>
                <tr>
                    <th>#</th>
                    <th>national id </th>
                    <th> test id </th>
                    <th>distance</th>
                    <th> right_eye_without_corr </th>
                    <th>left_eye_without_corr</th>
                    <th> right_eye_with_corr </th>
                    <th>left_eye_with_corr</th>
                    <th>date</th>
                    <th>report </th>
                    <th>cost </th>
                     <th>attach </th>
                    <th>actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($ptests as $key => $ptest)
                <tr>
                    <td>{{ $key = $key + 1 }}</td>
                    <td>{{ $ptest->customer->personal_id }}</td>
                    <td> {{ $ptest->test_id }}</td>
                    <td> {{ $ptest->distance }}</td>
                    <td>{{ $ptest->right_eye_without_corr  }} </td>
                    <td>{{ $ptest->left_eye_without_corr  }}</td>
                    <td>{{ $ptest->right_eye_with_corr  }} </td>
                    <td>{{ $ptest->left_eye_with_corr  }}</td>
                    <td>{{ $ptest->date }}</td>
                    <td>{{ $ptest->report }}</td>
                     <td>{{ $ptest->cost }}</td>
                      <td>{{ $ptest->attach }}</td>
                    <td>
                        <a href="{{ route('admin.ptest.edit', ['id' => $ptest->id]) }}" class="btn btn-primary btn-sm"
                            id="edit"><i class="fa fa-edit"></i></a>
                     <a href="{{ route('admin.ptest.delete', ['id' => $ptest->id]) }}" class="btn btn-danger btn-sm"
                        id="delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
