<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.adminHome');
    }
    public function logout(){
        auth()->logout();
        return redirect('/admin');
    }
}
