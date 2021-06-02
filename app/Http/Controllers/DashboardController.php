<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected function index()
    {
        dd(auth()->user());
        return view('dashboard');
    }
}