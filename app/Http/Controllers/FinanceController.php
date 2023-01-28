<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Test;

use App\Models\Finance;
use Exception;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\PersonalTest;
use Carbon\Carbon;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finances = Finance::all();
        return view('admin.finance.index', compact('finances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.finance.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [

            'customer_id' => 'required|exists:customers,personal_id',
            'test_id' => 'required|exists:p_tests,id',
            'amount' => 'required|integer',
            'date' => 'required'
        ]);

        $finances = Finance::create([
            'customer_id' => Customer::where('personal_id', $request->customer_id)->first()->id,
            'test_id' => $request->test_id,
            'date' => Carbon::now(),
            'amount' => $request->amount,
            'remaining' =>  $request->amount,
            'note' => $request->note,

        ]);
        return redirect()->back()->with('success', 'تم اضافة معلومات مالية جديدة');
    }


    public function edit(Finance $finance, $id)
    {
        $finance = Finance::find($id);

        return view('admin.finance.edit', compact('finance'));
    }


    public function update(Request $request, Finance $finances, $id)
    {
        try {

            $this->validate($request, [
                'customer_id' => 'required|exists:customers,personal_id',
                'test_id' => 'required|exists:p_tests,id',
                'amount' => 'required|integer',
                'date' => 'required'
            ]);
            $test = PersonalTest::findOrFail($request->id);
            $finances= Customer::findOrFail($request->id);
            $finances->update([
                'customer_id' => $finances->customer->personal_id,

                'test_id' => $test->id,
                'date' => $request->date,
                'amount' => $request->amount,
                'note' => $request->note
            ]);
            return redirect()->back()->with('success', 'تم تحديث معلومات مالية جديدة');
        } catch (Exception $ex) {
        // dd($request);
            return $ex;
            return redirect()->back()->with('message', 'حدث خطأ ما');
        }
    }

    public function destroy($id)
    {
        $finance = Finance::findOrFail($id);
        $finance->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
