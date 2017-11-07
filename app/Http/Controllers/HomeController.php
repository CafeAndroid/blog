<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$breadcrumbs = json_encode([
    		['titulo' => 'Home', 'url' => '']
    	]); 

        return view('home', compact('breadcrumbs'));
    }
}
