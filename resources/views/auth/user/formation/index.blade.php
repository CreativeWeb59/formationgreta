@extends('layouts.app')

@section('content')
    <h2 class="h2">Liste des formations</h2>

<!-- Verification de la disponibilite de la formation suivant l'utilisateur
    A faire dans la boucle des formations
    role == 2 => Admin = on voit tout
    role == 1 => acces à rien
    role == 

-->

@if ($formations->count())
    {{-- boucle seule pour les formations --}}
    <!-- En tete du tableau -->
    
    <div class="flex text-center justify-center content-center items-center w-full mt-16">
        <!-- <div class="w-20 tab-entete h-10">id</div> -->
        <div class="w-96 pr-2 tab-entete">Nom de la formation</div>
        <div class="w-96 pr-2 tab-entete">Description</div>
        <div class="w-36 tab-entete">
        Détail</div>
    </div>
    @foreach($formations as $formation)
    <a href="{{ route ('FormationController.show',$formation->id)}}">
    <div class="flex text-center justify-center content-center items-center">
        <div class="tab-tout-liste w-min h-full flex text-center justify-center content-center items-center">
            <!-- <div class="w-20 tab-liste">{{ $formation->id }}</div> -->
            <div class="w-96 pr-2 tab-liste">{{ $formation->title }}</div>
            <div class="w-96 pr-2 tab-liste">{{ $formation->subtitle }}</div>
            <div class="w-36 text-red-600 tab-liste flex justify-center content-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg></div>
        </div>
    </div>
    </a>
        @endforeach
@else
    Désolé il n'y a aucune formation
@endif

@endsection