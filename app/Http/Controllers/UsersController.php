<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $page_title = 'Utenti';
        $page_description = 'Some description for the page';
        $users=User::all();
        return view('pages.users.index', compact('page_title', 'page_description','users'));
    }
}
