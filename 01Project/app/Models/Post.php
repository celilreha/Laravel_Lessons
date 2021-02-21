<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //update_at ve created_at sutunlarını değiştirirsek modelden de bu şekilde değiştirmek gerekir.
    //const CREATED_AT = "olusturulma_tarihi";
    //const UPDATED_AT  = "degistirilme_tarihi";
    public function getUser(){
        //one to one ilişkisi için
        return $this->hasOne("App\Models\User","id","user");
    }
    public function getComments(){
        return $this->hasMany("App\Models\Comment","post");
    }
}
