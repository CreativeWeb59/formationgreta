@extends('layouts.app')

@section('content')
    <h2 class="h2 text-center">Tutoriels disponibles</h2>
    <h3 class="text-center text-2xl my-8">{{$titleFormation->title}}</h3>
@if ($details->count())
    {{-- boucle seule pour les formations --}}
        <!-- En tete du tableau -->
        <div class="flex text-center justify-center content-center items-center w-full anim-opacite">
        <div class="w-96 pr-2 tab-entete">Nom du document</div>
        <div class="w-96 pr-2 tab-entete">Description</div>
        <div class="w-36 text-red-600 tab-entete">Pdf</div>
    </div>
    @foreach($details as $detail)
    <a href="{{ asset('asset/'.$detail->link)}}" title="document pdf" class="w-auto" target="_blank">
    <div class="text-center flex justify-center content-center items-center anim-opacite">
        <div class="tab-tout-liste w-min h-full flex text-center justify-center content-center items-center">
        <div class="w-96  pr-2 border-2 tab-liste">{{ $detail->title }}</div>
        <div class="w-96  pr-2 border-2 tab-liste">{{ $detail->subtitle }}</div>
        <!-- <div class="w-96 border-2 tab-liste">{{ date_format($detail->created_at,"d/m/Y")}}</div> -->
        <div class="w-36 border-2 tab-liste flex text-white justify-center content-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            &nbsp; | &nbsp;
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
        </div>
    </div>
    
    </div>
    </a>
    @endforeach

@else
    Désolé il n'y a aucun tutoriel
@endif

    <!-- Affiche uniquement si admin -->
    @if (auth()->user()->role_id==2)
    <div class="flex text-center justify-center content-center items-center w-full anim-opacite">
        <div class="w-32 mt-16 text-center btn2">
            <a href="{{ route('home') }}" title="Retour">Retour</a>
        </div>
    </div>
    @endif

@endsection