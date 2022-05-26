<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Uuid;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //dd($request->url_avatar);
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'avatar'=>['required','image']
        ]);
        $statut=1;
        $path=request('avatar')->store('avatars');
        $user = User::create([
            'id'=>uuid::generate()->string,
            'genre'=>$request->genre,
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
            'date_naissance'=>$request->date,
            'adresse'=>$request->adresse,
            'code_postal'=>$request->code,
            'ville'=>$request->ville, 
            'telephone'=>$request->telephone,
            'statut'=>$statut,
            'url_avatar'=>$path,
            'date_update' => now(),
        ]);

        event(new Registered($user));

        Auth::login($user);

         return redirect('/accueil');
    }
}
