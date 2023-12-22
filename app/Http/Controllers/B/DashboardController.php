<?php

namespace App\Http\Controllers\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ( $this->ajax ) {
            return view('b.pages.dashboard');
        }
        return view('b.base');
    }

    public function basic_table(Request $request)
    {
        if ( $this->ajax ) {
            return view('b.pages.basic_table');
        }
        return view('b.base');
    }
}
