<nav class="bg-gray-800 top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
            <a
                class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                href="/">Homework</a
            >
        </div>
        <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
            <ul class="flex flex-col lg:flex-row list-none mr-auto">
                <x-navigation></x-navigation>
            </ul>
            <x-auth-buttons></x-auth-buttons>
        </div>
    </div>
</nav>
