@extends('layouts.master')
@section('title')
    اضافة مريض
@endsection
@section('css')
@endsection
@section('title_page1')
    اضافة مريض
@endsection
@section('title_page2')
    لوحة التحكم
@endsection

@section('content')


    <div class="card card-primary">
        <div class="card-header" >
          <h3 class="card-title">Check Id</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.customer.checkidAction') }}"   method="head">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Enter National id</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="personal_id" placeholder="Enter id"
              fdprocessedid="f3s7fb">
            </div>
            @error('personal_id')
            <span class="text-danger">{{ $message }} </span>
        @enderror
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
@endsection
@section('scripts')
@endsection
