<?php

namespace App\Http\Controllers\emp;

use App\Http\Controllers\Controller;
use App\Models\Finance;
use Illuminate\Http\Request;

class EmpFinanceController extends Controller
{
    public function index()
    {
        $finances = Finance::all();
        return view('emp.finance.index', compact('finances'));
    }
}
