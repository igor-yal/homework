<footer class="w-full bottom-0 bg-gray-900 pb-6">
    <div class="container mx-auto px-4">
        <hr class="mb-6 border-b-1 border-gray-700" />
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4">
                <div class="text-sm text-white font-semibold py-1">
                    {{ __( 'Copyright ©' ) }} {{ date('Y') }}
                    <a
                        href="https://www.creative-tim.com"
                        class="text-white hover:text-gray-400 text-sm font-semibold py-1"
                    >
                        {{ __( 'Creative Tim' ) }}
                    </a>
                </div>
            </div>
            <div class="w-full md:w-8/12 px-4">
                <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                    <x-navigation></x-navigation>
                </ul>
            </div>
        </div>
    </div>
</footer>
