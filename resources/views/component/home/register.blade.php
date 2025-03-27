<div id="register_div" class="fixed w-full h-full top-0 left-0 overflow-hidden z-50 flex justify-center items-center" style="display: none;">
    <div class="fixed bg-[#000000] w-full h-full bg-opacity-75"></div>
    <section id="register_form"
        class="relative z-40 flex justify-center bg-[#121016] w-[90%] xl:w-[65%] max-w-[60rem] h-auto rounded-lg">
        <div class="hidden lg:block relative w-full bg-banner2 h-auto rounded-lg bg-[length:200%_250%] xl:bg-[length:165%_150%] bg-center xl:bg-right">
            <div id="register_back" class="absolute left-5 top-2 flex flex-col items-start cursor-pointer">
                <span><i class="fa-solid fa-left-long text-3xl text-[#e4e4e4]"></i></span>
                <span class="text-[#e4e4e4] text-[12px] font-semibold">Go back</span>
            </div>
        </div>
        <form action="{{ route('register') }}" method="POST" class="flex flex-col justify-center items-center ml-0 lg:ml-20 p-5 py-10 w-full">
            @csrf
            <div class="pb-10 w-full text-left text-[24px] lg:text-[32px]">
                <h1>Create an account</h1>
                <p class="mt-5 text-[12px]">Already have an account? <a href="{{ route('beetzers') }}" class="text-[#6f1e83] underline">Login</a></p>
            </div>
            <div class="relative flex flex-col gap-3 justify-center w-full">
                <div class="flex flex-col lg:flex-row gap-3">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row gap-2">
                            <span><i class="fa-regular fa-user text-[#bdd4e7]"></i></span>
                            <label for="fname" class="font-[400] text-[14px] lg:text-[16px]">First name</label>
                        </div>
                        <input type="text" name="fname" id="fname"
                            class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                            placeholder="......" required>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row gap-2">
                            <label for="lname" class="font-[400] text-[14px] lg:text-[16px]">Last name</label>
                        </div>
                        <input type="text" name="lname" id="lname"
                            class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                            placeholder="......" required>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row gap-2">
                            <span><i class="fa-solid fa-envelope text-[#bdd4e7]"></i></span>
                            <label for="reg_email" class="font-[400] text-[14px] lg:text-[16px]">Email</label>
                        </div>
                        <input type="text" name="reg_email" id="reg_email"
                            class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                            placeholder="......" required>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row gap-2">
                            <span><i class="fa-solid fa-lock text-[#bdd4e7]"></i></span>
                            <label for="reg_password" class="font-[400] text-[14px] lg:text-[16px]">Password</label>
                        </div>
                        <input type="password" name="reg_password" id="reg_password"
                            class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                            placeholder="**********" required>
                    </div>
                </div>
                <div class="mt-2 mb-3">
                    <div class="flex flex-row gap-2">
                        <input type="checkbox" name="reg_agree" id="reg_agree" value="yes" class="w-[15px] h-[15px] accent-purple-50">
                        <span class="font-[400] text-[14px] lg:text-[16px]">I agree to the <a href="" class="text-[#6f1e83] underline">Terms and Conditions</a></span>
                    </div>
                </div>
                <div class="w-full flex justify-center mt-5">
                    <button type="button" name="register" id="register"
                        class="uppercase bg-[#6f1e83] hover:bg-[#6f1e83e1] w-full h-full rounded-lg font-[500] text-[14px] py-5 lg:text-[16px] roboto">Create account</button>
                </div>
                <div class="absolute -bottom-7 left-0 w-full text-center">
                    <dd class="register_error mt-3 text-[12px] lg:text-[14px] text-[#852020cc] tracking-widest hidden"></dd>
                    <dd class="register_success mt-3 text-[12px] lg:text-[14px] text-[#0a8f2bcc] tracking-widest hidden"></dd>
                </div>
            </div>
        </form>
    </section>
</div>
