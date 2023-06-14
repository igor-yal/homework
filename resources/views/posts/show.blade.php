@extends('layouts.app')
@section('title', "$post->title | Homework")

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
            <section class="w-full flex flex-col items-center px-3">
                <article class="flex flex-col shadow my-4">
                    <div class="bg-white p-6">
                        <h1 class="text-2xl font-bold hover:text-gray-700 pb-4 mb-3">
                            {{ $post->title }}
                        </h1>
                        <p class="pb-6">{{ $post->body }}</p>
                        <div class="flex justify-end align-middle pt-4">
                            <a href="/dashboard/posts/{{ $post->id  }}/edit" class="text-blue-700 text-sm font-bold uppercase mr-3">
                                {{ __( 'Edit' ) }}
                            </a>
                            <form method="POST" action="/dashboard/posts/{{ $post->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="block text-red-700 text-sm font-bold uppercase mr-3" type="submit">{{ 'Delete'  }}</button>
                            </form>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>
@endsection
