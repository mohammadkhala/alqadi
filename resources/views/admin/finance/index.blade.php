@extends('layouts.master')
@section('title')
    المالية
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


المالية

@endsection
@section('title_page2')



لوحة التحكم



@endsection
@section('content')
@if (auth()->user()->is_admin == 1)
   <div class="row">
      <div class="col-sm-4 col-6">
        <div class="description-block border-right">
          <span class="description-percentage text-success"><i class="fas fa-caret-up">شيكل</i> </span>
          <h5 class="description-header">{{ App\Models\Finance::sum('amount') }}</h5>

          <span class="description-text">مجموع الدخل</span>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.col -->
      <div class="col-sm-4 col-6">
        <div class="description-block border-right">
          <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i>شيكل </span>
          <h5 class="description-header">{{ App\Models\Transaction::sum('payment') }}</h5>

          <span class="description-text">مجموع الدفعات</span>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.col -->
      <div class="col-sm-4 col-6">
        <div class="description-block border-right">
          <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> شيكل</span>
          <h5 class="description-header">{{ App\Models\Finance::sum('remaining') }}</h5>
          <span class="description-text">مجموع الدفعات غير المكتملة</span>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.col -->

    </div><div class="card-footer">

    <!-- /.row -->
  </div>
@endif

    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped" dir="rtl">

            <thead>

                <tr>
                    <th>finance id </th>
                    <th>national id </th>
                    <th>test id </th>
                    <th>date  </th>
                    <th>total ammount </th>
                    <th>remaining</th>
                    <th>notes</th>
                    <th>actions</th>

                </tr>
            </thead>
            <a href="{{ route('admin.transaction.create') }}" >
                <button type="button" class="btn btn-info">  add payments
                </button>
            </a>
            <tbody>
                @foreach ($finances as $key => $finance)
                <tr>

                    <td>{{ $finance->id }} </td>
                    <td>{{ $finance->customer->personal_id }}</td>
                    <td>{{ $finance->test_id }} </td>
                    <td>{{ $finance->date }} </td>
                    <td>{{ $finance->amount }} </td>
                    <td>{{ $finance->remaining}} </td>
                    <td>{{ $finance->note }} </td>

                    <td>
                        <a href="{{ route('admin.finance.edit', ['id' => $finance->id]) }}" class="btn btn-primary btn-sm"
                            id="edit"><i class="fa fa-edit"></i></a>
                     <a href="{{ route('admin.finance.delete', ['id' => $finance->id]) }}" class="btn btn-danger btn-sm"
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
