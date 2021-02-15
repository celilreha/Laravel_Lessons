<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
    public function index(){
        $data["names"]=["Celil","Reha","Esgice"];
        return view("pages.anasayfa",$data);
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
