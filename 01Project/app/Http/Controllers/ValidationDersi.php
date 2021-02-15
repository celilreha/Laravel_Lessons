<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class ValidationDersi extends Controller
{
    public function index(){
        return view("kayit");
    }
    public function post(Request $request){
        $request->validate([
            "ad"=>"required | min:3",
            "email"=>"required | email",
            "sifre"=>"required|min:6|confirmed"
        ]);
        echo "kural geçti";
        /*$rules = Validator::make($request->all(),[
            "ad"=>"required | min:3",
            "email"=>"required | email",
            "sifre"=>"required|min:6|confirmed"
        ]);
        if($rules->fails()){
            return "hata";
        }else{
            return "hata yok";
        }*/
    }
}
