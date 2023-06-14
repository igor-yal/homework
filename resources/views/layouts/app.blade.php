<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-head></x-head>
</head>
<body class="antialiased">
    <div id="wrapper" class="flex flex-col min-h-screen">
        <x-header></x-header>
        <main class="flex-grow pt-16 pb-4 {{ request()->is('dashboard*')  ? 'flex': '' }}">
            @if ( request()->is( 'dashboard*' ) )
                <x-dashboard-navigation></x-dashboard-navigation>
            @endif
            @yield('content')
        </main>
        @if ( !request()->is( 'dashboard*' ) )
            <x-footer></x-footer>
        @endif
    </div>
</body>
</html>
