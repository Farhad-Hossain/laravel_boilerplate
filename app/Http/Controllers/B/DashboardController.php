<?php

namespace App\Http\Controllers\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Dashboard';
        return $this->view('pages.dashboard', compact('title'));
    }

    public function basic_table(Request $request)
    {
        $title = 'Basic table';
        return $this->view('pages.basic_table', compact('title'));
    }
}
