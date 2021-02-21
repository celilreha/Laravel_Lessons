<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Str;

class App extends Controller
{
    public function index(){
        //model kullanarak sorgu
        //$users=User::where("age","<",28)->count();
        //$users=User::all();
        //$user=User::find(102);
        //model kullanarak ekleme işlemi(created_at ve updated_at otomatik oluşur)
        /*$user=new User;
        $user->name="Celil Reha";
        $user->email="Celil@gmail.com";
        $user->age=25;
        $user->gender=1;
        $user->password=md5("123456");
        $user->save();*/
        //model kullanarak insert ile db'ye ekleme
        /*User::insert([
            "name"=>"Celil Reha",
        "email"=>"Celil@gmail.com",
        "age"=>25,
        "gender"=>1,
        "password"=>md5("123456")
        ]);*/
        //model kullanarak update işlemi
        //Post::where("id",2)->update(["title"=>"Laravel Dersleri Updated"]);
        //model kullanarak farklı bir yolla update işlemi
        /*$post=Post::find(2);
        $post->title="Güncellendi";
        $post->save();*/


        //sorgu için
        //$users=DB::table("users")->where("gender",1)->get();
        //$users=DB::table("users")->orderBy("age","asc")->get();
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
        //DB::table("users")->where("id",101)->delete();
        $uye=User::find(102);
        echo $uye->getPosts;
        //return view("welcome");
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
