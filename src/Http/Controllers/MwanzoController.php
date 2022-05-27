<?php

namespace Helaplus\Laravelchapchap\Http\Controllers;

class MwanzoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Index
    |--------------------------------------------------------------------------
    |
    | This the index method. The index method
    | method loads a view that displays
    | all the created resources
    |
    */
    /**
     * Display a list of generated code.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('laravelchapchap::mwanzo');  
    }
}