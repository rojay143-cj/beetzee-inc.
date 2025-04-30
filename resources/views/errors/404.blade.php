@extends('component.layout')
@section('title', '404 - ERROR')
@section('body')
    <div class="flex flex-col items-center justify-center min-h-screen bg-[#373232] text-foreground">
        <div class="relative">
            <img src="{{ asset('Asset/logo/logo.png') }}" alt="CALS" class="w-96 h-40 object-cover" />
        </div>
        <h2 class="mt-4 text-4xl font-bold text-white">Page not found</h2>
        <p class="mt-3 text-lg text-muted-foreground font-thin text-center text-white">The page you’re looking for cannot be
            found</p>
        <a href="{{route('login_page')}}"
            class="mt-6 inline-block bg-accent text-white px-6 py-3 rounded-lg hover:bg-accent/80 transition-colors duration-300 ease-in-out"
            style="background-color: #6f1e83;">
            Back to homepage
        </a>
    </div>
@endsection
