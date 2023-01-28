<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\PersonalTest;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index(Customer $customer)
    {

        $customer->load('appointments', 'personalTests', 'test')->id;

        return view('visitreport', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Customer $customer, Request $request, $id)
    {
        try {

            $this->create([
                'personal_id' => $request->personal_id,
                'name' => $request->name,
                'start_date' => $request->start_date,
                'phone' => $request->phone,
                'address' => $request->address,
                'note' => $request->note,
                'clinic' => $request->clinic,
                'gender' => $request->gender,
            ]);
            return redirect()->back()->with('success', 'تم اضافة مريض جديد');
        } catch (Exception $ex) {
            return $ex;
        }
    }


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
