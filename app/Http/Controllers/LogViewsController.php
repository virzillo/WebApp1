<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostView;
use App\ImplantView;

class LogViewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
        $postviews=PostView::all();
        $page_title = 'Log Visualizzazione post';
        $page_description = '';
        return view('backend.logs.post',compact('postviews','page_title','page_description'));

    }

    public function implant()
    {
        $implantviews=ImplantView::all();
        $page_title = 'Log Visualizzazione impianti';
        $page_description = '';
        return view('backend.logs.implant',compact('implantviews','page_title','page_description'));

    }
}
