<section class="section_03 h-full p-5 md:p-0 hidden bg-gray-900 text-white relative z-40 mt-0 md:mt-24 lg:mt-0 pt-20 md:pt-0">
    <div class="w-full p-5 flex flex-col lg:flex-row gap-3 justify-between items-center">
        <div class="px-3 hidden lg:block">
            <p class="text-gray-400">Your events record will be displayed here...</p>
        </div>
        <div class="px-3">
            <div id="searchDiv" class="relative z-50 flex items-center text-[#34313e] duration-1000 ease-in-out">
                <span class="absolute left-0 p-1 px-3 z-50  bg-[#34313e] rounded-l-lg rounded-bl-lg"><i class="fa-solid fa-magnifying-glass text-[#e4e4e4] text-lg"></i></span>
                <input type="text" name="search_trans" id="search_trans" placeholder="Search...." class="placeholder:text-[#34313ed9] md:w-full w-[18rem] p-2 pl-12 bg-[#e4e4e4] hover:bg-[#d0cfcf] focus:border-[#34313e] text-[#34313e] rounded-lg">
            </div>
        </div>
    </div>
    <div class="p-5 grid gap-4 border-t border-gray-700 max-h-[90%] md:max-h-[80%] lg:max-h-[90%] overflow-auto scrollbar">
        @foreach ($history as $trans)
        <div class="trans bg-gray-800 shadow-md rounded-lg p-4 border border-gray-700">
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-medium text-gray-400">Referrence/s</span>
                <span class="text-sm text-gray-400">
                    @if ($trans->ref_num != null)
                        #{{ $trans->ref_num }}
                    @else
                        <span class="text-gray-400">No Referrence</span>
                    @endif | 
                    @if ($trans->receipt_img != null)
                        <a href="{{ $trans->receipt_img }}" target="_blank" class="text-blue-400 underline underline-offset-4">Reciept</a>
                    @else
                        <span class="text-gray-400">No Reciept</span>
                    @endif
                </span>
            </div>
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-medium text-gray-400">Name:</span>
                <span class="text-sm text-gray-400">{{ $trans->first_name }} {{ $trans->last_name }}</span>
            </div>
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm text-gray-400">Transaction Date:</span>
                <span class="text-sm font-medium">{{ \Carbon\Carbon::parse($trans->updated_at)->format('M d, Y')  }}</span>
            </div>
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm text-gray-400">Amount:</span>
                <span class="text-sm font-semibold text-green-400">₱{{ $trans->history_amount }}</span>
            </div>
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm text-gray-400">Status:</span>
                <span class="text-sm font-medium text-blue-400">{{ $trans->status }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-400">Payment Mode:</span>
                <span class="text-sm font-medium">{{ $trans->type }}</span>
            </div>
        </div>
        @endforeach
    </div>
</section>
