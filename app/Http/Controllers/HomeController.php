<?php

namespace App\Http\Controllers;

use App\Models\Terem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $gepCount = Terem::count();

        return view('stats',[
            'gepCount' => $gepCount
        ]);
    }

}
