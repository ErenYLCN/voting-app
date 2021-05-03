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
    <body class="font-sans text-sm text-gray-900 bg-gray-background">
        
        <header class="flex items-center justify-between px-8 py-4 border-b border-gray-200 shadow-sm">
            <a href="#" class="flex items-center space-x-1"> 
                <img src="{{ asset('img/vote-logo.svg') }}" class="w-8 h-8" alt="logo">
                <span class="text-3xl font-semibold text-blue">V<span class="text-xl">ote</span><span class="text-blue-hover text-2xl">M</span><span class="text-blue-hover text-xl">e</span></span>
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

        <main class="container mx-auto flex max-w-custom mt-6">
            <div class="mr-5 w-70">
                <div class="bg-white rounded-xl mt-16" 
                 style="
                 border-width: 2px;
                 border-style: solid;
                 border-image: 
                    linear-gradient(
                    to bottom, 
                    #328af1, 
                    rgba(0, 0, 0, 0)
                    ) 1 100%;">
                    <div class="text-center px-6 py-2 pt-6">
                        <h3 class="text-gray-900 font-semibold text-base">Add an idea</h3>
                        <div class="text-gray-900 text-xs mt-4">Let us know what you would like and we'll take a look over!</div>
                    </div>
                    
                    <form action="#" method="POST" class="space-y-4 px-4 py-6">
                        <input type="text" class="w-full bg-gray-100 rounded-xl text-sm font-semibold placeholder-gray-600 border-none" placeholder="Your Idea">
                        <div>
                            <select name="category_add" id="category_add" class="border-none w-full rounded-xl px-4 py-2 bg-gray-100 text-sm font-semibold text-gray-600">
                                <option value="Category One">Category One</option>
                                <option value="Category Two">Category Two</option>
                                <option value="Category Three">Category Three</option>
                                <option value="Category Four">Category Four</option>
                            </select>
                        </div>
                        <div>
                            <textarea name="idea" id="idea" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl placeholder-gray-600 text-sm px-4 py-2 border-none" placeholder="Describe your idea.."></textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="button" class="bg-gray-200 w-1/2 rounded-xl flex items-center justify-center space-x-1 px-6 py-2 text-xs font-semibold border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
                                <svg class="w-4 h-4 text-gray-500 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                                <span>Attach</span>
                            </button>
                            <button type="submit" class="bg-blue w-1/2 text-white rounded-xl px-6 py-2 text-xs font-semibold hover:bg-blue-hover transition duration-150 ease-in">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
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
            <div class=" w-28 invisible">

            </div>
        </main>

    </body>
</html>
