<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Test;
use Illuminate\Http\Request;
use Exception;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::all();
        return view('admin.test.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'customer_id'=>'required|exists:customers,personal_id',
                'description'=>'required'
            ]);
            $test = Test::create([
                'customer_id'=> Customer::where('personal_id', $request->customer_id)->first()->id,

                'description'=>$request->description,
                'info_mid'=>$request->info_mid
            ]);
            return redirect()->back()->with('success', 'تم اضافة فحص جديد');

        }catch(Exception $ex){
      return redirect()->back()->with('error', 'حدث خطأ');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminTest  $adminTest
     * @return \Illuminate\Http\Response
     */
    public function show(Test $adminTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminTest  $adminTest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::find($id);
        return view('admin.test.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminTest  $adminTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $request->validate([
                'personal_id'=>'required|exists:customers,personal_id',
                'desc'=>'required'
            ]);
            $test = Test::findOrFail($id);
            $test->update([
                    'customer_id'=>$test->customer->id,
                    'description'=>$request->desc,
                    'info_mid'=>$request->info_mid
                ]);
            return redirect()->route('admin.test')->with(['success' => 'تم ألتحديث بنجاح']);
        }catch(Exception $ex){
            return redirect()->route('admin.test')->with(['error' => 'هذا الموعد غير موجود ']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminTest  $adminTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test,$id)
    {
        $test=Test::findOrFail($id);
        $test->delete();
        return redirect()->route('admin.test')->with('message','تم الحذف بنجاح');
    }
}
