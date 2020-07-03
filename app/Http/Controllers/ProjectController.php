<?php

namespace App\Http\Controllers;

use App\City;
use App\Project;
use App\Service;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
            'meta_keywords'=>'min:2|string',

            'provincia'=>'min:2|string',
            'comune'=>'min:2|string',
            'indirizzo'=>'min:2|string',
            'prezzo'=>'min:1|numeric',
            'sconto'=>'min:1|numeric',
            'dimensione'=>'min:1|string',
            'codice'=>'min:1|string',

            'condizione_pagamento'=>'min:1|nullable|string',
            'condizione_generali'=>'min:1|nullable|string',

            'category_id' => 'sometimes|nullable|numeric',
            'servizio' => 'sometimes|nullable|numeric',

            'pubblicato' => 'nullable',
            'evidenza' => 'nullable',
            'illuminato' => 'nullable',


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

            $project= new Project;
            $project->titolo=$request['titolo'];
            $project->descrizione=$request['descrizione'];
            $project->testo=$request['testo'];
            $project->slug=$request['slug'];

            // $imageName = time().'.'.$request->immagine->extension();
            // $request->immagine->move(public_path('images'), $imageName);
            // $project->immagine = $imageName ;
            $project->immagine  = $request->file('immagine')->store('image/impianti');

            $project->category_id=$request['sottocategoria'];

            $project->codice=$request['codice'];

            $project->indirizzo=$request['indirizzo'];
            $project->comune=$request['comune'];
            $project->provincia=$request['provincia'];
            $project->prezzo=$request['prezzo'];
            $project->sconto=$request['sconto'];
            $project->dimensione=$request['dimensione'];
            $project->condizioni_pagamento=$request['condizioni_pagamento'];
            $project->condizioni_generali=$request['condizioni_generali'];


            $project->meta_titolo=$request['meta_titolo'];
            $project->meta_descrizione=$request['meta_descrizione'];
            $project->meta_keywords=$request['meta_keywords'];
            $project->pubblicato=$request['pubblicato'];
            $project->evidenza=$request['evidenza'];
            $project->illuminato=$request['illuminato'];

            $project->user_id=Auth::user()->id;



            if ($project->save()){
            $project->service()->sync($request['servizi']);
            }

            $notification = array(
                'message' => 'Impianto inserito con successo!',
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
        $validator = Validator::make($request->all(), [
            'titolo' => 'required|min:3|max:255|string',
            'descrizione' => 'required|min:3',
            'testo' => 'required|min:3',
            'immagine' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required|min:3',
            'meta_titolo'=>'min:2|string',
            'meta_descrizione'=>'min:2|string',
            'meta_keywords'=>'min:2|string',

            'codice'=>'min:1|string',
            'provincia'=>'min:2|string',
            'comune'=>'min:2|string',
            'indirizzo'=>'min:2|string',
            'prezzo'=>'min:1|numeric',
            'sconto'=>'min:1|numeric',
            'dimensione'=>'min:1|string',

            'condizione_pagamento'=>'min:1|nullable|string',
            'condizione_generali'=>'min:1|nullable|string',

            'category_id' => 'sometimes|nullable|numeric',
            'servizio' => 'sometimes|nullable|numeric',

            'pubblicato' => 'nullable',
            'evidenza' => 'nullable',
            'illuminato' => 'nullable',

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

        $project = Project::find($project->id);

            $project->titolo=$request->get('titolo');
            $project->descrizione=$request->get('descrizione');
            $project->testo=$request->get('testo');
            $project->slug=$request->get('slug');

            if($request->hasFile('immagine')){
                // $imageName = time().'.'.$request->immagine->extension();
                // $request->immagine->move(public_path('images'), $imageName);
                // $project->immagine = $imageName ;
                $project->immagine  = $request->file('immagine')->store('image/impianti');
            }




            $project->category_id=$request->get('sottocategoria');

            $project->meta_titolo=$request->get('meta_titolo');
            $project->meta_descrizione=$request->get('meta_descrizione');
            $project->meta_keywords=$request->get('meta_keywords');

            $project->codice=$request->get('codice');

            $project->indirizzo=$request->get('indirizzo');
            $project->comune=$request->get('comune');
            $project->provincia=$request->get('provincia');
            $project->prezzo=$request->get('prezzo');
            $project->sconto=$request->get('sconto');
            $project->dimensione=$request->get('dimensione');
            $project->condizioni_pagamento=$request->get('condizioni_pagamento');
            $project->condizioni_generali=$request->get('condizioni_generali');


            $project->pubblicato=$request->get('pubblicato');
            $project->evidenza=$request->get('evidenza');
            $project->illuminato=$request->get('illuminato');

            $project->user_id=Auth::user()->id;
            $project->service()->sync($request->get('servizi'));

            $project->save();

            $notification = array(
                'message' => 'Impianto modificato con successo!',
                'alert-type' => 'success'
            );
            return redirect(action('ProjectController@index'))->with($notification);
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
        Storage::delete($project->immagine);
        $project->service()->detach();
            $project->delete();



        // $image_path = public_path('images').'/'.$project->immagine;

        // unlink($image_path);
        // $project->service()->detach();
        // $project->delete();

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

    public function province()
    {
        if(request()->ajax())
        {



        //    $data = DB::table('cities')->select('provincia')->groupByRaw('provincia')->get();
            $data=DB::table('provinces')->select('provincia')->get();


            return response()->json($data);
        }
    }
    public function comuni($val)
    {
        if(request()->ajax())
        {


            $data = DB::table('provinces')->select('sigla')->where('provincia',$val)->get();
            $sigla=$data[0]->sigla;
            $data = DB::table('cities')->select('comune')->where('provincia',$sigla)->get();

            // $data = DB::table('cities')->orderBy('provincia','asc')->groupBy('provincia')->get();

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
