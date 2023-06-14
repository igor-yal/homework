@extends('layouts.app')
@section('title', "$post->title | Homework")

@section('content')
    <div class="container mx-auto flex flex-wrap py-6 mt-4">

        <!-- Posts Section -->
        <section class="w-full md:w-2/4 items-center px-3 mx-auto">
            <div class="mb-6">
                <a href="{{ route( 'blog' )  }}" class="bg-pink-600 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1">
                    <i class="fas fa-arrow-left"></i>
                    {{ __( 'back' ) }}
                </a>
            </div>
            <div>
                <h1 class="text-5xl text-center font-bold mb-6">{{ $post->title }}</h1>
            </div>

                <article class="flex flex-col shadow my-4">
                    <!-- Article Image -->
                    <a href="/blog/{{ $post->id }}" class="hover:opacity-75">
                        <img src="https://images.unsplash.com/photo-1682695797873-aa4cb6edd613?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80">
                    </a>
                    <div class="bg-white flex flex-col justify-start p-6">
                        <p class="pb-6">{{ $post->body  }}</p>
                    </div>
                </article>
        </section>

    </div>
@endsection
