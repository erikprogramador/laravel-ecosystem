<nav class="bg-white h-16 shadow mb-8">
    <div class="container mx-auto h-full">
        <div class="flex items-center justify-center h-16">
            <div class="mr-6">
                <a href="{{ url('/') }}" class="no-underline text-lg text-grey-darkest">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="flex-1 text-right">
                @guest
                    <a class="no-underline text-grey-darker pr-3 text-sm" href="{{ url('/login') }}">Login</a>
                    <a class="no-underline text-grey-darker text-sm" href="{{ url('/register') }}">Register</a>
                @else
                    <a href="{{ route('home') }}" class="text-grey-darker text-sm pr-4 no-underline">Conteudo</a>
                    <a href="{{ route('manifest') }}" class="text-grey-darker text-sm pr-4 no-underline">Manifesto</a>
                    <a href="{{ route('references') }}" class="text-grey-darker text-sm pr-4 no-underline">Referencias</a>

                    <a href="{{ route('author') }}" class="text-grey-darker text-sm pr-4 font-bold no-underline">{{ Auth::user()->name }}</a>

                    <a href="{{ route('logout') }}"
                        class="no-underline text-grey-darker text-sm"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
