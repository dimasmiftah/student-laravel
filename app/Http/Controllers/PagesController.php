<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // navigate to view/index.blade.php
    public function home() {
        return  view('index');
    }
    
    // navigate to view/about.blade.php with 'nama' props
    public function about() {
        return view('about', ['nama' => 'Dimas Miftahul Huda']);
    }
}
