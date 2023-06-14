<li class="flex items-center">
    <a
        class="{{ request()->is( '/' ) ? 'underline' : ''}} lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
        href="/">
        {{ __( 'home' ) }}</a
    >
</li>
<li class="flex items-center">
    <a
        class="{{ request()->is( 'about' ) ? 'underline' : '' }} lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
        href="{{ route( 'about' ) }}">
        {{ __( 'About' ) }}</a
    >
</li>
<li class="flex items-center">
    <a
        class="{{ request()->is( 'blog' ) ? 'underline' : '' }} lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
        href="{{ route( 'blog' ) }}">
        {{ __( 'Blog' ) }}</a
    >
</li>
<li class="flex items-center">
    <a
        class="{{ request()->is( 'contact' ) ? 'underline' : '' }} lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
        href="{{ route('contact')  }}">
        {{ __( 'Contact' ) }}</a
    >
</li>
