<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class HomeController 
{
     /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('front.pages.home');
    }
}
