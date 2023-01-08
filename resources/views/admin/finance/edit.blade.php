@extends('layouts.master')
@section('title')
    تعديل مالية
@endsection
@section('css')
@endsection
@section('title_page1')
تعديل مالية
@endsection
@section('title_page2')
    لوحة التحكم
@endsection
@section('content')

            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts" dir="rtl">
                    <div class="row match-height">
                        <div class="col-md-12  ">
                            <div class="card ">
                                <div class="card-header text-center">
                                    <h4 class="card-title text-center" id="basic-layout-form"> تعديل مالية  </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('admin.finance.update',['id'=>$finance->id]) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات المالية </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">رقم الهوية  </label>
                                                            <input type="text" value="{{$finance->personal_id}}" id="personal_id"
                                                                class="form-control"
                                                                name="personal_id">
                                                            @error('personal_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">رقم الفحص</label>
                                                            <input type="text" value="{{$finance->test_id}}" id="test_id"
                                                                class="form-control"
                                                                name="test_id">
                                                            @error('test_id')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">المبلغ </label>
                                                            <input type="text" value="{{$finance->amount}}" id="amount"
                                                                class="form-control"
                                                                name="amount">
                                                            @error('amount')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">التاريخ </label>
                                                            <input type="date" value="{{$finance->date}}" id="date"
                                                                class="form-control"
                                                                name="date">
                                                            @error('date')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div> </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">ملاحظات </label>
                                                        <textarea type="text" value="{{$finance->note}}" id="note"
                                                            class="form-control"
                                                            name="note"></textarea>
                                                        @error('note')
                                                            <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                </div>
                                    <div class="form-actions">

                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> تعديل
                                        </button>
                                        <a href="{{route('admin.finance')}}"> <button type="button" class="btn btn-warning " >
                                            المالية
                                            </button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>
    </div>
    </div>
    </div>
@endsection
@section('scripts')
@endsection