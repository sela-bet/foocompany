<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
   public function index($id){
    return view("posts/index",["id"=>$id]);
   }
}
