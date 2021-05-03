<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>VoteMe</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-sm text-gray-900S bg-gray-background">
        
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#"> 
                <img src="{{ asset('img/logo.svg') }}" alt="logo">
            </a>
            <div class="flex items-center space-x-2">
                <a href="#">
                    @if (Route::has('login'))
                        <div class="px-6">
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
        
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </a>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    <img src="https://www.gravatar.com/avatar/000000000000000000?d=mp" 
                    alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>

        <main class="container mx-auto flex max-w-custom">
            <div class="mr-5 w-70">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, nam repudiandae? Dignissimos soluta quos totam rem odit nihil illum voluptatibus dolorum odio, ipsum impedit. Dolores consequuntur quibusdam hic placeat voluptatibus officiis, tempora enim fuga maxime beatae sequi unde minima, et laudantium assumenda excepturi vero rem aliquid harum, quam odio sunt!
            </div>
            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-50 ease-in border-b-4 pb-3 hover:border-blue">Considering (6)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-50 ease-in border-b-4 pb-3 hover:border-blue">In Progress (1)</a></li>
                    </ul>

                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li><a href="#" class="text-gray-400 transition duration-50 ease-in border-b-4 pb-3 hover:border-blue">Implemented (10)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-50 ease-in border-b-4 pb-3 hover:border-blue">Closed (55)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>

    </body>
</html>
