@extends('layouts.app')

@section('content')

<div class="h-full flex justify-center content-center items-center flex-col w-full mt-36">

<h2 class="h2">Se connecter</h1>
<form method="POST" action="{{ route('login') }}" class="form mt-16 anim-opacite">
    @csrf
    {{-- <div class="mb-4">
        <label for="email" class="label">Email</label>
        <input id="email" type="email" name="email" class="input" value="{{ old('email') }}" autocomplete="email" placeholder="Votre email" autofocus>
        @error('email')
            <span class="text-red-400 text-sm">
                <span>{{ $message }}</span>
            </span>
        @enderror
    </div> --}}
    <div class="mb-4">
        <label for="name" class="label">Nom</label>
        <input id="name" type="text" name="name" class="input" value="{{ old('name') }}" autocomplete="name" placeholder="Votre nom" autofocus>
        @error('name')
            <span class="text-red-400 text-sm">
                <span>{{ $message }}</span>
            </span>
        @enderror
    </div>
    <div class="mb-4">
        <label for="password" class="label">Mot de passe</label>
        <input id="password" type="password" name="password" class="input" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
       @error('password')
            <span class="text-red-400 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn2 w-full">Se connecter</button>
</form>
</div>

@endsection