@extends('layouts.app')
@section('title', 'Create new post | Homework')

@section('content')
    <div class="relative md:ml-64 bg-blueGray-50 min-h-full w-full">
        <div class="px-4 md:px-10 mx-auto w-full py-10">
            <div class="flex justify-between align-middle pb-4">
                <h1 class="block text-2xl font-bold uppercase mb-0">{{ __( 'Crete new post' ) }}</h1>
            </div>
            <hr class="mb-4">
            <div class="mb-6">
                <a href="/dashboard/posts" class="bg-pink-600 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1">
                    <i class="fas fa-arrow-left"></i>
                    {{ __( 'go back' ) }}
                </a>
            </div>
            <div class="relative w-2/3  break-words bg-white w-full mb-6 shadow-xl rounded-lg p-4">
                <form action="/dashboard/posts" method="POST">
                    @csrf
                    <div class="relative w-full mb-3">
                        <label
                            class="block uppercase text-gray-700 text-xs font-bold mb-2"
                            for="title"
                        >
                            {{ __( 'Title' ) }}
                        </label>
                        <input
                            id="title"
                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                            type="text"
                            name="title"
                            placeholder="Title"
                        />
                    </div>
                    <div class="relative w-full mb-3">
                        <label
                            class="block uppercase text-gray-700 text-xs font-bold mb-2"
                            for="body"
                        >
                            {{ __( 'Body' ) }}
                        </label>
                        <textarea
                            id="body"
                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                            name="body"
                            placeholder="Body"
                            cols="30"
                            rows="10"
                        ></textarea>
                    </div>
                    <div class="text-center mt-6">
                        <button
                            class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                            type="submit"
                        >
                            {{ __( 'Add new post' ) }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
