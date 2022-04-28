<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * HomeController
 */
class HomeController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('index');
    }
}
