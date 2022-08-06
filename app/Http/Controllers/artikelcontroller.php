<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shodakoh;
use\App\Models\donatur;

class artikelcontroller extends Controller
{
    //
    public function create(){
        
    $sedekah = shodakoh::all();
    return view('tampilanuser.sedekah2',compact('sedekah'),[
        "title" => "Sedekah"
    ]);

    }
}
