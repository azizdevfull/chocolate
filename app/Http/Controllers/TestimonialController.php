<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
class TestimonialController extends Controller
{
    public function testimonial(){
        $massiv3= Testimonial::select('id', 'name', 'text','img')
        ->get();
        return view('layout.testimonial',compact('massiv3'));
      
    }
}
