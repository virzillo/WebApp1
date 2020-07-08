<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
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
        $posts=Post::all();
        $page_title = 'Articoli';
        $page_description = '';
        return view('pages.posts.index',compact('posts','page_title','page_description'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postcategories=PostCategory::all();
        $page_title = 'Crea Articolo';
        $page_description = '';
        return view('pages.posts.create',compact('postcategories','page_title','page_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titolo' => 'required|min:3|max:255|string',
            'descrizione' => 'required|min:3',
            'testo' => 'required|min:3',
            'immagine' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required|min:3',
            'meta_titolo'=>'min:2|string',
            'meta_descrizione'=>'min:2|string',
            'meta_keywords'=>'min:2|string',

            'category_id' => 'sometimes|nullable|numeric',

            'pubblicato' => 'nullable',
            'evidenza' => 'nullable',


        ]);

        if ($validator->fails()) {

            $notification = array(
                'message' => $validator->errors(),
                'alert-type' => 'error'
            );

            return back()
                        ->with($notification)
                        ->withErrors($validator)
                        ->withInput();
        }

            $post=new Post();
            $post->titolo=$request['titolo'];
            $post->descrizione=$request['descrizione'];
            $post->testo=$request['testo'];
            $post->slug=$request['slug'];

            // $imageName = time().'.'.$request->immagine->extension();
            // $request->immagine->move(public_path('images'), $imageName);
            // $post->immagine = $imageName ;
            $post->immagine  = $request->file('immagine')->store('image/post');
            $post->category_id=$request['category_id'];

            $post->meta_titolo=$request['meta_titolo'];
            $post->meta_descrizione=$request['meta_descrizione'];
            $post->meta_keywords=$request['meta_keywords'];
            $post->pubblicato=$request['pubblicato'];
            $post->evidenza=$request['evidenza'];

            $post->user_id=Auth::user()->id;

            $post->save();

            $notification = array(
                'message' => 'Articolo inserito con successo!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $page_title = 'Articolo';
        $page_description = 'Some description for the page';
        $post=Post::find($post->id);
        $postcategories = PostCategory::all();
        return view('pages.posts.show',compact('post','postcategories','page_title','page_description'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(), [
            'titolo' => 'required|min:3|max:255|string',
            'descrizione' => 'required|min:3',
            'testo' => 'required|min:3',
            'immagine' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required|min:3',
            'meta_titolo'=>'min:2|string',
            'meta_descrizione'=>'min:2|string',
            'meta_keywords'=>'min:2|string',

            'category_id' => 'sometimes|nullable|numeric',

            'pubblicato' => 'nullable',
            'evidenza' => 'nullable',


        ]);

        if ($validator->fails()) {

            $notification = array(
                'message' => $validator->errors(),
                'alert-type' => 'error'
            );

            return back()
                        ->with($notification)
                        ->withErrors($validator)
                        ->withInput();
        }

        $post = Post::find($post->id);

            $post->titolo=$request->get('titolo');
            $post->descrizione=$request->get('descrizione');
            $post->testo=$request->get('testo');
            $post->slug=$request->get('slug');

            if($request->hasFile('immagine')){
                // $imageName = time().'.'.$request->immagine->extension();
                // $request->immagine->move(public_path('images'), $imageName);
                // $project->immagine = $imageName ;
                $post->immagine  = $request->file('immagine')->store('image/post');
            }




            $post->category_id=$request->get('sottocategoria');

            $post->meta_titolo=$request->get('meta_titolo');
            $post->meta_descrizione=$request->get('meta_descrizione');
            $post->meta_keywords=$request->get('meta_keywords');

            $post->pubblicato=$request->get('pubblicato');
            $post->evidenza=$request->get('evidenza');


            $post->user_id=Auth::user()->id;


            $post->save();

            $notification = array(
                'message' => 'Articolo modificato con successo!',
                'alert-type' => 'success'
            );
            return redirect(action('ProjectController@index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post = Post::find($post->id);
        Storage::delete($post->immagine);
        $post->service()->detach();
        $post->delete();


        $notification = array(
            'message' => 'Record eliminato con successo!',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    if($post->showPost()){// this will test if the user viwed the post or not
        return $post;
    }

    $post->increment('views');//I have a separate column for views in the post table. This will increment the views column in the posts table.
    PostView::createViewLog($post);
}
