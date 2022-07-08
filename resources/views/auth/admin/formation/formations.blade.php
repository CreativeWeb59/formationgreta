<h1>Liste des formations</h1>

@if ($formations->count())
{{-- boucle seule pour les produits --}}
    
    @foreach($formations as $formation)
    <div class="flex mt-4 ">
        <div class="w-96">{{ $formation->id }}</div>
        <div class="w-96">{{ date_format($formation->created_at,"d/m/Y")}}</div>
        <div class="w-20  pr-2 text-right">{{ $formation->title }}</div>
        <div class="w-20  pr-2 text-right">{{ $formation->subtitle }}</div>
    </div>
        @endforeach
@else
    Désolé il n'y a aucune formation
@endif