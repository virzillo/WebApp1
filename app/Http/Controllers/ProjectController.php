<?php

namespace App\Http\Controllers;

use App\Project;
use App\Service;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $page_title = 'Impianti';
        $page_description = 'Some description for the page';
        $projects=Project::all();
        return view('pages.projects.index',compact('projects','page_title','page_description'));
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
        $categories = Category::with('children')->whereNull('parent_id')->where('pubblicato','on')->get();
        $services=Service::where('pubblicato','on')->get();
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
            'immagine' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required|min:3',
            'meta_titolo'=>'min:2|string',
            'meta_descrizione'=>'min:2|string',
            'keywords'=>'min:2|string',

            'category_id' => 'sometimes|nullable|numeric',
            'servizio' => 'sometimes|nullable|numeric',

            'pubblicato' => 'nullable',
            'evidenza' => 'nullable',

        ]);
            dump($validator);
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

            $project= new Project;
            $project->titolo=$request['titolo'];
            $project->descrizione=$request['descrizione'];
            $project->testo=$request['testo'];
            $project->slug=$request['slug'];

            $imageName = time().'.'.$request->immagine->extension();
            $request->immagine->move(public_path('images'), $imageName);
            $project->immagine = $imageName ;

            $project->category_id=$request['sottocategoria'];

            $project->meta_titolo=$request['meta_titolo'];
            $project->meta_descrizione=$request['meta_descrizione'];
            $project->meta_keywords=$request['meta_keywords'];
            $project->pubblicato=$request['pubblicato'];
            $project->evidenza=$request['evidenza'];
            $project->user_id=Auth::user()->id;



            if ($project->save()){
            $project->service()->sync($request['servizi']);
            }

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
        $page_title = 'Impianti';
        $page_description = 'Some description for the page';
        $project=Project::find($project->id);
        $categories = Category::with('children')->whereNull('parent_id')->where('pubblicato','on')->get();
        $services=Service::where('pubblicato','on')->get();
        return view('pages.projects.show',compact('project','categories','services','page_title','page_description'));
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
        $project = Project::find($project->id);
        $image_path = public_path('images').'/'.$project->immagine;
        unlink($image_path);
        $project->delete();

        $notification = array(
            'message' => 'Record eliminato con successo!',
            'alert-type' => 'success'
        );

        return back()->with($notification);
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
