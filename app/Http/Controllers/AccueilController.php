<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AccueilController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        
            $users=User::find($id);

        return view('accueil',[
            'users'=>$users,
        ]);
    }
}
