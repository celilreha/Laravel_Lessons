<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class kotuKelime
{

    public function handle(Request $request, Closure $next)
    {
        /*$kotuKelime=["elma","armut","çilek"];
        if (in_array($request->kullanici_adi,$kotuKelime)){
            $badword=strlen($request->kullanici_adi);
            $sansur="";
            for ($i=0;$i<$badword;$i++)
                $sansur.="*";
            echo $sansur;die;
        }*/
        return $next($request);
    }
}
