<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class loginController extends Controller
{
    //
    public function login()
    {
        if($Input =Input::all()){


            $user_password = $Input["user_password"];



//            dd(session("user_name"));
            if($user_password!=123456){
                session(["user_password"=>null]);


                return  back()->with("msg","验证码错误");
            }
            session(["user_name"=>$user_password]);



            return view("index.index");
        }else{

            return view("admin.login");


        }

    }

}
function  crypt($strs){

    $res =Crypt::encrypt($strs);
    echo  $res ;

    echo  Crypt::decrypt($res);



}