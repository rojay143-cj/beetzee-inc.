@extends('component.layout')
@section('title', 'Beetzee - Login')
@section('body')
@section('main')
    <div id="login_div" class="fixed w-full h-full top-0 left-0 overflow-hidden z-50">
        <section class="relative z-40 w-full h-full flex justify-center items-center">
            <div class="fixed bg-[#000000] w-full h-full bg-opacity-75"></div>
            <div id="login_form"
                class="relative flex flex-col items-center justify-center bg-[#121016] w-[25rem] h-[23rem] rounded-2xl">
                <div class="absolute top-[-20%] flex justify-center">
                    <span><i
                            class="fa-solid fa-circle-user text-[7rem] bg-purple-50 text-[#1f1c28] rounded-full p-1"></i></span>
                </div>
                <form action="{{ route('postLogin') }}" method="POST" class="w-[80%] relative z-50 mt-10">
                    @csrf
                    <div class="w-full h-full flex flex-col gap-5">
                        <div class="relative">
                            <span class="bg-[#1f1c28] flex justify-center items-center w-[2.6rem] h-full absolute"><i
                                    class="fa-solid fa-user text-[16px] lg:text-[18px] text-purple-50"></i></span>
                            <input type="text" name="email" id="email" placeholder="Email ID"
                                @if (isset($_COOKIE['email'])) value="{{ $_COOKIE['email'] }}" @endif
                                class="bg-[#34313e] w-full h-full pl-12 p-3 text-purple-50">
                        </div>
                        <div class="relative">
                            <span class="bg-[#1f1c28] flex justify-center items-center w-[2.6rem] h-full absolute"><i
                                    class="fa-solid fa-unlock-keyhole text-[16px] lg:text-[18px] text-purple-50"></i></span>
                            <input type="password" name="password" id="password" placeholder="Password"
                                @if (isset($_COOKIE['password'])) value="{{ $_COOKIE['password'] }}" @endif
                                class="bg-[#34313e] w-full h-full pl-12 p-3 text-purple-50">
                        </div>
                        <div class="flex justify-between items-center text-purple-50 text-sm">
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="remember_me" id="remember_me" class="accent-purple-50"
                                    @if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) checked="" @endif>
                                Remember Me
                            </label>
                            <a href="#" class="text-purple-300 hover:underline">Forgot Password?</a>
                        </div>
                        <div class="relative z-40 mt-5">
                            <button type="submit" name="login" id="login"
                                class="uppercase p-3 py-5 bg-[#6f1e83] w-full rounded-lg font-[500] text-[14px] lg:text-[16px] roboto">Login</button>
                        </div>
                    </div>
                </form>
                <div class="absolute left-[-15%] top-[40%]">
                    <a href="{{ route('login_page') }}"><i class="fa-solid fa-circle-left text-[#6f1e83] text-[3rem]"></i></a>
                </div>
            </div>
        </section>
    </div>
    @include('component.success_error')
@endsection
