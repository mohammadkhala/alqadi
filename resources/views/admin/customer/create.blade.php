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
@php

    $genderArray = ['ذكر', 'انثى'];

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
                                <div class="card-header text-center">
                                    <h4 class="card-title text-center" id="basic-layout-form"> إضافة مريض </h4>
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
                                        <form action="{{ route('admin.customer.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات المريض </h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">الاسم </label>
                                                            <input type="text" value="" id="txt_1"
                                                                onchange='saveValue(this);' class="form-control"
                                                                placeholder="ادخل اسم المريض  " name="name">
                                                            @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">رقم الهوية</label>
                                                            <input type="text" id="" class="form-control"
                                                                placeholder="ادخل رقم الهوية  " name="personal_id"
                                                                value="{{$personal_id}}">
                                                            @error('personal_id')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">العيادة </label>
                                                            <input type="text" value="" id="txt_3"
                                                                onchange='saveValue(this);' class="form-control"
                                                                placeholder="  ادخل اسم العيادة  " name="clinic">
                                                            @error('clinic')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">رقم الهاتف </label>
                                                            <input type="texe" value="" id="txt_4"
                                                                onchange='saveValue(this);' class="form-control"
                                                                placeholder="ادخل رقم الهاتف" name="phone">
                                                            @error('phone')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">تاريخ بداية التعامل </label>
                                                            <input type="date" value="" id="txt_5"
                                                                onchange='saveValue(this);' class="form-control"
                                                                name="start_date">
                                                            @error('start_date')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">العنوان </label>
                                                            <input type="text" value="" id="txt_6"
                                                                onchange='saveValue(this);' class="form-control"
                                                                placeholder="ادخل عنوان المريض  " name="address">
                                                            @error('address')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">الجنس</label>
                                                            <select class="form-control" name="gender">
                                                                @foreach ($genderArray as $item)
                                                                    <option value="{{ $item }}"
                                                                        {{ $item ? 'selected' : '' }}>{{ $item }}
                                                                    </option>
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
                                                            <label for="projectinput1">ملاحظات </label>
                                                            <textarea type="text" value="" id="txt_7" class="form-control" name="note"
                                                                onchange='saveValue(this);'></textarea>
                                                            @error('note')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card card-outline card-info">
                                                                <div class="card-header">
                                                                    <h3 class="card-title">
                                                                        Summernote
                                                                    </h3>
                                                                </div>
                                                                <!-- /.card-header -->
                                                                <div class="card-body">
                                                                    <textarea id="summernote" style="display: none;">                Place &lt;em&gt;some&lt;/em&gt; &lt;u&gt;text&lt;/u&gt; &lt;strong&gt;here&lt;/strong&gt; </textarea>



                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col-->
                                            </div>

                                    </div>


                                </div>
                                <div class="card-footer">
                                    <div class="form-actions">

                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> حفظ
                                        </button>
                                        <a href="{{ route('admin.customer') }}"> <button type="button"
                                                class="btn btn-warning ">
                                                المرضى
                                            </button></a>
                                    </div>
                                </div>
                                </form>
                            </div>

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
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
    <script type="text/javascript">
        document.getElementById("txt_1").value = getSavedValue("txt_1"); // set the value to this input
        document.getElementById("txt_2").value = getSavedValue("txt_2");
        document.getElementById("txt_3").value = getSavedValue("txt_3"); // set the value to this input
        document.getElementById("txt_4").value = getSavedValue("txt_4");
        document.getElementById("txt_5").value = getSavedValue("txt_5");
        document.getElementById("txt_6").value = getSavedValue("txt_6");
        document.getElementById("txt_7").value = getSavedValue("txt_7"); // set the value to this input
        // set the value to this input
        // set the value to this input
        // set the value to this input

        // set the value to this input
        /* Here you can add more inputs to set value. if it's saved */

        //Save the value function - save it to localStorage as (ID, VALUE)
        function saveValue(e) {
            var id = e.id; // get the sender's id to save it .
            var val = e.value; // get the value.
            localStorage.setItem(id, val); // Every time user writing something, the localStorage's value will override .
        }

        //get the saved value function - return the value of "v" from localStorage.
        function getSavedValue(v) {
            if (!localStorage.getItem(v)) {
                return ""; // You can change this to your defualt value.
            }
            return localStorage.getItem(v);
        }
    </script>

@endsection
