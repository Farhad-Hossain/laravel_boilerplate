<?php

namespace App\Http\Controllers\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ( $this->ajax ) {
            return view('pages.dashboard');
        }
        return view('base');
    }

    public function basic_table(Request $request)
    {
        if ( $this->ajax ) {
            return view('pages.basic_table');
        }
        return view('base');
    }
}
