<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\CrudEvents;
use App\Models\Customer;
use App\Models\PersonalTest;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $appointments = Appointment::all();
        $appoin = Appointment::get()->last();
        $test = PersonalTest::get()->last();
        $customer = Customer::get()->last();
        return view('dashboard', compact('appointments'))->with('customer', $customer)
        ->with('appoin', $appoin)
        ->with('test',$test);
    }
    public function store(Request $request)
    {

        $customer = Customer::create([
            'personal_id' => $request->personal_id,
            'name' => $request->name,
            'gender' => $request->gender,
            'start_date' => Carbon::now(),
            'clinic' => $request->clinic
        ]);
        return redirect()->back()->with('succsess', 'patient added successfuly');
    }
}
