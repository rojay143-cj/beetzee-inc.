<form action="{{ route('milestone') }}" method="POST" class="mt-14 lg:mt-0 space-y-5 lg:space-y-3 max-h-[80%] lg:max-h-[100%] overflow-y-auto scrollbar" enctype="multipart/form-data">
    @csrf
    <div class="py-3">
        <h1 class="text-2xl font-semibold">Milestone</h1>
    </div>
    <div class="space-y-4">
        <div class="flex flex-col">
            <label for="milestone_title" class="text-lg font-semibold">Title</label>
            <div class="flex justify-evenly items-center gap-3">
                <input type="text" name="milestone_title" id="milestone_title" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none">
            </div>
        </div>
        <div class="flex flex-col">
            <label class="text-lg font-semibold">Background Image</label>
            <div class="flex gap-3">
                <input type="file" name="milestone_bg" id="milestone_bg" 
                class="w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg cursor-pointer">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="text-2xl font-semibold">
            <h1 class="text-2xl font-semibold">Bullet Points</h1>
        </div>
        <div class="flex flex-row gap-3">
            <label for="bullet1" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
                <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                <span>Bullet File 1</span>
                <input type="file" name="bullet1" id="bullet1" class="hidden">
            </label>
            
            <label for="bullet2" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
                <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                <span>Bullet File 2</span>
                <input type="file" name="bullet2" id="bullet2" class="hidden">
            </label>
            
            <label for="bullet3" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
                <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                <span>Bullet File 3</span>
                <input type="file" name="bullet3" id="bullet3" class="hidden">
            </label>
            
            <label for="bullet4" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
                <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                <span>Bullet File 4</span>
                <input type="file" name="bullet4" id="bullet4" class="hidden">
            </label>

            <label for="bullet5" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
                <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                <span>Bullet File 5</span>
                <input type="file" name="bullet5" id="bullet5" class="hidden">
            </label>

            <label for="bullet6" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
                <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                <span>Bullet File 6</span>
                <input type="file" name="bullet6" id="bullet6" class="hidden">
            </label>

            <label for="bullet7" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
                <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                <span>Bullet File 7</span>
                <input type="file" name="bullet7" id="bullet7" class="hidden">
            </label>

            <label for="bullet8" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
                <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                <span>Bullet File 8</span>
                <input type="file" name="bullet8" id="bullet8" class="hidden">
            </label>
        </div>
    </div>
    <div class="flex flex-col gap-3">
        <div class="flex flex-col mt-2">
            <label for="desc1" class="text-lg font-semibold">Description 1</label>
            <textarea name="desc1" id="desc1" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
        <div class="flex flex-col mt-2">
            <label for="desc2" class="text-lg font-semibold">Description 2</label>
            <textarea name="desc2" id="desc2" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
        <div class="flex flex-col mt-2">
            <label for="desc3" class="text-lg font-semibold">Description 3</label>
            <textarea name="desc3" id="desc3" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
        <div class="flex flex-col mt-2">
            <label for="desc4" class="text-lg font-semibold">Description 4</label>
            <textarea name="desc4" id="desc4" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
        <div class="flex flex-col mt-2">
            <label for="desc5" class="text-lg font-semibold">Description 5</label>
            <textarea name="desc5" id="desc5" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
        <div class="flex flex-col mt-2">
            <label for="desc6" class="text-lg font-semibold">Description 6</label>
            <textarea name="desc6" id="desc6" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
        <div class="flex flex-col mt-2">
            <label for="desc7" class="text-lg font-semibold">Description 7</label>
            <textarea name="desc7" id="desc7" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
        <div class="flex flex-col mt-2">
            <label for="desc8" class="text-lg font-semibold">Description 8</label>
            <textarea name="desc8" id="desc8" cols="30" rows="5" 
                class="w-full p-3 bg-[#2a2a2a] text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-[#8693ab] focus:outline-none"></textarea>
        </div>
    </div>
    <div class="flex flex-row gap-3">
        <label for="mile_img1" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
            <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
            <span>Image 1</span>
            <input type="file" name="mile_img1" id="mile_img1" class="hidden">
        </label>
        
        <label for="mile_img2" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
            <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
            <span>Image 2</span>
            <input type="file" name="mile_img2" id="mile_img2" class="hidden">
        </label>
        
        <label for="mile_img3" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
            <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
            <span>Image 3</span>
            <input type="file" name="mile_img3" id="mile_img3" class="hidden">
        </label>
        
        <label for="mile_img4" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
            <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
            <span>Image 4</span>
            <input type="file" name="mile_img4" id="mile_img4" class="hidden">
        </label>

        <label for="mile_img5" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
            <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
            <span>Image 5</span>
            <input type="file" name="mile_img5" id="mile_img5" class="hidden">
        </label>

        <label for="mile_img6" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
            <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
            <span>Image 6</span>
            <input type="file" name="mile_img6" id="mile_img6" class="hidden">
        </label>

        <label for="mile_img7" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
            <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
            <span>Image 7</span>
            <input type="file" name="mile_img7" id="mile_img7" class="hidden">
        </label>

        <label for="mile_img8" class="flex items-center gap-3 cursor-pointer w-full p-2 bg-[#2a2a2a] text-gray-300 border border-gray-600 rounded-lg hover:bg-[#3a3a3a] transition">
            <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
            <span>Image 8</span>
            <input type="file" name="mile_img8" id="mile_img8" class="hidden">
        </label>
    </div>
    <div class="flex justify-end">
        <button type="submit"
            class="mt-6 w-[8rem] p-3 bg-[#4a5568] hover:bg-[#5a6679] text-white font-medium text-[14px] lg:text-[16px] rounded-lg transition-all duration-300">
            Save
        </button>
    </div>
</form>