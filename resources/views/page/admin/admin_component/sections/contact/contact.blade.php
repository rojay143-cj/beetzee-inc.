<form action="{{ route('contact') }}" method="POST" class="mt-14 lg:mt-0 space-y-5 lg:space-y-3 max-h-[80%] lg:max-h-[100%] overflow-y-auto scrollbar" enctype="multipart/form-data">
    @csrf
    <div>
        <h1 class="text-2xl font-semibold">Contact Section</h1>
    </div>
    <div class="space-y-4">
        <div class="flex flex-col">
            <label for="contact_img" class="text-lg font-semibold">Background Image</label>
            <input type="file" name="contact_img" id="contact_img" 
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