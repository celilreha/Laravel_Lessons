<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function getUser(){
        //one to one ilişkisi için
        return $this->hasOne("App\Models\User","id","user");
    }
}
