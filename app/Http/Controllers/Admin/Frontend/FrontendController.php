<?php

namespace App\Http\Controllers\Admin\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }
}
