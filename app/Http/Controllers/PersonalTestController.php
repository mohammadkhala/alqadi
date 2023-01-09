<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Customer;
use App\Models\Test;

use App\Models\PersonalTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PersonalTestRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;;
class PersonalTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ptests = PersonalTest::all();
        return view('admin.personaltest.index', compact('ptests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personaltest.create');
    }


    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'customer_id' => 'required|exists:customers,personal_id',

                'right_eye_without_corr' => 'required',
                'left_eye_without_corr' => 'required',
                'right_eye_with_corr' => 'required',
                'left_eye_with_corr' => 'required',

                'date' => 'required|date',
                // 'report' =>  'required_without:rid|file|mimes:csv,txt,xlx,xls,pdf|max:2048',
                'cost' => 'required|integer',
                'correctedBy' => 'required|string',
                // 'attach'=>'required_without:aid|file||mimes:csv,txt,xlx,xls,pdf|max:2048',

            ]);


            // dd($request->all());

            $ptest = PersonalTest::create([
                'customer_id' => Customer::where('personal_id', $request->customer_id)->first()->id,

                'right_eye_without_corr' => $request->right_eye_without_corr,
                'left_eye_without_corr' => $request->left_eye_without_corr,
                'right_eye_with_corr' => $request->right_eye_with_corr,
                'left_eye_with_corr' => $request->left_eye_with_corr,
                'date' => Carbon::now(),

                'cost' => $request->cost,

                'addedBy' => Auth::user()->name,
                'correctedBy' => $request->correctedBy,

            ]);
         //   dd($ptest);
            return redirect()->back()->with('success', 'تم اضافة فحص جديد');
        } catch (Exception $ex) {
           // return $ex;
            return redirect()->route('admin.ptest.create')->with('error', ' test id not exists');
        }
    }



    public function edit($id)
    {
        $ptest = PersonalTest::find($id);
        // return $ptest;
        return view('admin.personaltest.edit', compact('ptest'));
    }


    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'customer_id' => 'required|exists:customers,personal_id',

                'right_eye_without_corr' => 'required|string',
                'left_eye_without_corr' => 'required|string',
                'right_eye_with_corr' => 'required|string',
                'left_eye_with_corr' => 'required|string',

                'date' => 'required|date',
                'addedBy' => 'required|string',
                'correctedBy' => 'required|string',

                'cost' => 'required|integer',


            ]);

            $ptest = PersonalTest::findOrFail($id);
            $ptest->update([
                'customer_id' => $ptest->customer->id,

                'right_eye_without_corr' => $request->right_eye_without_corr,
                'left_eye_without_corr' => $request->left_eye_without_corr,
                'right_eye_with_corr' => $request->left_eye_with_corr,
                'left_eye_with_corr' => $request->left_eye_without_corr,
                'date' => $request->date,

                'cost' => $request->cost,

                'addedBy' => auth()->user()->name,
                'correctedBy' => $request->correctedBy,

            ]);

            // $ptest->update([
            //     'attach'=>   $request->attach,
            // ]);

            return redirect()->back()->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (Exception $ex) {
           // return $ex;
            return redirect()->route('admin.ptest')->with(['error' => 'هذا الموعد غير موجود ']);
        }
    }

    public function destroy($id)
    {
        $ptest = PersonalTest::findOrFail($id);
        $ptest->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
