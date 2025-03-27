<section class="footer h-full w-full bg-[#000000] flex flex-col gap-5">
    <div class="w-[90%] lg:w-[80%] flex flex-col mx-auto gap-5 p-5 mt-5">
        <ul class="flex flex-row justify-center gap-5 text-[16px] lg:text-[18px]">
            <li><a href="#banner">Home</a></li>
            <li><a href="#services">Services</a></li>
            {{-- <li><a href="#shows">show</a></li> --}}
            <li><a href="#about">About</a></li>
            {{-- <li><a href="#teams">Team</a></li> --}}
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
    <div class="w-[90%] lg:w-[80%] max-w-7xl border-2 border-dotted pb-5 mx-auto flex flex-col lg:flex-row justify-center items-center gap-5 lg:gap-0 lg:items-end h-full text-[#e4e4e4bd]">
        <div class="flex flex-col items-center gap-2">
            <div class="w-[13rem]">
                <img src="{{ asset('Asset/logo/mobile_logo.png') }}" alt="Logo" class="w-full h-full">
            </div>
            <div class="flex flex-row gap-2">
                <span>Create.</span>
                <span>Collaborate.</span>
                <span>Elevate</span>
            </div>
        </div>
        <div class="flex flex-col gap-10 w-auto lg:w-[50%]">
            <div class="flex flex-col gap-5 justify-center lg:justify-start ml-10">
                <div class="flex flex-row gap-2 w-[90%] md:w-[60%] lg:mx-0 mx-auto lg:w-96">
                    <span><i class="fa-solid fa-location-dot"></i></span>
                    <p>Khan Commercial Arcade, Dumaguete North Rd, Sibulan, Negros Oriental, 6201</p>
                </div>
                <div class="flex flex-row gap-2 w-[90%] md:w-[60%] lg:mx-0 mx-auto lg:w-96">
                    <span><i class="fa-solid fa-phone"></i></span>
                    <p>+63 35 527 7347</p>
                </div>
                <div class="flex flex-row gap-2 w-[90%] md:w-[60%] lg:mx-0 mx-auto lg:w-96">
                    <span><i class="fa-solid fa-envelope"></i></span>
                    <p>info@beetzee.com</p>
                </div>
                <div class="flex flex-row gap-5 justify-start w-[90%] md:w-[60%] lg:mx-0 mx-auto lg:w-96 mt-5 lg:mt-0">
                    <a href="https://www.facebook.com/beetzeecreatives" target="_blank">
                        <img src="{{asset('asset/image/footer/social media/facebook.png')}}" alt="Facebook" class="w-5 h-5">
                    </a>
                    <a href="https://www.youtube.com/channel/UCOmJeHePcLM4OXd6m0_TkLA" target="_blank">
                        <img src="{{asset('asset/image/footer/social media/youtube.png')}}" alt="youtube" class="w-5 h-5">
                    </a>
                    <a href="https://www.tiktok.com/@beetzee_creatives" target="_blank">
                        <img src="{{asset('asset/image/footer/social media/tiktok.png')}}" alt="tiktok" class="w-5 h-5">
                    </a>
                    <a href="https://www.instagram.com/beetzee_creatives/" target="_blank">
                        <img src="{{asset('asset/image/footer/social media/instagram.png')}}" alt="instagram" class="w-5 h-5">
                    </a>
                    <a href="https://open.spotify.com/show/1ZWvkZ0tTSeSFYtzXnfhOj" target="_blank">
                        <img src="{{asset('asset/image/footer/social media/spotify.png')}}" alt="spotify" class="w-5 h-5">
                    </a>
                </div>
                <div class="flex flex-row gap-5 justify-start w-[90%] md:w-[60%] lg:mx-0 mx-auto lg:w-96 mt-5 lg:mt-0">
                    <button class="register cursor-pointer bg-[#6f1e83] hover:bg-[#6f1e83e1] p-2 rounded-lg px-10">Join Us</button>
                </div>
            </div>
        </div>
        <div class="mt-5 lg:mt-0 self-center flex flex-col text-[24px] md:text-[32px] lg:text-[40px] font-[700] text-center">
            <h1>Keep your <br> imagination <br> alive!</h1>
        </div>
    </div>
    <div class="p-10 text-center text-[12px] lg:text-[14px]">
        <p>Copyright &copy; 2023 Beetzee Creatives</p>
    </div>
</section>