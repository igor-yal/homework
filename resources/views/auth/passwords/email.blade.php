@extends('layouts.app')
@section('title', 'Reset Password | Homework')

@section('content')
    <div class="container mx-auto px-4 h-full py-4">
        <div class="flex content-center items-center justify-center">
            <div class="w-full lg:w-4/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                    <div class="flex-auto px-4 lg:px-10 py-10">
                        <div class="text-gray-500 text-center mb-3 font-bold">
                            <h1 class="text-2xl">{{ __( 'Reset Password' ) }}</h1>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                        <form method="POST" action="{{ route( 'password.email' ) }}">
                            @csrf
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="email"
                                >
                                    {{ __('Email') }}
                                </label>
                                <input
                                    id="email"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    type="email"
                                    name="email"
                                    value="{{  old( 'email' ) }}"
                                    placeholder="Email"
                                    required
                                    autofocus
                                    autocomplete="email"
                                />
                                @error('email')
                                    <strong class="block text-xs text-red-500 mt-1">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="text-center mt-6">
                                <button
                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                    type="submit"
                                >
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
