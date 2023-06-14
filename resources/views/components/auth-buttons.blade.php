<ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
    @guest
        @if ( Route::has('login') )
            <li>
                <a
                    class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                    href="{{ route('login')  }}"
                >
                    {{ __( 'Login' )  }}
                </a>
            </li>
        @endif
        @if ( Route::has('register') )
            <li>
                <a
                    class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                    href="{{ route('register') }}"
                >
                    {{ __( 'Register' )  }}
                </a>
            </li>
        @endif
    @else
        @if ( Route::has( 'dashboard' ) )
            <li>
                <a href="{{ route( 'dashboard' ) }}" class="text-white mr-2">
                    <i class="fas fa-user"></i>
                </a>
            </li>
        @endif
        @if ( Route::has('logout') )
            <li>
                <a
                    class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit()"
                    href="{{ route('logout') }}"
                >
                    {{ __( 'Logout' )  }}
                </a>
                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                    @csrf
                </form>
            </li>
        @endif
    @endguest
</ul>
