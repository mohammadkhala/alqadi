@extends('layouts.master')
@section('title')
    تعديل الفحص
@endsection
@section('css')

@endsection
@section('title_page1')
    {{ $test->p_id }}تعديل
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
                                <div class="card-header text-right">
                                    <h4 class="card-title text-center" id="basic-layout-form"> تعديل المواعيد</h4>
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
                                        <form class="form" action="{{ route('admin.test.update',['id'=>$test->id]) }}" method="POST"
                                           >
                                           @csrf
                                           @method('PUT')


                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات الموعد </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">رقم الهوية </label>
                                                            <input type="text" value="{{$test->customer->personal_id}}" id="personal_id"
                                                                class="form-control"
                                                                name="personal_id">
                                                            @error('personal_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">الوصف </label>
                                                            <textarea type="text" value="{{$test->description}}" id="desc"
                                                                class="form-control"
                                                                name="description"></textarea>
                                                            @error('description')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">معلومات طبية </label>
                                                        <textarea type="text" value="{{$test->info_mid}}" id="info_mid"
                                                            class="form-control"
                                                            name="info_mid"></textarea>
                                                        @error('info_mid')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>

                                    </div>




                                </div>


                                <div class="form-actions">

                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> تعديل
                                    </button>
                                    <a href="{{ route('admin.test') }}"> <button type="button" class="btn btn-warning ">
                                            الفحص
                                        </button></a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>
        <!-- // Basic form layout section end -->
    </div>
    </div>
    </div>
@endsection






@section('scripts')

@endsection
