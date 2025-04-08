<section class="section_03 h-full p-5 md:p-0 hidden bg-gray-900 text-white">
    <div class="p-5">
        <p class="text-gray-400">Your events record will be displayed here...</p>
    </div>
    <div class="p-5 grid gap-4 border-t border-gray-700 max-h-[90%] overflow-auto scrollbar">
        @foreach ($history as $trans)
        <div class="bg-gray-800 shadow-md rounded-lg p-4 border border-gray-700">
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-medium">Referrence Number:</span>
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
