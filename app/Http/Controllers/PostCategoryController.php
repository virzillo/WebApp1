<?php

namespace App\Http\Controllers;

use App\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
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
        $postcategory=PostCategory::all();
        $page_title = 'Categorie';
        $page_description = 'Some description for the page';
        return view('pages.postcategories.index',compact('postcategory','page_title','page_description'));

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
        return view('pages.postcategories.create',compact('page_title','page_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PostCategory::create($this->validateRequest());
        $notification = array(
            'message' => 'Categoria inserita con successo!',
            'alert-type' => 'success'
        );
        // return back()->with($notification);
        return redirect(action('PostCategoryController@index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Modifica Categoria';
        $page_description = '';
        $postcategory = PostCategory::find($id);
        return view('pages.postcategories.show',compact('postcategory','page_title','page_description'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateRequest();

        $postcategory = PostCategory::find($id);
        $postcategory->titolo = $request->get('titolo');

        $postcategory->pubblicato = $request->get('pubblicato');

        $postcategory->save();

        $notification = array(
            'message' => 'Categoria modificata con successo!',
            'alert-type' => 'success'
        );
        return redirect(action('PostCategoryController@index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postcategory = PostCategory::find($id);
        $postcategory->delete();

        $notification = array(
            'message' => 'Servizio eliminato con successo!',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    private function validateRequest()
    {
        return  request()->validate([
            'titolo' => 'required|min:2',
            'pubblicato'=>'nullable',

        ]);
    }

}
