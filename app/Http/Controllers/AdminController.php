<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
       
        return view('admin');
    }
}
