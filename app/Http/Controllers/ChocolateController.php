<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chocolate;
class ChocolateController extends Controller
{
    public function chocolate(){
        $massiv2= Chocolate::select('id', 'name', 'cost','img')
        ->get();
        return view('layout.chocolate',compact('massiv2'));
      
    }
}
