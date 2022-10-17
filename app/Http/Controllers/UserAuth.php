<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $request)
    {
        return $request ->input();
    }
}
