<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<link rel="dns-prefetch" href="//fonts.bunny.net">
<script src="https://cdn.tailwindcss.com"></script>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"/>
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
