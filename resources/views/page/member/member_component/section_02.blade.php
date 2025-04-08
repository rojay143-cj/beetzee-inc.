<div class="section_02 h-full p-5 md:p-0">
    <div class="w-full">
        <p>Your expenses record will be displayed here...</p>
    </div>
    <div class="flex flex-col mt-5 gap-5 p-0 md:p-3">
        <div class="bg-[#313239] p-3 rounded-lg flex flex-row items-center gap-2 w-full">
            <i class="fa-solid fa-coins text-lg text-[#FF7F00]"></i>
            <span>Paid amount: ₱{{number_format($users->amount)}}</span>
        </div>
        <div class="bg-[#313239] p-3 rounded-lg flex flex-row items-center gap-2 w-[90%]">
            <i class="fa-solid fa-tag text-lg text-[#00FF00]"></i>
            @if ($users->discount_id == 0)
            <span>Discount: 0%</span>
            @else
            <span>Discount: {{ $users->discount_id }}%</span>
            @endif
        </div>
        <div class="bg-[#313239] p-3 rounded-lg flex flex-row items-center gap-2 w-[80%]">
            <i class="fa-solid fa-money-bill text-lg text-[#FFFF00]"></i>
            <span>Amount for next tier: ₱{{number_format($users->balance)}}</span>
        </div>
        <div class="bg-[#313239] p-3 rounded-lg flex flex-row items-center gap-2 w-[70%]">
            <i class="fa-solid fa-rectangle-list text-lg text-[#0000FF]"></i>
            @if($users->discount_id === $disc[0]->percentage)
                    <p>Get: {{$disc[1]->percentage}}%</p>
                    @elseif ($users->discount_id == 7)
                    <p>Get: {{$disc[2]->percentage}}%</p>
                    @elseif ($users->discount_id == 15)
                    <p>Get: {{$disc[3]->percentage}}%</p>
                    @else
                    <p>Premium customer</p>
                    @endif
        </div>
        <div class="bg-[#313239] p-3 rounded-lg flex flex-row items-center gap-2 w-[60%]">
            <i class="fa-regular fa-calendar-days text-lg text-[#8B00FF]"></i>
            <span>Paid last: {{ \Carbon\Carbon::parse($users->updated_at)->format('M d, Y') }}</span>
        </div>
    </div>
</div>
