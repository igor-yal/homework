@extends('layouts.app')

@section( 'title', 'All Posts | Homework' )

@section('content')
    <div class="relative md:ml-64 bg-blueGray-50 min-h-full w-full">
        <div class="px-4 md:px-10 mx-auto w-full py-10">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="flex justify-between align-middle pb-4">
                <h1 class="block text-2xl font-bold uppercase mb-0">
                    {{ __( 'Post Listing' )  }}
                </h1>
                <a href="/dashboard/posts/create" class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1">
                    {{ __( 'Add new' ) }}
                </a>
            </div>
            <hr class="mb-4">
            @foreach( $posts as $post )
                <section class="w-full md:w-2/3 flex flex-col items-center px-3">
                    <article class="flex flex-col shadow my-4">
                        <div class="bg-white p-6">
                            <h1 class="mb-3">
                                <a href="/dashboard/posts/{{ $post->id }}" class="text-2xl font-bold hover:text-gray-700 pb-4">
                                    {{ $post->title }}
                                </a>
                            </h1>
                            <p class="pb-6">{{ $post->body }}</p>
                            <a href="/dashboard/posts/{{ $post->id }}" class="bg-pink-600 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1">
                                {{ __( 'Continue Reading' ) }}
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <div class="flex justify-end align-middle pt-4">
                                <a href="/dashboard/posts/{{ $post->id }}" class="text-blue-700 text-sm font-bold uppercase mr-3">
                                    {{ __( 'Show' ) }}
                                </a>
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
            @endforeach
        </div>
    </div>
@endsection
