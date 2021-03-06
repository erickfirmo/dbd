<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:superadmin');
    }

    public function index()
    {
        return view('superadmin.home');
    }
}
