@extends('component.layout')
@section('title', 'Beetzee - Dashboard')
@section('body')
@section('main')
<section class="w-full xl:w-[80%] mx-auto h-full p-0 md:p-3">
 <div class="flex flex-col lg:flex-row justify-center gap-5 items-center p-0 md:p-5 h-dvh">
    <div class="w-full lg:w-[18rem] xl:w-[20rem] h-[5rem] lg:h-full bg-[#21222755] lg:p-0 pl-0 lg:pl-10">
        <div class="relative flex flex-row justify-between items-center lg:items-start lg:flex-col gap-0 lg:gap-10 p-5">
            <div class="flex flex-row lg:flex-col items-center gap-5">
                <div class="w-[3rem] lg:w-[10rem] h-[3rem] lg:h-[10rem] rounded-full relative">
                    <img src="{{ Auth::check() && Auth::user()->profile_img ? Auth::user()->profile_img : asset('Asset/image/empty_profile.jpg')}}" alt="Profile Picture" class="w-full h-full rounded-full object-cover">
                </div>
                <div class="flex flex-col gap-2">
                    <span class="font-[700]">{{ $users->first_name }} {{ $users->last_name }}</span>
                    <span>{{ $users->role_name }}</span>
                </div>
            </div>
            <div id="member_menu" class="mt-10 absolute lg:static right-0 top-10 md:top-10 bg-[#212227] lg:bg-transparent lg:p-0 p-5 hidden lg:block z-50">
                <ul>
                    <li class="py-5 text-[#E4E4E4] text-[14px] lg:text-[16px] font-[500] roboto">
                        <a href="{{ route('login_page') }}" class="">Home</a>
                    </li>
                    <li id="MEMBER_DASHBOARD">
                        <button type="button"
                            class="text-[#E4E4E4] text-[14px] lg:text-[16px] font-[500] roboto border-b-2 border-transparent hover:text-[#8693ab] hover:pb-1 focus:border-[#8693ab] focus:pb-1 active:border-[#8693ab] active:pb-1">Dashboard</button>
                    </li>
                    <li id="PROFILELINK" class="mt-5">
                        <button type="button"
                            class="text-[#E4E4E4] text-[14px] lg:text-[16px] font-[500] roboto border-b-2 border-transparent hover:text-[#8693ab] hover:pb-1 focus:border-[#8693ab] focus:pb-1 active:border-[#8693ab] active:pb-1">Profile</button>
                    </li>
                    <li id="TRANSACTIONLINK" class="mt-5">
                        <button type="button"
                            class="text-[#E4E4E4] text-[14px] lg:text-[16px] font-[500] roboto border-b-2 border-transparent hover:text-[#8693ab] hover:pb-1 focus:border-[#8693ab] focus:pb-1 active:border-[#8693ab] active:pb-1">Transaction</button>
                    </li>
                    <li  class="mt-5 text-[#E4E4E4]"><a href="{{route('logout')}}" id="LOGOUT" class="hover:text-[#8693ab] hover:pb-1 focus:border-[#8693ab]">Logout <i class="fa-solid fa-right-from-bracket"></i></a></li>
                </ul>
            </div>
            <div id="member_burger" class="flex lg:hidden items-center justify-center">
                <span><i class="fa-solid fa-bars text-2xl"></i></span>
            </div>
        </div>
    </div>
    <div class="w-full h-full max-w-6xl flex flex-col justify-center gap-5 bg-[#21222755] p-0 md:p-5 overflow-hidden">
        @include('page.member.member_component.section_02')
        @include('page.member.member_component.section_03')
        @include('page.user_view')
    </div>
 </div>
</section>
@include('component.success_error')
@endsection
@endsection
