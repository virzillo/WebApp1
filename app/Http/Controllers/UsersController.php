<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RedirectsUsers;

class UsersController extends Controller
{

    use RedirectsUsers;

    protected $redirectTo = 'admin/utenti';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->store($request->all())));

        // // $this->guard()->login($user);

        // if ($response = $this->registered($request, $user)) {
        //     return $response;
        // }

        $notification = array(
            'message' => 'Utente creato con successo!',
            'alert-type' => 'success'
        );

        return redirect(action('UsersController@index'))->with($notification);

        // return $request->wantsJson()
        // ? new Response('', 201)
        // : redirect($this->redirectPath())->with('success','Utente crearo con successo');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function store(array $data)
    {
        $page_title = 'Utenti';
        $page_description = 'Some description for the page';
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        //assegnazione ruolo in fase iscrizione
        $user->assignRole($data['role']);
        return $user;
    }

    public function index()
    {
        $page_title = 'Utenti';
        $page_description = 'Some description for the page';
        $users = User::all();
        return view('pages.users.index', compact('page_title', 'page_description', 'users'));
    }

    public function create()
    {
        $page_title = 'Crea Utente';
        $page_description = 'Some description for the page';
        $roles = Role::all();
        return view('pages.users.create', compact('page_title', 'page_description', 'roles'));
    }

    public function show($id)
    {

        $page_title = 'Visualizza Utente';
        $page_description = 'Some description for the page';
        $user = User::where('id', $id)->first();
        return view('pages.users.show', compact('page_title', 'page_description', 'user'));
    }

    public function edit($id)
    {
        $page_title = 'Modifica Utente';
        $page_description = 'Some description for the page';
        $user = User::find($id);
        return view('pages.users.edit', compact('page_title', 'page_description', 'user'));
    }

    public function update(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|string',
            'email' => 'required|string',
            'password'=>'confirmed'
        ]);

            $notifications=$validator->errors();
        if ($validator->fails()) {
            dd($validator);
            return back()
                        ->withErrors($validator)

                        ->withInput()->with($notifications);
        }

        $user = User::find($request->id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if ($request->get('password')){
            $user->password = Hash::make($request->get('password'));
        }

        $user->save();

        $notification = array(
            'message' => 'Servizio modificato con successo!',
            'alert-type' => 'success'
        );
        return redirect(action('ServiceController@index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)


    {
        User::find($id)->delete();
        //elimina utente e immagine associata ad esso
        // Storage::delete('public/user_image/'.$user->user_image);

        $notification = array(
            'message' => 'Utente eliminato con successo!',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }



}
