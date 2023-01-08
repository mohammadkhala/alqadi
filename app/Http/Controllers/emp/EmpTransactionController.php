<?php

namespace App\Http\Controllers\emp;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class EmpTransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('emp.transaction.index', compact('transactions'));
    }
}
