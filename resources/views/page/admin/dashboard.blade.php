@extends('component.layout')
@section('title', 'Beetzee - Dashboard')
@section('body')
@section('main')
    <main class="relative w-full h-full flex flex-row">
        @include('page.admin.admin_component.menu')
        <!-- Right Section -->
        <section id="sideDash" class="relative w-full h-dvh overflow-hidden">
            <img src="{{ asset('Asset/logo/back_drop_logo.png') }}" alt=""
                class="absolute top-0 left-0 w-full h-full z-30 object-contain">
            <div class="absolute top-0 left-0 bg-opacity-75 w-full h-full z-40 bg-[#000000]"></div>
            {{-- <div class="absolute bottom-3 left-0 p-5 lg:p-0 pl-0 lg:pl-14 z-50 w-full text-center">
                <span id="typingSpan" class="text-[#E4E4E4] text-[12px] lg:text-[14px] thefuture"></span>
            </div> --}}
            @include('page.admin.admin_component.register')
            @include('page.admin.admin_component.track')
            @include('page.admin.admin_component.transaction')
            @include('page.admin.admin_component.discount')
            @include('page.admin.admin_component.webcontent')
            @include('page.user_view')
            <div class="w-[18rem] h-auto absolute bottom-3 mx-auto left-0 right-0 z-50">
                <div class="flex flex-row justify-between p-4 rounded-lg bg-opacity-50 bg-[#212227] items-center lg:hidden">
                    <a href="{{route('login_page')}}" class="HOME cursor-pointer"><i class="fa-solid fa-house-chimney text-[#8693ab]"></i></a>
                    <span class="TRACK cursor-pointer"><i class="fa-solid fa-chart-line text-[#8693ab]"></i></span>
                    <span class="ACCOUNT cursor-pointer"><i class="fa-solid fa-user text-[#8693ab]"></i></span>
                    <span class="TRANSACTION cursor-pointer"><i class="fa-solid fa-hand-holding-dollar text-[#8693ab]"></i></span>
                    <span class="CONTENT cursor-pointer"><i class="fa-brands fa-sketch text-[#8693ab]"></i></span>
                    <span class="PROFILE cursor-pointer"><i class="fa-solid fa-gears text-[#8693ab]"></i></span>
                    <a href="{{route('logout')}}" id="LOGOUT"><i class="fa-solid fa-right-from-bracket text-[#8693ab]"></i></a>
                </div>
            </div>
        </section>
        @include('component.success_error')
    </main>
@endsection
@endsection
