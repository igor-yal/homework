@extends('layouts.app')
@section('title', 'Register | Homework')

@section('content')
    <div class="container mx-auto px-4 h-full pt-4">
        <div class="flex content-center items-center justify-center">
            <div class="w-full lg:w-4/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0" >
                    <div class="flex-auto px-4 lg:px-10 py-10">
                        <div class="text-gray-500 text-center mb-3 font-bold">
                            <h1 class="text-2xl">{{ __( 'Register' ) }}</h1>
                        </div>
                        <form method="POST" action="{{ route( 'register' ) }}">
                            @csrf
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="name"
                                >
                                    {{ __( 'Name' ) }}
                                </label>
                                <input
                                    id="name"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    type="text"
                                    name="name"
                                    value="{{ old( 'name' ) }}"
                                    placeholder="Name"
                                    required
                                    autofocus
                                    autocomplete="name"
                                />
                                @error('name')
                                    <strong class="block text-xs text-red-500 mt-1">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="email"
                                >
                                    {{ __( 'Email' ) }}
                                </label>
                                <input
                                    id="email"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    type="email"
                                    name="email"
                                    value="{{ old( 'email' ) }}"
                                    placeholder="Email"
                                    required
                                    autocomplete="email"
                                    autofocus
                                />
                                @error('email')
                                    <strong class="block text-xs text-red-500 mt-1">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="password"
                                >
                                    {{ __( 'Password' ) }}
                                </label>
                                <input
                                    id="password"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required
                                    autocomplete="new-password"
                                />
                                @error('password')
                                    <strong class="block text-xs text-red-500 mt-1">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="confirmPassword"
                                >
                                    {{ __( 'Confirm Password' ) }}
                                </label>
                                <input
                                    id="confirmPassword"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    type="password"
                                    name="password_confirmation"
                                    placeholder="Confirm Password"
                                    required
                                    autocomplete="new-password"
                                />
                            </div>
                            <div class="text-center mt-6">
                                <button
                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                    type="submit"
                                >
                                    {{ __( 'Register' ) }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
