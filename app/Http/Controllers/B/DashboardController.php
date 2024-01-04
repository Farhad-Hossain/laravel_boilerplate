<?php

namespace App\Http\Controllers\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return $this->view('pages.dashboard');   
    }

    public function basic_table(Request $request)
    {
        return $this->view('pages.basic_table');
    }
}
