<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SuperController extends Controller
{
    public function show()
    {
        
         $use=User::all();

        $date=date('Y.m.d');
        return view('superuser' , [
            'use'=>$use,
            'madate'=>intval($date),
        ]);
        
    }
     public function update(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'avatar'=>['required','image']
        ]);
         $user=User::find($request->id);

         $statut=1;
          $path=request('avatar')->store('avatars');
         $user->update([

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
         
         $date=date('Y.m.d');
       $use=User::all();
       return view('superuser' , [
             'use'=>$use,
            'madate'=>intval($date),
        ]);
        
    }
     public function edit(Request $request)
    {
        
         $utilisateur=User::find( $request->id);
        return view('update' , [
            'users'=>$utilisateur,
        ]);
        
    }
     public function delete(Request $request)
    {
        $use=User::find($request->id);
        $use->delete();
        if(Auth::check()){
         return redirect('/accueil');
        }
        else { 
            return redirect('/');
        }
    }
}
