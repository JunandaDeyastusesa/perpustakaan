<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function about() {
    	$halaman = 'about';
    	return view('pages.about', compact('halaman'));
    }
}