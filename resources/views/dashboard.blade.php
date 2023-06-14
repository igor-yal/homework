@extends('layouts.app')
@section('title', 'Dashboard | Homework')

@section('content')
    <div class="relative md:ml-64 bg-blueGray-50 min-h-full w-full">
        <div class="px-4 md:px-10 mx-auto w-full py-10">
            <div class="flex flex-wrap">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="flex justify-between align-middle pb-4">
                    @if ( Auth::check() )
                        <h1 class="block text-2xl mb-0">
                            {{ __( 'Welcome back' )  }}, {{ Auth::user()->name }}!
                        </h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
