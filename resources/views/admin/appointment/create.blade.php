@extends('layouts.master')
@section('title')
    اضافة موعد
@endsection
@section('css')
@endsection
@section('title_page1')
    اضافة موعد
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
                                    <h4 class="card-title text-center" id="basic-layout-form"> إضافة موعد </h4>
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
                                        <form class="form" action="{{ route('admin.appointment.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> appointment details  </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">national id  </label>
                                                            <input type="text" value="" id="txt_9" onchange='saveValue(this);'
                                                                class="form-control" name="customer_id">
                                                            @error('customer_id')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">name </label>
                                                            <input type="text" value="" id="txt_10" onchange='saveValue(this);'
                                                                class="form-control" name="name">
                                                            @error('name')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">date </label>
                                                            <input type="date" value="" id="txt_11" onchange='saveValue(this);'
                                                                class="form-control" name="date">
                                                            @error('date')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">hour </label>
                                                            <input type="time" value="" id="txt_12" onchange='saveValue(this);'
                                                                class="form-control" name="hour">
                                                            @error('hour')
                                                                <span class="text-danger">{{ $message }} </span>
                                                            @enderror
                                                        </div>







                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">clinic </label>
                                                            <input type="text" value="" id="txt_13" onchange='saveValue(this);'
                                                                class="form-control" name="clinic">
                                                            @error('clinic')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">optimistic </label>
                                                            <input type="text" value="" id="txt_14"   onchange='saveValue(this);'
                                                            class="form-control" name="optimimstic">
                                                            @error('optimimstic')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">notes </label>
                                                            <textarea type="text" value="" id="txt_15" onchange='saveValue(this);' class="form-control" name="note"></textarea>
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
                                            <i class="la la-check-square-o"></i> حفظ
                                        </button>
                                        <a href="{{ route('admin.appointment') }}"> <button type="button"
                                                class="btn btn-warning ">
                                                المواعيد
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

<script type="text/javascript">
    document.getElementById("txt_9").value = getSavedValue("txt_9");    // set the value to this input
    document.getElementById("txt_10").value = getSavedValue("txt_10");
    document.getElementById("txt_11").value = getSavedValue("txt_11");    // set the value to this input
    document.getElementById("txt_12").value = getSavedValue("txt_12");
    document.getElementById("txt_13").value = getSavedValue("txt_13");
    document.getElementById("txt_14").value = getSavedValue("txt_14");
    document.getElementById("txt_15").value = getSavedValue("txt_15");    // set the value to this input
// set the value to this input
// set the value to this input
// set the value to this input

    // set the value to this input
    /* Here you can add more inputs to set value. if it's saved */

    //Save the value function - save it to localStorage as (ID, VALUE)
    function saveValue(e){
        var id = e.id;  // get the sender's id to save it .
        var val = e.value; // get the value.
        localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override .
    }

    //get the saved value function - return the value of "v" from localStorage.
    function getSavedValue  (v){
        if (!localStorage.getItem(v)) {
            return "";// You can change this to your defualt value.
        }
        return localStorage.getItem(v);
    }
</script>
@endsection
