<form action="{{ route('about') }}" method="POST" class="mt-14 lg:mt-0 space-y-5 lg:space-y-3 max-h-[80%] lg:max-h-[100%] overflow-y-auto scrollbar" enctype="multipart/form-data">
    @csrf
    <div>
        <h1 class="text-2xl font-semibold">About Us</h1>
    </div>
    <div class="space-y-4">
        <div class="flex flex-col">
            <label for="aboutus_title" class="text-lg font-semibold">Title</label>
            <div class="flex justify-evenly items-center gap-3">
                <input type="text" name="aboutus_title" id="aboutus_title" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none">
            </div>
        </div>
        <div class="flex flex-col">
            <label for="aboutus_description" class="text-lg font-semibold">Description</label>
            <textarea name="aboutus_description" id="aboutus_description" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
        <div class="flex flex-col">
            <label class="text-lg font-semibold">Background Image</label>
            <div class="flex gap-3">
                <input type="file" name="aboutus_bg" id="aboutus_bg" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg cursor-pointer">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="flex flex-col">
            <label class="text-lg font-semibold">Content 1- Title</label>
            <div class="flex gap-3 flex-col lg:flex-row">
                <input type="text" name="aboutcontent1_title1" id="aboutcontent1_title1" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg">
                <input type="file" name="aboutcontent1_img1" id="aboutcontent1_img1" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg">
            </div>
            <div class="flex flex-col mt-2">
                <label for="content1_description1" class="text-lg font-semibold">Description</label>
                <textarea name="content1_description1" id="content1_description1" cols="30" rows="5" 
                    class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row gap-3">
            <div class="flex flex-col w-full">
                <label class="text-lg font-semibold">Content 2 - Title</label>
                <div class="flex gap-3 flex-col lg:flex-row">
                    <input type="text" name="aboutcontent2_title2" id="aboutcontent2_title2" 
                    class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg">
                    <input type="file" name="content2_img2" id="content2_img2" 
                    class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg">
                </div>
                <div class="flex flex-col mt-2">
                    <label for="content2_description2" class="text-lg font-semibold">Description</label>
                    <textarea name="content2_description2" id="content2_description2" cols="30" rows="5" 
                        class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
                </div>
            </div>
            <div class="flex flex-col w-full">
                <label class="text-lg font-semibold">Content 3 - Title</label>
                <div class="flex gap-3 flex-col lg:flex-row">
                    <input type="text" name="aboutcontent3_title3" id="aboutcontent3_title3" 
                    class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg">
                    <input type="file" name="content3_img3" id="content3_img3" 
                    class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg">
                </div>
                <div class="flex flex-col mt-2">
                    <label for="content3_description3" class="text-lg font-semibold">Description</label>
                    <textarea name="content3_description3" id="content3_description3" cols="30" rows="5" 
                        class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
                </div>
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