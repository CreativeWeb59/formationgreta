@extends('layouts.app')

@section('content')
  <div class="w-full h-5/6 flex flex-col justify-center content-center items-center">
    <div class="text-center w-48 my-24">
            <a href="{{ route ('login')}}">
                <img src="{{asset('images/bouton_audio.png')}}" class="link1 w-36 h-auto  mx-auto" alt="Se connecter" title="Se connecter">
                <div class="btn2 w-full">Se connecter</div>
            </a>
    </div>
    <h2 class="h2 anim-opacite">Connectez vous pour accéder à <br>la documentation de votre formation</h2>
    <div class="w-1/3 h-48 mt-24 flex justify-between content-center items-center">
        <img src="{{asset('images/logo.ca537468.png')}}" class="w-1/3 h-auto transition ease-in-out duration-500 -skew-y-12 hover:skew-y-0" alt="Se connecter" title="logo creative-web.fr">
        <img src="{{asset('images/Logo-GRETA.png')}}" class="w-1/3 h-auto transition ease-in-out duration-500 skew-y-12 hover:skew-y-0" alt="Se connecter" title="logo greta">
    </div>
  </div>
@endsection


