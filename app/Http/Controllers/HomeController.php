<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Test;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Table;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = Customer::latest()->get();
        $tests=Test::latest()->get();
        return view('dashboard', compact('customers','tests'));
    }
}
