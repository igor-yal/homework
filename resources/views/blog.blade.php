@extends('layouts.app')
@section('title', "Blog | Homework")

@section('content')
    <div class="container mx-auto flex flex-wrap py-6 mt-4">

        <!-- Posts Section -->
        <section class="w-full md:w-2/4 flex flex-col items-center px-3 mx-auto">
            <div>
                <h1 class="text-5xl font-bold mb-5">{{ __( 'Blog' ) }}</h1>
            </div>
            @foreach( $posts as $post )
                <article class="flex flex-col shadow my-4">
                    <!-- Article Image -->
                    <a href="{{ route( 'blog' ) }}/{{ $post->id }}" class="hover:opacity-75">
                        <img src="https://images.unsplash.com/photo-1682695797873-aa4cb6edd613?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80">
                    </a>
                    <div class="bg-white flex flex-col justify-start p-6">
                        <h3 class="text-3xl font-bold hover:text-gray-700 pb-4">
                            <a href="{{ route( 'blog' ) }}/{{ $post->id }}">{{ $post->title }}</a>
                        </h3>
                        <p class="pb-6">{{ $post->body  }}</p>
                        <a href="{{ route( 'blog' ) }}/{{ $post->id }}" class="uppercase inline-flex align-middle text-gray-800 hover:text-black">
                            {{ __( 'Continue Reading' ) }}
                            <svg class="svg-inline--fa fa-arrow-right fa-w-14 ml-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" width="16" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg><!-- <i class="fas fa-arrow-right"></i> -->
                        </a>
                    </div>
                </article>
            @endforeach
        </section>

    </div>
@endsection
