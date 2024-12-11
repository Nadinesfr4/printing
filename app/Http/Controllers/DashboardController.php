<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.template');
    }

    public function index_conten() {
        return view('admin.layout.content');
    }
}
