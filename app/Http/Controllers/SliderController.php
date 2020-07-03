<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
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
        $page_title = 'Elenco Slider';
        $sliders=Slider::all();
        return view('pages.sliders.index',compact('sliders','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Crea Slider';
        $page_description = '';
        return view('pages.sliders.create',compact('page_title','page_description'));
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
            'titolo' => 'required|min:2|string',
            'sottotitolo' => 'string|min:2',
            'pubblicato'=>'nullable',
            'immagine' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

        $slider= new Slider;
        $slider->titolo=$request['titolo'];
        $slider->sottotitolo=$request['descrizione'];
        $slider->pubblicato=$request['pubblicato'];

        $slider->immagine  = $request->file('immagine')->store('image/slider');

        $slider->save();

        $notification = array(
            'message' => 'Slider inserito con successo!',
            'alert-type' => 'success'
        );
        return redirect(action('SliderController@index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        $page_title = 'Modifica slider';
        $page_description = '';
        $slider=Slider::find($slider->id);
        return view('pages.sliders.show',compact('slider','page_title','page_description'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $validator = Validator::make($request->all(), [
            'titolo' => 'required|min:2|string',
            'sottotitolo' => 'string|min:2',
            'pubblicato'=>'nullable',
            'immagine' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

        $slider = Slider::find($slider->id);
        $slider->titolo = $request->get('titolo');
        $slider->sottotitolo = $request->get('sottotitolo');
        if($request->hasFile('immagine')){
            $slider->immagine  = $request->file('immagine')->store('image/slider');
        }

        $slider->pubblicato = $request->get('pubblicato');

        $slider->save();

        $notification = array(
            'message' => 'Slider modificato con successo!',
            'alert-type' => 'success'
        );
        return redirect(action('SliderController@index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider = Slider::find($slider->id);
        Storage::delete($slider->immagine);
        $slider->delete();


        $notification = array(
            'message' => 'Slider eliminato con successo!',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }



}
