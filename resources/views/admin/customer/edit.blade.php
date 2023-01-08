@extends('layouts.master')
@section('title')
    تعديل المرضى
@endsection
@section('css')

@endsection
@section('title_page1')
    {{ $customer->name }}تعديل
@endsection
@section('title_page2')
    لوحة التحكم
@endsection
@php

    $genderArray=['ذكر','انثى'];

@endphp
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
                                    <h4 class="card-title text-center" id="basic-layout-form"> تعديل المرضى</h4>
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
                                        <form class="form"
                                            action="{{ route('admin.customer.update', ['id' => $customer->id]) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')


                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>  patient details </h4>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">name </label>
                                                            <input type="text" value="{{ $customer->name }}"
                                                                id="name" class="form-control"
                                                                placeholder="ادخل اسم المريض  " name="name">
                                                            @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">national id  </label>
                                                            <input type="text" value="{{ $customer->personal_id }}"
                                                                id="name" class="form-control"
                                                                placeholder="ادخل رقم الهوية  " name="personal_id">
                                                            @error('personal_id')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">clinic  </label>
                                                            <input type="text" value="{{ $customer->clinic }}"
                                                                id="name" class="form-control"
                                                                placeholder="ادخل اسم العيادة   " name="clinic">
                                                            @error('clinic')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">mobile  </label>
                                                            <input type="texe" value="{{ $customer->phone }}"
                                                                id="name" class="form-control"
                                                                placeholder="ادخل رقم الهاتف" name="phone">
                                                            @error('phone')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> start date  </label>
                                                            <input type="date" value="{{ $customer->start_date }}"
                                                                id="name" class="form-control" name="start_date">
                                                            @error('start_date')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">address </label>
                                                        <input type="text" value="{{ $customer->address }}"
                                                            id="name" class="form-control"
                                                            placeholder="ادخل عنوان المريض  " name="address">
                                                        @error('address')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">gender</label>
                                                        <select class="form-control" name="gender">
                                                          @foreach ($genderArray as $item)
                                                          <option value="{{$item}}" {{($item) ? 'selected' : ''}}>{{$item}}</option>

                                                          @endforeach


                                                        </select>
                                                        @error('gender')
                                                            <span class="text-danger">{{ $message }} </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">notes </label>
                                                        <textarea type="text" value="{{ $customer->note }}"
                                                            id="name" class="form-control" name="note"></textarea>
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
                                        <i class="la la-check-square-o"></i> edit
                                    </button>
                                    <a href="{{ route('admin.customer') }}"> <button type="button" class="btn btn-warning ">
                                            patients
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
