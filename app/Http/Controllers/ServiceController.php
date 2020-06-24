<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $page_title = 'Elenco Servizi';
        $page_description = 'Some description for the page';
        $services=Service::all();
        return view('pages.services.index',compact('services','page_title','page_description'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Crea Servizio';
        $page_description = 'Some description for the page';
        return view('pages.services.create',compact('page_title','page_description'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Service::create($this->validateRequest());
        $notification = array(
            'message' => 'Servizio inserito con successo!',
            'alert-type' => 'success'
        );
        // return back()->with($notification);
        return redirect(action('ServiceController@index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $page_title = 'Modifica Servizio';
        $page_description = 'Some description for the page';
        $service=Service::find($service->id);
        return view('pages.services.edit',compact('service','page_title','page_description'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->validateRequest();

        $service = Service::find($service->id);
        $service->titolo = $request->get('titolo');
        $service->icona = $request->get('icona');
        $service->descrizione = $request->get('descrizione');

        $service->pubblicato = $request->get('pubblicato');

        $service->save();

        $notification = array(
            'message' => 'Servizio modificato con successo!',
            'alert-type' => 'success'
        );
        return redirect(action('ServiceController@index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service = Service::find($service->id);
        $service->delete();

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
            'descrizione' => 'required|min:2',
            'icona' => 'required|min:2',


        ]);
    }


}
