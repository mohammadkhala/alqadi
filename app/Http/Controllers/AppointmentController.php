<?php

namespace App\Http\Controllers;

use Exception;

use App\Models\Appointment;
use App\Models\Customer;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all();
        return view('admin.appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $customer_id = Customer::where('personal_id', $request->personal_id)->first()->id;

        try {
            $request->validate([
                'customer_id' => 'required|exists:customers,personal_id',
                'date' => 'required|date',
                'hour' => 'required',
                'clinic' => 'required|string',
                'optimimstic' => 'required|string',
                'name' => 'required|string',
            ]);
            $appointment = Appointment::create([
                'customer_id' => Customer::where('personal_id', $request->customer_id)->first()->id,
                'date' => $request->date,
                'note' => $request->note,
                'hour' => $request->hour,
                'clinic' => $request->clinic,
                'optimimstic' => $request->optimimstic,
                'name' => $request->name
            ]);
            return redirect()->back()->with('success', 'تم اضافة موعد جديد');
        } catch (Exception $ex) {
            return $ex;
            return redirect()->back()->with('error', 'المريض غير موجود يرجى اضافته');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appoin = Appointment::find($id);

        // return $appoin;
        return view('admin.appointment.edit', compact('appoin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        try {
            $request->validate([
                'customer_id' => 'required|exists:customers,personal_id',
                'date' => 'required|date',
                'clinic' => 'required|string',
                'optimimstic' => 'required|string',
                'name' => 'required|string',
                'hour'=>'required',

            ]);

            $appointment->update([
                'customer_id' => Customer::where('personal_id', $request->customer_id)->first()->id,

                'date' => $request->date,
                'note' => $request->note,
                'clinic' => $request->clinic,
                'optimimstic' => $request->optimimstic,
                'name' => $request->name,
                'hour' => $request->hour,

            ]);
            return redirect()->back()->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (Exception $ex) {
            //return $ex;
            return redirect()->back()->with(['error' => 'هذا الموعد غير موجود ']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
