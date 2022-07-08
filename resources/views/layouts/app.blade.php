<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        {{-- icones --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500&display=swap" rel="stylesheet"> 
        <script src="https://kit.fontawesome.com/097058085d.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet"> 

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
        

        {{-- Police --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Roboto+Serif:wght@500&display=swap" rel="stylesheet">

        {{-- icones fin--}}
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        {{-- <style>
            [x-cloak] {display:none;}
        </style> --}}
        <title>Formation Greta</title>
    </head>
    <body>
        <div class="flex flex-col h-full min-h-screen w-full">
            <header class="w-full h-24 flex justify-center content-center items-center flex-col border-b border-black">
                @include('partials.navbar')
            </header>
            <section class="p-8 h-auto min-h-[calc(100vh_-_12rem)] bg-[url('/images/books2.jpg')] bg-cover">
                {{-- Contenu des pages --}}
                        @yield('content')
            </section>
            <footer class="w-full flex-wrap text-white flex justify-evenly content-center items-center h-24">
                @include('partials.footer')                            
            </footer>
        </div>
    </body>
</html>
