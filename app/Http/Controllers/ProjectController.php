<?php

namespace App\Http\Controllers;

use App\Project;
use App\Service;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Impianti';
        $page_description = 'Some description for the page';
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $services=Service::all();
        return view('pages.projects.create',compact('categories','services','page_title','page_description'));

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
            'immagine' => 'required|image',
            'slug' => 'required|min:3',
            'meta_titolo'=>'min:2|string',
            'meta_descrizione'=>'min:2|string',
            'keywords'=>'min:2|string',

            'category_id' => 'sometimes|nullable|numeric',
            'service_id' => 'sometimes|nullable|numeric',
            'user_id' => 'sometimes|nullable|numeric',
        ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Ci sono degli errori!',
                'alert-type' => 'danger'
            );

            return back()
                        ->with($notification)
                        ->withErrors($validator)
                        ->withInput();
        }
            if($request['pubblicato']=='on'){$pubblicato='si';}

            $project= Project::create([
                'titolo' => $request['titolo'],
                'descrizione'=> $request['descrizione'],
                'testo'=> $request['testo'],
                'slug'=> $request['slug'],


                'category_id'=> $request['parent_id'],

                'meta_titolo'=> $request['meta_titolo'],
                'meta_descrizione'=> $request['meta_descrizione'],
                'keywords'=> $request['keywords'],

            ]);
            $notification = array(
                'message' => 'Corso inserito con successo!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
       return view('pages.projects.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    public function query($id)
    {
        if(request()->ajax())
        {

            // $data=$id;
            $data=Category::where('parent_id', $id )->get();
            return response()->json($data);
        }
    }

    private function validateRequest()
    {

        return  request()->validate([
            'titolo' => 'required|min:3|max:255|string',
            'descrizione' => 'required|min:3',
            'testo' => 'required|min:3',
            'immagine' => 'required|image',
            'slug' => 'required|min:3',

            'category_id' => 'sometimes|nullable|numeric',
            'service_id' => 'sometimes|nullable|numeric',
            'user_id' => 'sometimes|nullable|numeric',

        ]);
    }
}
