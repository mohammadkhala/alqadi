<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\CrudEvents;
use App\Models\Customer;
use App\Models\PersonalTest;
use Carbon\Carbon;
use Auth;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $appointments = Appointment::all();
        $appoin = Appointment::get()->last();

        return view('dashboard', compact('appointments'));
    }
    public function checkidAction(Request $request)
    {
        $appointments = Appointment::all();
        $customer = Customer::where('personal_id', $request->personal_id)->select('personal_id')->get();

        if ($customer->count() > 0) {
            $id = Customer::where('personal_id', $request->personal_id)->select('id')->get()->first();
            return redirect()->route('admin.customer.profile', ['id' => $id]);
        } else {

            return view('dashboard', ['personal_id' => $request->personal_id], compact('appointments'))->with(['personal_id' => $request->personal_id]);
        }
    }
    public function store(Request $request)
    {

        try {
            $request->validate([
                'personal_id' => 'required',
                'name' => 'required',
                'start_date' => 'required|date',
                'gender' => 'required',
                'clinic' => 'required|string',
                'right_eye_without_corr' => 'required',
                'left_eye_without_corr' => 'required',
                'right_eye_with_corr' => 'required',
                'left_eye_with_corr' => 'required',


                // 'report' =>  'required_without:rid|file|mimes:csv,txt,xlx,xls,pdf|max:2048',

                'correctedBy' => 'required|string',
                // 'attach'=>'required_without:aid|file||mimes:csv,txt,xlx,xls,pdf|max:2048',


                'hour' => 'required',
                'clinic' => 'required|string',


            ]);

            $customer = Customer::create([
                'personal_id' => $request->personal_id,

                'name' => $request->name,
                'start_date' => Carbon::now(),
                'phone' => $request->phone,
                'address' => $request->address,
                'note' => $request->note,
                'clinic' => $request->clinic,
                'gender' => $request->gender,

            ]);

            PersonalTest::create([
                'customer_id' =>  $customer->id,

                'right_eye_without_corr' => $request->right_eye_without_corr,
                'left_eye_without_corr' => $request->left_eye_without_corr,
                'right_eye_with_corr' => $request->right_eye_with_corr,
                'left_eye_with_corr' => $request->left_eye_with_corr,
                'date' => Carbon::now(),

                'cost' => $request->cost,
                'addedBy' => Auth::user()->name,
                'correctedBy' => $request->correctedBy,


            ]);
            Appointment::create([
                'customer_id' =>  $customer->id,

                'note' => $request->note,
                'hour' => $request->hour,
                'clinic' => $request->clinic,
                'optimimstic' => Auth::user()->name,
                'name' => $customer->name

            ]);

            return redirect()->back()->with('success', 'تم اضافة مريض جديد');
        } catch (\Throwable $th) {
            //   dd($request);
            //return $th;
            return redirect()->back()->with('error', 'حدث خطأ يرجى اعادة المحاول');
        }
    }
}
