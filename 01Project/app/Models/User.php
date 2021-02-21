<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //eğer tablo ismi ile model ismi farklı ise hangi tablo olduğunu belirtmek için kullanılır
    //public $table="users";
    //eğer primarykey id değilse bunu da belirtmek gerekir
    //public $primaryKey = "uye_id";
    public function getPosts(){
        //eğer üçüncü parametre id olacaksa yazmaya gerek yok
        //one to many ilişkisi için
        return $this->hasMany("App\Models\Post","user","id");
    }
}
