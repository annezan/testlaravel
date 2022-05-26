@extends('welcomeadmin')
@section('contenu')
<div>
            

                    <table style="border: 1px solid; border-color: black;">
                      <thead>
                        <tr style="width: 500px; height: 50px;">
                          <th style="width: 300px; height: 50px;background-color: orange;">Avatar</th>
                          <th style="width: 300px; height: 50px;background-color: orange;">Nom</th>
                          <th style="width: 300px; height: 50px;background-color: orange;">Prénom(s)</th>
                          <th style="width: 200px; height: 50px;background-color: orange;">Téléphone</th>
                          <th style="width: 300px; height: 50px;background-color: orange;">Email</th>
                          <th style="width: 300px; height: 50px;background-color: orange;">Adresse</th>
                          <th style="width: 300px; height: 50px;background-color: orange;">Date de naissance</th>
                          <th style="width: 100px; height: 50px;background-color: orange;"> Age</th>
                          <th style="width: 300px; height: 50px;background-color: orange;">Ville</th>
                          <th style="width: 100px; height: 50px;background-color: orange;">Genre</th>
                        </tr>
                      </thead>
                      
                        <tbody>
                        @foreach($use as $user)
                        
                          <tr style="width: 500px; height: 50px; border-bottom: 1px solid; ">
                          <td style=" height: 50px; " align="center"><img src="/storage/app/{{$user->url_avatar}}"></td>
                          <td style=" height: 50px; " align="center">{{$user->nom}}</td>
                          <td style=" height: 50px;" align="center">{{$user->prenom}}</td>
                          <td style=" height: 50px;" align="center">{{$user->telephone}}</td>
                          <td style=" height: 50px;" align="center">{{$user->email}}</td>
                           <td style=" height: 50px;" align="center">{{$user->adresse}}</td>
                            <td style=" height: 50px;" align="center">{{$user->date_naissance}}</td>
                            <td style=" height: 50px;" align="center">{{ $madate - intval($user->date_naissance)}}</td>
                             <td style=" height: 50px;" align="center">{{$user->ville}}</td>
                          <td style=" height: 50px;" align="center">{{$user->genre}}</td>
                         <td align="center" style="width: 50px; height: 50px;"><a href="{{ route('edituser',['id'=>$user->id]) }}"><i class="fa fa-pencil-square-o"></i></a></td>
                         <td align="center" style="width: 50px; height: 50px;"><a href="{{ route('deleteuser',['id'=>$user->id]) }}"><i class="fa fa-trash"></i></a></td>
                         
                        </tr>
                        @endforeach
                        </tbody>
                      
                    </table>

@endsection