<div class="w-full h-full text-white">
      <div class="w-full h-full text-center flex justify-center items-center content-center">
        @guest
          <div class="w-1/4"></div>
          <h1 class="text-5xl w-1/2">
            <a href="{{ route('/') }}" title="Retour">Formation Greta</a>
          </h1>
          {{-- Affichage du login/connexion --}}
          @include('partials.navlog')
        @else
        @if (auth()->user()->role_id==2)
          <div class="w-1/4">
            <a class="text-white" href="/dashboard">Administration</a>
          </div>
          <h1 class="text-5xl w-1/2">
            <a href="{{ route('/') }}" title="Retour">Formation Greta</a>
          </h1>
          {{-- Affichage du login/connexion --}}
              @include('partials.navlog')
        @else
          @include('partials.navlog')
        @endif
        @endguest
      </div>
</div>
    
  