<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $r)
    {
        $data['user'] = auth()->user();
        return view('dashboard.dashboard', $data);
    }
}
