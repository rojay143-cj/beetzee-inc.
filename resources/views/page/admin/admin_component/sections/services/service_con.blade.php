<form action="{{ route('service') }}" method="POST" class="mt-14 lg:mt-0 space-y-5 lg:space-y-3 max-h-[80%] lg:max-h-[100%] overflow-y-auto scrollbar" enctype="multipart/form-data">
    @csrf
    <div>
        <h1 class="text-2xl font-semibold">Services</h1>
    </div>
    <div class="space-y-4">
        <div class="flex flex-col">
            <label for="service_title" class="text-lg font-semibold">Title</label>
            <div class="flex justify-evenly items-center gap-3">
                <input type="text" name="service_title" id="service_title" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none">
            </div>
        </div>
        <div class="flex flex-col">
            <label for="service_description" class="text-lg font-semibold">Description</label>
            <textarea name="service_description" id="service_description" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
        <div class="flex flex-col">
            <label class="text-lg font-semibold">Image Title</label>
            <div class="flex gap-3">
                <input type="text" name="serve_text1" id="serve_text1" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg">
                <input type="text" name="serve_text2" id="serve_text2" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg">
                <input type="text" name="serve_text3" id="serve_text3" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg">
            </div>
        </div>
        <div class="flex flex-col">
            <label class="text-lg font-semibold">Thumbnail</label>
            <div class="flex gap-3">
                <input type="file" name="serve_img1" id="serve_img1" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg cursor-pointer">
                <input type="file" name="serve_img2" id="serve_img2" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg cursor-pointer">
                <input type="file" name="serve_img3" id="serve_img3" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg cursor-pointer">
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div>
        <h1 class="text-2xl font-semibold">Section 2</h1>
    </div>
    <div class="space-y-4">
        <div class="flex flex-row gap-3">
            <div class="flex flex-col w-full">
                <label for="servesec2_title" class="text-lg font-semibold">Title</label>
                <div class="flex justify-evenly items-center gap-3">
                    <input type="text" name="servesec2_title" id="servesec2_title" 
                    class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none">
                </div>
            </div>
            <div class="flex flex-col w-full">
                <label for="servesub_title" class="text-lg font-semibold">Sub Title</label>
                <div class="flex justify-evenly items-center gap-3">
                    <input type="text" name="servesub_title" id="servesub_title" 
                    class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none">
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <label class="text-lg font-semibold">Thumbnail</label>
            <div class="flex gap-3">
                <input type="file" name="price_img1" id="price_img1" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg cursor-pointer">
                <input type="file" name="price_img2" id="price_img2" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg cursor-pointer">
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div>
        <h1 class="text-2xl font-semibold">Section 3</h1>
    </div>
    <div class="space-y-4">
        <div class="flex flex-row gap-3">
            <div class="flex flex-col w-full">
                <label for="servesec3_title1" class="text-lg font-semibold">Content 1 Title</label>
                <div class="flex justify-evenly items-center gap-3">
                    <input type="text" name="servesec3_title1" id="servesec3_title1" 
                    class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none">
                </div>
            </div>
            <div class="flex flex-col w-full">
                <label for="servesec3_title2" class="text-lg font-semibold">Content 2 Title</label>
                <div class="flex justify-evenly items-center gap-3">
                    <input type="text" name="servesec3_title2" id="servesec3_title2" 
                    class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none">
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <label class="text-lg font-semibold">Source</label>
            <div class="flex gap-3">
                <input type="text" name="servesec3_src1" id="servesec3_src1" 
                    class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none" placeholder="copy/paste the link here...">
                <input type="text" name="servesec3_src2" id="servesec3_src2" 
                    class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none" placeholder="copy/paste the link here...">
            </div>
        </div>
    </div>
    <div class="flex justify-end">
        <button type="submit" 
            class="mt-6 w-[8rem] p-3 bg-[#4a5568] hover:bg-[#5a6679] text-white font-medium text-[14px] lg:text-[16px] rounded-lg transition-all duration-300">
            Save
        </button>
    </div>
</form>