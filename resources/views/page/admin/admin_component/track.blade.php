<section id="ACCOUNTS"
    class="w-full translate-x-[-0.5rem] h-dvh mx-auto pl-5 lg:pl-0 z-40 relative flex flex-col justify-center lg:justify-start">
    @if(count($users) == 0)
    <div class="mt-20 md:mt-10 w-full p-3 px-5 lg:mt-5 flex justify-between items-center">
        <h1 class="text-[18px] md:text-[20px] lg:text-[24px] text-[#E4E4E4]">No Members Available....</h1>
    </div>
    @else
    <div class="mt-20 md:mt-10 w-full p-3 px-5 lg:mt-5 flex justify-between items-center">
        <h1 class="text-[18px] md:text-[20px] lg:text-[24px]">Accounts</h1>
        <div id="searchDiv" class="relative z-50 flex items-center text-[#34313e] duration-1000 ease-in-out">
            <span class="absolute left-0 p-1 px-3 z-50  bg-[#34313e] rounded-l-lg rounded-bl-lg"><i class="fa-solid fa-magnifying-glass text-[#e4e4e4] text-lg"></i></span>
            <input type="text" name="search_acc" id="search_acc" placeholder="Search...." class="placeholder:text-[#34313ed9] w-full md:w-[18rem] p-2 pl-12 bg-[#e4e4e4] hover:bg-[#d0cfcf] focus:border-[#34313e] text-[#34313e] rounded-lg">
        </div>
    </div>
    <div id="accountGrid"
        class="mb-20 mt-5 px-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full h-auto place-items-center gap-3 overflow-x-hidden overflow-y-auto scrollbar max-h-[40rem]">
        @foreach ($users as $user)
            @php
                $bgColor = match ($user->discount_id) {
                    $disc[1]->percentage => 'bg-[#CD7F32]',
                    $disc[2]->percentage => 'bg-[#C0C0C0]',
                    $disc[3]->percentage => 'bg-[#FFD700]',
                    default => 'bg-[#34313e]',
                };
            @endphp
            <div class="members max-w-[30rem] min-w-[20rem] w-full h-[13rem] bg-[#34313e] text-[#E4E4E4] rounded-lg flex flex-col relative">
                <span class="absolute top-[2px] right-[2px] w-10 h-10  rotate-[-30deg] {{ $bgColor}} [clip-path:polygon(50%_0%,61%_35%,98%_35%,68%_57%,79%_91%,50%_70%,21%_91%,32%_57%,2%_35%,39%_35%)]"></span>
                <div class="flex flex-row gap-2 px-5 py-2">
                    <div class="w-[5rem] h-[5rem] rounded-full bg-white">
                        @if($user->profile_img == "")
                        <img src="{{ asset('Asset/image/empty_profile.jpg')}}" alt="User Profile" class="w-full h-full object-cover rounded-full">
                        @else
                        <img src="{{ $user->profile_img }}" alt="User Profile" class="w-full h-full object-cover rounded-full">
                        @endif
                    </div>
                    <div class="flex flex-col justify-between py-2 font-[500] text-[12px] lg:text-[14px] roboto">
                        <div class="">
                            <h4 class="text-[#E4E4E4] text-[12px] lg:text-[14px] font-[700] text-wrap line-clamp-1">{{ $user->first_name }} {{ $user->last_name }}</h4>
                        <p class="mt-2">{{ $user->role_name }}</p>
                        </div>
                        <div class="text-[#E4E4E4]">
                            @if($user->discount_id != 0)
                            <span class="bg-green-600 p-2 text-[8px] lg:text-[10px] font-[700] uppercase rounded-lg">{{ $user->discount_id }}% Discount</span>
                            @else
                            <span class="bg-red-600 p-2 text-[8px] lg:text-[10px] font-[700] uppercase rounded-lg">No Discounts</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="w-full p-2 flex justify-end items-center">
                    <button id="pay" data-ID="{{$user->id}}" class="pay border-b border-[#e4e4e4] py-1"><i class="fa-solid fa-hand-holding-dollar"></i> Pay</button>
                </div>
                <div class="flex justify-between items-center border-t border-[#393E46] py-3 px-5">
                    <div class="roboto font-[500] text-[10px] lg:text-[12px] flex flex-col gap-2">
                        <p><i class="fa-solid fa-credit-card"></i> Paid: ₱{{ number_format(num: $user->amount) }}</p>
                        <p><i class="fa-brands fa-creative-commons-by"></i> Last active: {{ \Carbon\Carbon::parse($user->created_at)->format('M j, Y') }}</p>
                    </div>
                    <div class="relative roboto font-[500] text-[10px] lg:text-[12px] flex flex-col gap-2">
                        <p><i class="fa-solid fa-money-bill"></i> Balance: ₱{{ number_format($user->balance) }}</p>
                        @if($user->discount_id === $disc[0]->percentage)
                        <p><i class="fa-solid fa-heart-circle-check"></i> Percentage of: {{$disc[1]->percentage}}%</p>
                        @elseif ($user->discount_id === $disc[1]->percentage)
                        <p><i class="fa-solid fa-heart-circle-check"></i> Percentage of: {{$disc[2]->percentage}}%</p>
                        @elseif ($user->discount_id === $disc[2]->percentage)
                        <p><i class="fa-solid fa-heart-circle-check"></i> Percentage of: {{$disc[3]->percentage}}%</p>
                        @else
                        <p><i class="fa-solid fa-heart-circle-check"></i> Premium customer</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div> 
    @endif
    <div id="payment_div" class="absolute top-0 left-0 flex justify-center items-center w-full h-full bg-[#000000] bg-opacity-80 z-50" style="display: none">
        <form action="{{ route('pay') }}" method="POST" enctype="multipart/form-data" id="payment" class="relative bg-[#1a1a1e] p-5 rounded-lg flex flex-col gap-2">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="">
            <div class="absolute top-[-10%] w-[80%] mx-auto text-center left-0 right-0 uppercase font-[700] bg-opacity-100 rounded-lg bg-[#393E46] p-2">
                <span class="text-[20px] lg:text-[24px]">Update payment</span>
            </div>
            <div class="flex flex-col justify-start gap-3 mt-5">
                <label for="amount">Amount</label>
                <div class="flex items-center">
                    <i class="fa-solid fa-peso-sign absolute left-8"></i>
                    <input type="text" name="amount" id="amount" placeholder="0.00" class="bg-[#34313e] p-2 pl-10 px-20 w-full text-[#e4e4e4]">
                </div>
            </div>
            <div class="flex flex-col justify-start gap-3 mt-5">
                <label for="ref_num">Reference No.</label>
                <div class="flex items-center">
                    <i class="fa-solid fa-receipt absolute left-8"></i>
                    <input type="text" name="ref_num" id="ref_num" placeholder="Enter your reference number" class="bg-[#34313e] p-2 pl-10 px-20 w-full text-[#e4e4e4]">
                </div>
            </div>
            <div class="flex flex-col justify-start gap-3 mt-5">
                <label for="receipt">Upload proof</label>
                <div class="flex items-center">
                    <input type="file" name="receipt" id="receipt" class="bg-[#34313e] p-2 text-[#e4e4e4]">
                </div>
            </div>
            <div class="flex justify-evenly mt-5">
                <button type="button" class="cancel_pay bg-[#34313e] p-2 px-10 text-[#e4e4e4]"><i class="fa-solid fa-xmark"></i> Cancel</button>
                <button type="submit" class="bg-[#34313e] p-2 px-10 text-[#e4e4e4]"><i class="fa-solid fa-hand-holding-dollar"></i> Pay</button>
            </div>
        </form>
    </div>
</section>
