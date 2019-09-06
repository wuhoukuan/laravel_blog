<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginoutController extends Controller
{
    //


    public  function  loginout(){

        session(["user_name"=>null]);

        return redirect("admin/login");

    }
}
