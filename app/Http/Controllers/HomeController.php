<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\scrumsModel;
use App\Models\projectsModel;
use App\Models\staffsModel;
use App\Models\divisionsModel;
use DB;
use view;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){                                  
                    // return $text_persentase_grandtotal;
        return view('index');
    }
}
