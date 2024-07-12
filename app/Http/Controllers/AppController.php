<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $title = 'app';
        return view('app',compact('title'));
    }
}
