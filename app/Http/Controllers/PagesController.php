<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class PagesController extends Controller
{
    public function index(){
        $data = Employees::all();
        return view('index',['members'=>$data]);
    }

    public function about(){
        return view('pages.about');
    }

    
    public function login(){
        return view('pages.login');
    }

    public function register(){
        return view('pages.register');
    }

    public function edit($id){
        //Find through primary key
        $data = Employees::find($id);
        return view('pages.edit',['member'=>$data]);
    }
}
