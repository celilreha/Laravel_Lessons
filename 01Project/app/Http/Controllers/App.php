<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class App extends Controller
{
    public function index(){
        //sorgu için
        //$users=DB::table("users")->where("gender",1)->get();
        $users=DB::table("users")->orderBy("age","asc")->get();
        print_r($users);
        //ekleme işlemi
        /*DB::table("users")->insert([
            "name"=>"celil",
            "email"=>"celil@gmail.com",
            "age"=>25,
            "gender"=>1,
            "password"=>md5("102030")

        ]);*/
        //güncelleme işlemi
        /*DB::table("users")->where("id",101)->update([
           "email"=>"celilreha@gmail.com"
        ]);*/
        //silme işlemi
        DB::table("users")->where("id",101)->delete();
        //return view("welcome",["users"=>$users]);
    }
    public function iletisim(){
        return view("pages.iletisim");
    }
    public function post(Request $request){
        //$request->post(name); name isimli gönderilen forma ulaşabilirim. ya da $request->name ile de ulaşabilirim.
        //$request->method(); methodun ne  olduğunu döner (POST,GET) $request->isMethod("post") ile de kullanılır.
        //$request->is(); yolu döner.(iletisim/post)
        return $request->post();
    }

}
