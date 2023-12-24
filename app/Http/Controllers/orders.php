<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order ;

class orders extends Controller
{
  public function add(Request $request){

        $order = new Order();
        $order -> userid = Auth::user()->id;
        $size = $request->input('sizex') * $request->input('sizey');
        $order -> size =  $size;
        $order -> quantity = $request->input('quantity');
        $order -> layers = $request->input('layers');
        $order -> min_track = $request->input('min_track');
        $order -> silkscreen = $request->input('silkscreen');
        $order -> price = $size * 5 ;
        $order -> status = "not confirmed";

        $order ->save();
    return redirect("/");
}
}
