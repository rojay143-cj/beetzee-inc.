@extends('component.layout')
@section('title', 'Beetzee - Create. Collaborate. Elevate')
@section('body')
@section('main')
<div id="header" class="fixed max-h-40 h-[10%] w-full z-40 p-5 py-10 flex justify-between items-center bg-[#16171a] lg:bg-transparent bg-gradient-to-b from-[#000000] via-[#000000c8] to-[#00000000]">
    <div class="w-full mx-auto flex justify-between items-center">
        <div class="relative flex justify-between items-center">
            <div class="absolute left-0 w-[5rem] h-[5rem]">
                <img src="{{ asset('Asset/logo/logo.png') }}" alt="Beetzee Logo" class="object-cover w-full h-full">
            </div>
        </div>
        <div id="home_menu" class="absolute lg:static hidden lg:flex right-0 top-[100%]">
            <ul class="flex flex-col bg-[#16171a] lg:bg-transparent lg:flex-row items-center justify-center gap-8 text-[#E4E4E4] p-10 lg:p-5 text-[16px] lg:text-[18px]">
                <li><a href="#banner">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                @if(Auth::check())
                @if(Auth::user()->role_id == '1001')
                <li><a href="{{route('admin_dashboard')}}"><i class="fa-solid fa-chart-line text-[#d4a682] dashboard_ico"></i> Dashboard</a></li>
                @else
                <li><a href="{{route('member_dashboard')}}"><i class="fa-solid fa-chart-line text-[#d4a682] dashboard_ico"></i> Dashboard</a></li>
                @endif
                    <div class="relative group">
                        <div class="flex items-center gap-2 cursor-pointer">
                            <i class="fa-solid fa-user text-[#6C946F] profile_ico"></i>
                            <span>{{ $userInfo->first_name }}</span>
                        </div>
                        <!-- Dropdown Menu -->
                        <div class="absolute right-0 mt-5 w-[250px] h-auto bg-[#16171a] text-[#E4E4E4] text-[12px] lg:text-[14px] rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-700 p-4 space-y-2">
                            <p><strong>Paid:</strong> ₱{{ number_format($userInfo->amount, 2) }}</p>
                            <p><strong>Next Tier:</strong> ₱{{ number_format($userInfo->balance, 2) }}</p>
                            <p><strong>Discount:</strong> {{ $userInfo->discount_id }}%</p>
                            <p class="text-gray-400 mt-2">Last transaction: {{ \Carbon\Carbon::parse($userInfo->updated_at)->diffForHumans() }}</p>
                            <form action="{{ route('subscribe') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $userInfo->subscription }}">
                                <button type="submit" class="w-full p-2 py-3 rounded-lg bg-[#6f1e83] hover:bg-[#6f1e83e1]">
                                    {{ $userInfo->subscription }} Beetzee
                                </button>
                            </form>
                            <hr class="my-2 border-gray-600">
                            <br>
                            <a href="{{ route('logout') }}" class="text-red-400 hover:text-red-500 text-sm">Logout</a>
                        </div>
                    </div>
                @else
                    <li class="register cursor-pointer bg-[#6f1e83] hover:bg-[#6f1e83e1] p-2 rounded-lg px-5"><a href="#">Join Us</a></li>
                @endif
            </ul>
        </div>
        <div class="block lg:hidden mr-5">
            <i id="home_burger" class="fa-solid fa-bars text-2xl cursor-pointer"></i>
        </div>
    </div>
</div>
@if(Auth::check())
<div id="appearGreet" class="hidden absolute top-[10%] left-1/2 transform -translate-x-1/2 p-5 w-[40%] z-30 bg-green-400 text-[#16171a] text-center rounded-lg shadow-lg">
    <div>
        <span>Welcome Back {{ $userInfo->first_name }} 👋</span>
    </div>
</div>
@endif
    {{-- Banner --}}
    @include('component.home.banner')
    {{-- section 2 --}}
    @include('component.home.learnmore')
    {{-- section 4 --}}
    @include('component.home.services')
    {{-- about us --}}
    @include('component.home.aboutus')
    @include('component.home.milestone')
    {{-- Team & Artist --}}
    @include('component.home.team')
    {{-- section 5 --}}
    @include('component.home.contact')
    {{-- Footer --}}
    @include('component.home.footer')
    {{-- Login --}}
    @include('component.home.register')
    @include('component.success_error')
@endsection
@endsection
