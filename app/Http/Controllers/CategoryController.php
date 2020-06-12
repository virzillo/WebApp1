<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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


    public function index()
    {
        $page_title = 'Categorie';
        $page_description = 'Some description for the page';
        $categories=Category::all();
        return view('pages.categories.index',compact('categories','page_title','page_description'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Crea Categoria';
        $page_description = 'Some description for the page';
        $categories=Category::all();
        return view('pages.categories.create',compact('categories','page_title','page_description'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($this->validateRequest());
        $notification = array(
            'message' => 'Corso inserito con successo!',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $page_title = 'Visualizza Categoria';
        $page_description = 'Some description for the page';
        $category=Category::find($category->id);
        return view('pages.categories.show',compact('category','page_title','page_description'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category )
    {
        $this->validateRequest();

        $category = Category::find($category->id);
        $category->titolo = $request->get('titolo');
        $category->pubblicato = $request->get('pubblicato');

        $category->save();

        $notification = array(
            'message' => 'Categoria modificata con successo!',
            'alert-type' => 'success'
        );
        return redirect(action('CategoryController@index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy( $category)
    {
        $category = Category::find($category->id);
        $category->delete();

        $notification = array(
            'message' => 'Categoria eliminata con successo!',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    private function validateRequest()
    {

        return  request()->validate([
            'titolo' => 'required|min:2',
            'pubblicato' => 'required',

        ]);
    }
}
