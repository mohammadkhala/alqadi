@extends('layouts.master')
@section('title')
    اضافة فحص مريض
@endsection
@section('css')
@endsection
@section('title_page1')
    اضافة فحص مريض
@endsection
@section('title_page2')
    لوحة التحكم
@endsection
@section('content')
    <div class="app-content ">
        <div class="content text-right">
            <div class="content-header row text-center">
                <div class="content-header-left col-md-6 col-12 mb-2">

                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts" dir="rtl">
                    <div class="row match-height">
                        <div class="col-md-12  ">
                            <div class="card ">
                                <div class="card-header text-center">
                                    <h4 class="card-title text-center" id="basic-layout-form"> إضافة فحص مريض </h4>
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
                                        <form class="form" action="{{ route('admin.ptest.update',['id'=>$ptest->id]) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات الفحص </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">رقم الهوية  </label>
                                                            <input type="text" value="{{$ptest->customer->personal_id}}" id="personal_id"
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
                                                            <input type="text" value="{{$ptest->test_id}}" id="test_id"
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
                                                            <label for="projectinput1">المسافة </label>
                                                            <input type="text" value="{{$ptest->distance}}" id="distance"
                                                                class="form-control"
                                                                name="distance">
                                                            @error('distance')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">درجة العين اليمنى</label>
                                                            <input type="text" value="{{$ptest->right_eye_degree}}" id="right_eye_degree"
                                                                class="form-control"
                                                                name="right_eye_degree">
                                                            @error('right_eye_degree')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">درجة العين اليسرى</label>
                                                        <input type="text" value="{{$ptest->left_eye_degree}}" id="left_eye_degree"
                                                            class="form-control"
                                                            name="left_eye_degree">
                                                        @error('left_eye_degree')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">التاريخ </label>
                                                        <input type="date" value="{{$ptest->date}}" id="date"
                                                            class="form-control"
                                                            name="date">
                                                        @error('date')
                                                            <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="report">تقرير </label>
                                                        <input type="file" value="{{$ptest->report}}" id="report"
                                                            class="form-control"
                                                            name="report">
                                                        @error('report')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">التكلفة </label>
                                                        <input type="text" value="{{$ptest->cost}}" id="cost"
                                                            class="form-control"
                                                            name="cost">
                                                        @error('cost')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="attach">مرفقات </label>
                                                        <input type="file" value="{{$ptest->attach}}" id="attach"
                                                            class="form-control"
                                                            name="attach">
                                                        @error('attach')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                    <div class="form-actions">

                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> حفظ
                                        </button>
                                        <a href="{{route('admin.ptest')}}"> <button type="button" class="btn btn-warning " >
الفحوصات                                            </button></a>
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
