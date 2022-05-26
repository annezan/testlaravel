@extends('welcome')
@section('content')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus />
            </div>
            <!--Prenom -->
            <div>
                <x-label for="name" :value="__('Prénom(s)')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus />
            </div>
              <!--date de naissance -->
            <div>
                <x-label for="name" :value="__('Date de naissance')" />

                <x-input id="name" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autofocus />
            </div>
             <!--telephone -->
            <div>
                <x-label for="name" :value="__('Téléphone')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus />
            </div>
              
                <!--ville -->
            <div>
                <x-label for="name" :value="__('Ville')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" required autofocus />
            </div>
            <!--adresse -->
            <div>
                <x-label for="name" :value="__('Adresse')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus />
            </div>
             <!--code postal -->
            <div>
                <x-label for="name" :value="__('code postal')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="code" :value="old('code')" required autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
             <!--genre -->
            <div>
                <x-label for="name" :value="__('Genre')" />

                <select class="form-control" name="genre">
                    <option>Choisir une option</option>
                    <option value="0">Homme</option>
                    <option value="1">Femme</option>
                    
                    
                </select>
            </div>
            <div> 
                <x-label for="name" :value="__('Avatar')" />
                <input type="file" name="avatar" :value="__('avatar')">
            </div>
            
            <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection
