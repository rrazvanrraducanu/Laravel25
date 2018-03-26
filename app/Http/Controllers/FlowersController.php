<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Flower;
use Request;

class FlowersController extends Controller
{
    public function index()
    {
        return view('flowers.search');
    }
    public function search()
    {
        $search_term=Request::input('search');
        $flowers=Flower::where('nume', $search_term)-> orwhere('culoare',$search_term)-> orwhere('marime',$search_term)->get();
        return view('flowers.search_result')->with('flowers', $flowers);
    }

}
