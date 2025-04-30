        {{-- registration form here --}}
        <section id="REGISTER" class="w-full flex justify-center items-center h-full" style="display: none">
            <form action="{{ route('admin_reg') }}" method="POST"
                class="relative z-50 w-[90%] lg:w-[40rem] bg-[#212227] p-5 pb-10 rounded-lg">
                @csrf
                <div class="p-5 pb-10 w-full text-center text-[18px] lg:text-[20px]">
                    <h1>Create new admin</h1>
                </div>
                <div class="flex flex-col md:flex-row gap-3 justify-center">
                    <div class="w-full">
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row gap-2">
                                <span><i class="fa-regular fa-user text-[#bdd4e7]"></i></span>
                                <label for="first_name" class="font-[400] text-[14px] lg:text-[16px]">First Name</label>
                            </div>
                            <input type="text" name="first_name" id="first_name"
                                class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                placeholder="......" required>
                        </div>
                        <div class="flex flex-col gap-2 mt-5">
                            <div class="flex flex-row gap-2">
                                <span><i class="fa-solid fa-phone text-[#bdd4e7]"></i></span>
                                <label for="number" class="font-[400] text-[14px] lg:text-[16px]">Phone number</label>
                            </div>
                            <input type="text" name="number" id="number"
                                class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                placeholder="......" required>
                        </div>
                        <div class="flex flex-col gap-2 mt-5">
                            <div class="flex flex-row gap-2">
                                <span><i class="fa-regular fa-address-book text-[#bdd4e7]"></i></span>
                                <label for="address" class="font-[400] text-[14px] lg:text-[16px]">Address</label>
                            </div>
                            <input type="text" name="address" id="address"
                                class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                placeholder="(optional)">
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row">
                                <span></span>
                                <label for="last_name" class="font-[400] text-[14px] lg:text-[16px]">Last Name</label>
                            </div>
                            <input type="text" name="last_name" id="last_name"
                                class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                placeholder="......" required>
                        </div>
                        <div class="flex flex-col gap-2 mt-5">
                            <div class="flex flex-row gap-2">
                                <span><i class="fa-regular fa-envelope text-[#bdd4e7]"></i></span>
                                <label for="email" class="font-[400] text-[14px] lg:text-[16px]">Email</label>
                            </div>
                            <input type="text" name="email" id="email"
                                class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                placeholder="......" required>
                        </div>
                        <div class="flex flex-col gap-2 mt-5">
                            <div class="flex flex-row gap-2">
                                <span><i class="fa-regular fa-envelope text-[#bdd4e7]"></i></span>
                                <label for="password" class="font-[400] text-[14px] lg:text-[16px]">Password</label>
                            </div>
                            <div class="flex gap-2">
                                <input type="text" name="password" id="password"
                                    class="w-[70%] p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                    placeholder="******" required>
                                <button type="button" id="generate_password" class="px-2 bg-[#8693ab] w-[30%] rounded-lg font-[500] text-[14px] lg:text-[16px]">
                                    Generate
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-center">
                    <button type="submit" name="register"
                        class="uppercase mt-5 p-3 py-5 bg-[#8693ab] w-full rounded-lg font-[500] text-[14px] lg:text-[16px] roboto">Register</button>
                </div>
            </form>
        </section>