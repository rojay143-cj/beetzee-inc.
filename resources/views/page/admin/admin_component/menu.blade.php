<!-- Sidebar -->
<div class="w-[16rem] h-full hidden lg:block flex-shrink-0"></div>
<section
    class="menus fixed left-0 top-0 w-full lg:w-[16rem] h-auto lg:h-full p-3 md:p-5 pb-3 md:pb-5 bg-[#212227] overflow-y-auto overflow-x-hidden z-50">
    <div class="flex flex-row lg:flex-col justify-between items-center h-full">
        <div class="flex flex-row gap-3 lg:gap-0 lg:flex-col items-center mt-0 lg:mt-5 w-full">
            <div class="border-[5px] border-[#8693ab] rounded-full">
                <img src="{{ Auth::check() && Auth::user()->profile_img ? Auth::user()->profile_img : asset('Asset/image/empty_profile.jpg') }}" 
                    alt="Profile Picture"
                    class="h-[3rem] lg:h-[5rem] w-[3rem] lg:w-[5rem] rounded-full object-cover mx-auto">
            </div>
            <div class="text-[#e4e4e4] text-center font-[500] text-[18px] roboto text-wrap line-clamp-1 mt-2"
                title="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}">
                <h4 class="text-[#f1f0f0]">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h4>
            </div>
            <ul class="mt-24 space-y-5 text-center hidden lg:block">
                <li>
                    <a href="{{ route('login_page') }}">Home</a>
                </li>
                <li id="TRACKLINK">
                    <button class="menu-btn">Member</button>
                </li>
                <li id="ACCOUNTLINK">
                    <button class="menu-btn">Add Account</button>
                </li>
                <li class="DISCOUNT">
                    <button class="menu-btn">Discount</button>
                </li>
                <li id="TRANSACTIONLINK">
                    <button class="menu-btn">Transaction</button>
                </li>
                <li id="CONTENTLINK">
                    <button class="menu-btn">Manage Content</button>
                </li>
                <li id="PROFILELINK">
                    <button class="menu-btn">Profile</button>
                </li>
                <li>
                    <a href="{{route('logout')}}" id="LOGOUT" class="menu-btn">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
                </li>
            </ul>
        </div>
        <div class="flex justify-center space-x-4 pb-0 lg:pb-5">
            <a href="#" class="social-icon"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>
</section>