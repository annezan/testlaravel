@extends('welcomeadmin')
@section('contenu')
<div class="py-12">
         @csrf
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" >
                    <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            
                <h1>Modifiez les informations</h1>
            
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('updateuser',['id'=>$users->id])}}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="nom" value="{{$users->nom}}" required autofocus />
            </div>
            <!--Prenom -->
            <div>
                <x-label for="name" :value="__('Prénom(s)')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="prenom" value="{{$users->prenom}}" required autofocus />
            </div>
              <!--date de naissance -->
            <div>
                <x-label for="name" :value="__('Date de naissance')" />

                <x-input id="name" class="block mt-1 w-full" type="date" name="date" value="{{$users->date_naissance}}" required autofocus />
            </div>
             <!--telephone -->
            <div>
                <x-label for="name" :value="__('Téléphone')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="telephone" value="{{$users->telephone}}" required autofocus />
            </div>
              
                <!--ville -->
            <div>
                <x-label for="name" :value="__('Ville')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="ville" value="{{$users->ville}}" required autofocus />
            </div>
            <!--adresse -->
            <div>
                <x-label for="name" :value="__('Adresse')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="adresse" value="{{$users->adresse}}" required autofocus />
            </div>
             <!--code postal -->
            <div>
                <x-label for="name" :value="__('code postal')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="code" value="{{$users->code_postal}}" required autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$users->email}}" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

           
             <!--genre -->
            <div>
                <x-label for="name" :value="__('Genre')" />
                
                <select class="form-control" name="genre">
                    @if($users->genre == 0)
                    <option value="{{$users->genre}}">Homme</option>
                    <option value="0">Homme</option>
                    <option value="1">Femme</option>
                    @else
                    <option value="{{$users->genre}}">Femme</option>
                    <option value="0">Homme</option>
                    <option value="1">Femme</option>
                </select>
                @endif
            </div>
            <div> 
                <x-label for="name" :value="__('Avatar')" />
                <input type="file" name="avatar" value="{{$users->avatar}">
            </div>
            
            <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
                </div>
            </div>
        </div>
    </div>

@endsection