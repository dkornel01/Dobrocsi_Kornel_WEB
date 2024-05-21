<?php

namespace App\Http\Controllers;

use App\Models\f;
use App\Models\szavak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class szavakController extends Controller
{
    public function szavak(){
        $szavak=DB::table("szavaks as szav")
        ->select('szav.*')
        ->get();
        $tema=DB::table("temas as tema")
        ->select("tema.*")
        ->get();
        return view("szavak.szavak",['szavak'=>$szavak],['tema'=>$tema]);
        
    }
    public function szavakTema($id){
        $szavak=DB::table("szavaks as szav")
        ->select('szav.*')
        ->where('szav.temaId','=',$id)
        ->get();
        $tema=DB::table("temas as tema")
        ->select("tema.*")
        ->get();
        return view("szavak.szavak",['szavak'=>$szavak],['tema'=>$tema]);
    }
}
