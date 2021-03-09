<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // dd(auth()->user());
        return view('dashboard');
    }


    public function __construct()
    {
        $this->middleware(['auth']);
    }
}
