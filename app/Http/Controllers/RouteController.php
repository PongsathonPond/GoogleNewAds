<?php

namespace App\Http\Controllers;

class RouteController extends Controller
{
    //
    public function index()
    {

        return view('page.index');
    }

    public function new1()
    {

        return view('page.new1');
    }

    public function new2()
    {

        return view('page.new2');
    }

}
