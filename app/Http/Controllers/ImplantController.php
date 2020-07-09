<?php

namespace App\Http\Controllers;

use App\Implant;
use App\Project;
use App\Service;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ImplantController extends Controller
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
        $page_description = ' | Some description for the page';
        $implants=Implant::all();
        // $numcat=count(Implant::ofType('pubblicato')->get());
        // dd($numcat);
        return view('backend.implants.index',compact('implants','page_title','page_description'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Impianti';
        $page_description = ' | Some description for the page';
        $categories = Category::with('children')->whereNull('parent_id')->where('pubblicato','on')->get();
        $services=Service::where('pubblicato','on')->get();
        return view('backend.implants.create',compact('categories','services','page_title','page_description'));
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

            $implant= new Implant;
            $implant->titolo=$request['titolo'];
            $implant->descrizione=$request['descrizione'];
            $implant->testo=$request['testo'];
            $implant->slug=$request['slug'];

            // $imageName = time().'.'.$request->immagine->extension();
            // $request->immagine->move(public_path('images'), $imageName);
            // $project->immagine = $imageName ;
            $implant->immagine  = $request->file('immagine')->store('image/impianti');

            $implant->category_id=$request['sottocategoria'];

            $implant->codice=$request['codice'];

            $implant->indirizzo=$request['indirizzo'];
            $implant->comune=$request['comune'];
            $implant->provincia=$request['provincia'];
            $implant->prezzo=$request['prezzo'];
            $implant->sconto=$request['sconto'];
            $implant->dimensione=$request['dimensione'];
            $implant->condizioni_pagamento=$request['condizioni_pagamento'];
            $implant->condizioni_generali=$request['condizioni_generali'];


            $implant->meta_titolo=$request['meta_titolo'];
            $implant->meta_descrizione=$request['meta_descrizione'];
            $implant->meta_keywords=$request['meta_keywords'];
            $implant->pubblicato=$request['pubblicato'];
            $implant->evidenza=$request['evidenza'];
            $implant->illuminato=$request['illuminato'];

            $implant->user_id=Auth::user()->id;



            if ($implant->save()){
            $implant->service()->sync($request['servizi']);
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
     * @param  \App\Implant  $implant
     * @return \Illuminate\Http\Response
     */
    public function show(Implant $implant)
    {
        $page_title = 'Impianti';
        $page_description = ' | Some description for the page';
        $implant=Implant::find($implant->id);
        $categories = Category::with('children')->whereNull('parent_id')->where('pubblicato','on')->get();
        $services=Service::where('pubblicato','on')->get();
        return view('backend.implants.show',compact('implant','categories','services','page_title','page_description'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Implant  $implant
     * @return \Illuminate\Http\Response
     */
    public function edit(Implant $implant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Implant  $implant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Implant $implant)
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

        $implant = Implant::find($implant->id);

            $implant->titolo=$request->get('titolo');
            $implant->descrizione=$request->get('descrizione');
            $implant->testo=$request->get('testo');
            $implant->slug=$request->get('slug');

            if($request->hasFile('immagine')){
                $implant->immagine  = $request->file('immagine')->store('image/impianti');
            }




            $implant->category_id=$request->get('sottocategoria');

            $implant->meta_titolo=$request->get('meta_titolo');
            $implant->meta_descrizione=$request->get('meta_descrizione');
            $implant->meta_keywords=$request->get('meta_keywords');

            $implant->codice=$request->get('codice');

            $implant->indirizzo=$request->get('indirizzo');
            $implant->comune=$request->get('comune');
            $implant->provincia=$request->get('provincia');
            $implant->prezzo=$request->get('prezzo');
            $implant->sconto=$request->get('sconto');
            $implant->dimensione=$request->get('dimensione');
            $implant->condizioni_pagamento=$request->get('condizioni_pagamento');
            $implant->condizioni_generali=$request->get('condizioni_generali');


            $implant->pubblicato=$request->get('pubblicato');
            $implant->evidenza=$request->get('evidenza');
            $implant->illuminato=$request->get('illuminato');

            $implant->user_id=Auth::user()->id;
            $implant->service()->sync($request->get('servizi'));

            $implant->save();

            $notification = array(
                'message' => 'Impianto modificato con successo!',
                'alert-type' => 'success'
            );
            return redirect(action('ImplantController@index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Implant  $implant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Implant $implant)
    {
        $implant = Implant::find($implant->id);
        Storage::delete($implant->immagine);
        $implant->service()->detach();
        $implant->delete();


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

            $data=Category::where('parent_id', $id )->get();
            return response()->json($data);
        }
    }

    public function province()
    {
        if(request()->ajax())
        {

        //  $data = DB::table('cities')->select('provincia')->groupByRaw('provincia')->get();
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


}
