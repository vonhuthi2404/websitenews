<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin(){
        return view('admin.page.home');
    }
    // public function themtin(){
    //     return view('admin.page.themtin');
    // }
}
