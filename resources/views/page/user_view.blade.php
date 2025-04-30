<section id="PROFILE" class="relative z-40 text-white py-10 h-dvh flex justify-center items-center" style="display: none">
    <div class="container mx-auto flex justify-center items-center h-auto">
            <form action="{{route('profile')}}" method="POST" class="relative w-[90%] md:w-full max-w-2xl bg-[#212227] shadow-lg rounded-xl p-8"
                enctype="multipart/form-data">
                @csrf
                <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 text-center">
                    <h1 class="text-3xl lg:text-4xl font-bold uppercase bg-gray-700 px-6 py-2 rounded-lg shadow-md">Profile
                    </h1>
                </div>
                <div class="flex flex-row items-center md:items-start justify-between gap-8 mt-12">
                    <div class="flex flex-col gap-3 text-lg">
                        <div>
                            <span class="font-semibold">Full Name:</span>
                            <span class="block text-gray-300 text-[14px] lg:text-[16px]">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                        </div>
                        <div>
                            <span class="font-semibold">Email:</span>
                            <span class="block text-gray-300 text-[14px] lg:text-[16px]">{{ Auth::user()->email }}</span>
                        </div>
                        <div>
                            <span class="font-semibold">Phone:</span>
                            <span class="block text-gray-300 text-[14px] lg:text-[16px]">{{ Auth::user()->number }}</span>
                        </div>
                        <div>
                            <span class="font-semibold">Location:</span>
                            <span class="block text-gray-300 text-[14px] lg:text-[16px]">{{ Auth::user()->address }}</span>
                        </div>
                    </div>
                    <div class="self-start min-w-24 min-h-24 w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-[#8693ab] overflow-hidden relative mr-0 md:mr-[5%]">
                        <img src="{{ Auth::check() && Auth::user()->profile_img ? Auth::user()->profile_img : asset('Asset/image/empty_profile.jpg') }}"
                            alt="Profile Picture" class="w-full h-full object-cover rounded-full">
                        <label for="profile_img"
                            class="cursor-pointer w-full h-full bg-black/50 absolute top-0 left-0 flex justify-center items-center opacity-0 hover:opacity-75 transition">
                            <input type="file" name="profile_img" id="profile_img" class="hidden" onchange="this.form.submit()">
                            <span class="text-white flex items-center relative mx-5">
                                <i class="fa-regular fa-pen-to-square fa-xl"></i>Change Picture
                            </span>
                        </label>
                    </div>
                </div>
                <div class="w-full h-full absolute bottom-[-85%] right-[-70%] md:right-[-85%]">
                    <button type="button" name="edit_profile" id="edit_profile"
                        class="mt-10 w-[8rem] p-3 py-3 bg-[#8693ab] hover:bg-[#758096] rounded-lg font-[500] text-[14px] lg:text-[16px] roboto">Edit
                        Profile</button>
                </div>
            </form>
        <section id="edit_div" class="absolute z-50 bg-[#000000] bg-opacity-75 w-full h-full left-0 flex justify-center items-center" style="display: none">
            <form action="{{ route('profile') }}" method="POST" class="form_edit relative mx-auto w-[90%] md:w-full max-w-lg bg-[#1E1F25] shadow-xl rounded-2xl p-5">
                @csrf
                <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 text-center">
                    <h1 class="text-xl lg:text-2xl font-bold uppercase bg-gray-800 px-4 py-2 rounded-lg shadow-md text-white">Edit Profile</h1>
                </div>
                <div class="flex flex-col md:flex-row items-center md:items-start justify-between gap-6 mt-10 w-[95%] mx-auto">
                    <div class="flex flex-col gap-4 text-base w-full">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                            <div>
                                <label class="font-semibold block mb-1 text-gray-300">First Name:</label>
                                <input type="text" name="first_name" placeholder="{{ Auth::user()->first_name }}" class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="font-semibold block mb-1 text-gray-300">Last Name:</label>
                                <input type="text" name="last_name" placeholder="{{ Auth::user()->last_name }}" class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold block mb-1 text-gray-300">Email:</label>
                            <input type="email" name="email" placeholder="{{ Auth::user()->email }}" class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="font-semibold block mb-1 text-gray-300">Phone:</label>
                            <input type="text" name="number" placeholder="{{ Auth::user()->number }}" class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="font-semibold block mb-1 text-gray-300">Password:</label>
                            <input type="text" name="password" placeholder="*********" class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="font-semibold block mb-1 text-gray-300">Location:</label>
                            <input type="text" name="address" placeholder="{{ Auth::user()->address }}" class="w-full p-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>
                <div class="flex justify-evenly mt-10 mx-auto w-[95%]">
                    <button type="submit" class="px-4 py-2 bg-[#8693ab] text-white rounded-lg font-medium text-base shadow-md hover:bg-[#758096] transition">Save</button>
                    <button type="button" class="cancel_edit px-4 py-2 bg-gray-600 text-white rounded-lg font-medium text-base shadow-md hover:bg-gray-500 transition">Cancel</button>
                </div>
            </form>
        </section>
    </div>
</section>
