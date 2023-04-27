<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function about(){
        $massiv1= About::select('id', 'title', 'text','img', 'type', 'date')
        ->get();
        return view('layout.about',compact('massiv1'));
      
    }

}
