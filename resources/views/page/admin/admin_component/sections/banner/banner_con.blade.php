<form action="{{ route('banner') }}" method="POST" class="mt-14 lg:mt-0 space-y-5 lg:space-y-3 max-h-[80%] lg:max-h-[100%] overflow-y-auto scrollbar" enctype="multipart/form-data">
    @csrf
    <div>
        <h1 class="text-2xl font-semibold">Banner</h1>
    </div>
    <div class="space-y-4">
        <div class="flex flex-col">
            <label for="banner_title" class="text-lg font-semibold">Title</label>
            <div class="flex justify-evenly items-center gap-3">
                <input type="text" name="banner_title1" id="banner_title" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none">
                <input type="text" name="banner_title2"
                    class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none">
                <input type="text" name="banner_title3" 
                    class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none">
            </div>
        </div>
        <div class="flex flex-col">
            <label for="banner_description" class="text-lg font-semibold">Description</label>
            <textarea name="banner_description" id="banner_description" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
        <div class="flex flex-col">
            <label for="banner_img" class="text-lg font-semibold">Thumbnail</label>
            <input type="file" name="banner_img" id="banner_img" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg cursor-pointer">
        </div>
    </div>
    <div class="pt-3 lg:pt-10">
        <h1 class="text-2xl font-semibold">Section 2</h1>
    </div>
    <div class="space-y-4">
        <div class="flex flex-col">
            <label for="bansec2_title" class="text-lg font-semibold">Title</label>
            <div class="flex justify-evenly items-center gap-3">
                <input type="text" name="bansec2_title" id="bansec2_title" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none">
            </div>
        </div>
        <div class="flex flex-col">
            <label for="bansec2_description" class="text-lg font-semibold">Description</label>
            <textarea name="bansec2_description" id="bansec2_description" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
        <div class="flex flex-col">
            <label for="bansec2_img" class="text-lg font-semibold">Thumbnail</label>
            <input type="file" name="bansec2_img" id="bansec2_img" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg cursor-pointer">
        </div>
    </div>
    <div class="flex justify-end">
        <button type="submit"
            class="mt-6 w-[8rem] p-3 bg-[#4a5568] hover:bg-[#5a6679] text-white font-medium text-[14px] lg:text-[16px] rounded-lg transition-all duration-300">
            Save
        </button>
    </div>
</form>