<section class="discountDIV h-full p-0 lg:p-5 md:p-0 hidden bg-gray-900 text-white relative z-40 mt-0 md:mt-24 lg:mt-0 pt-20 md:pt-0">
    <div class="w-full p-5 flex flex-col lg:flex-row gap-3 justify-between items-center">
        <div class="px-3 hidden lg:block">
            <p class="text-gray-400">Change the discount here...</p>
        </div>
    </div>
    <div id="divtoInsert" class="bg-[#212227] p-5 h-full gap-4 border-t border-gray-700 max-h-[90%] md:max-h-[80%] lg:max-h-[90%] overflow-auto scrollbar flex justify-center items-center" style="display: none;">
        <div class="closediscountInsert absolute right-3 top-[8%] p-5 cursor-pointer">
            <span><i class="fa-solid fa-xmark text-[#8693ab] lg:text-[30px] text-[40px]"></i></span>
        </div>
        <form action="{{ route('Insertdiscount') }}" method="POST" class="relative z-50 w-full lg:w-[30rem] bg-[#212227] p-5 pb-10 rounded-lg">
            @csrf
                <div class="p-5 pb-10 w-full text-center text-[18px] lg:text-[20px]">
                    <h1>Insert Discount</h1>
                </div>
                <div class="flex flex-col md:flex-row gap-3 justify-center">
                    <div class="w-full">
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row gap-2">
                                <span><i class="fa-solid fa-percent text-[#bdd4e7]"></i></span>
                                <label for="per_cent" class="font-[400] text-[14px] lg:text-[16px]">Percentage</label>
                            </div>
                            <input type="number" name="per_cent"
                                class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                placeholder="......" required>
                        </div>
                        <div class="w-full">
                            <div class="flex flex-col gap-2 mt-5">
                                <div class="flex flex-row gap-2">
                                    <span><i class="fa-solid fa-peso-sign text-[#bdd4e7]"></i></span>
                                    <label for="per_amount" class="font-[400] text-[14px] lg:text-[16px]">Amount</label>
                                </div>
                                <input type="number" name="per_amount"
                                    class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                    placeholder="......" required>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex flex-col gap-2 mt-5">
                                <div class="flex flex-row gap-2">
                                    <span><i class="fa-solid fa-percent text-[#bdd4e7]"></i></span>
                                    <label for="target" class="font-[400] text-[14px] lg:text-[16px]">Goal</label>
                                </div>
                                <input type="number" name="target"
                                    class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                    placeholder="......" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-center">
                    <button type="submit" name="register"
                        class="uppercase mt-5 p-3 py-5 bg-[#8693ab] w-full rounded-lg font-[500] text-[14px] lg:text-[16px] roboto">Insert</button>
                </div>
        </form>
    </div>
    <div class="p-5 h-full gap-4 border-t border-gray-700 max-h-[90%] md:max-h-[80%] lg:max-h-[90%] overflow-auto scrollbar flex justify-center items-center">
        <div class="w-full lg:w-[40rem] bg-[#212227] p-5 pb-10 rounded-lg">
            <div class="p-5 pb-5 w-full text-center text-[18px] lg:text-[20px]">
                <h1>Discount Information</h1>
            </div>
            <table class="w-full text-left text-zinc-200">
                <thead>
                    <tr class="border-b border-gray-700">
                        <th class="p-2">Percentage</th>
                        <th class="p-2">Amount</th>
                        <th class="p-2">Goal</th>
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($disc as $discount)
                        <tr class="border-b border-gray-700">
                            <td class="p-2">{{ $discount->percentage }}%</td>
                            <td class="p-2">₱{{ number_format($discount->limit, 2) }}</td>
                            <td class="p-2">%{{ $discount->target }}</td>
                            <td class="p-2 flex gap-2">
                                <button type="button" data-id="{{$discount->id}}" class="edit_discount text-blue-400">Edit</button>
                                <button type="button" data-id="{{$discount->id}}" class="text-red-400 delete_discount">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="w-full p-5 flex justify-center items-center">
                <button class="InsertDiscount"><i class="fa-solid fa-plus text-[#8693ab] lg:text-[30px] text-[40px]"></i>Insert Discount</button>
            </div>
        </div>
    </div>
    <div class="edit_discount_div absolute z-30 top-0 left-0 w-full p-5 h-full gap-4 border-t border-gray-700 bg-black bg-opacity-55 overflow-auto scrollbar flex justify-center items-center" style="display: none;">
        <form action="{{ route('Updatediscount', $discount->id) }}" method="POST" class="relative z-30 w-full lg:w-[30rem] bg-[#212227] p-5 pb-10 rounded-lg">
            <div class="closediscountEdit absolute right-0 top-0 p-5 cursor-pointer">
                <span><i class="fa-solid fa-xmark text-[#8693ab] lg:text-[30px] text-[40px]"></i></span>
            </div>
            @csrf
                <div class="p-5 pb-10 w-full text-center text-[18px] lg:text-[20px]">
                    <h1>Update Discount</h1>
                </div>
                <div class="flex flex-col md:flex-row gap-3 justify-center">
                    <div class="w-full">
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-row gap-2">
                                <span><i class="fa-solid fa-percent text-[#bdd4e7]"></i></span>
                                <label for="per_cent" class="font-[400] text-[14px] lg:text-[16px]">Percentage</label>
                            </div>
                            <input type="number" name="per_cent" id="per_cent"
                                class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                placeholder="......">
                        </div>
                        <div class="w-full">
                            <div class="flex flex-col gap-2 mt-5">
                                <div class="flex flex-row gap-2">
                                    <span><i class="fa-solid fa-peso-sign text-[#bdd4e7]"></i></span>
                                    <label for="per_amount" class="font-[400] text-[14px] lg:text-[16px]">Amount</label>
                                </div>
                                <input type="number" name="per_amount" id="per_amount"
                                    class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                    placeholder="......">
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex flex-col gap-2 mt-5">
                                <div class="flex flex-row gap-2">
                                    <span><i class="fa-solid fa-percent text-[#bdd4e7]"></i></span>
                                    <label for="target" class="font-[400] text-[14px] lg:text-[16px]">Goal</label>
                                </div>
                                <input type="number" name="target" id="target"
                                    class="p-2 rounded-lg bg-[#363244] text-zinc-200 placeholder:text-zinc-300 placeholder:text-[12px]"
                                    placeholder="......">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="discount_id" class="discount_id" value="">
                </div>
                <div class="w-full flex justify-center">
                    <button type="submit" name="register"
                        class="uppercase mt-5 p-3 py-5 bg-[#8693ab] w-full rounded-lg font-[500] text-[14px] lg:text-[16px] roboto">Register</button>
                </div>
        </form>
    </div>
    <div class="delete_discount_div absolute z-30 top-0 left-0 w-full p-5 h-full gap-4 border-t border-gray-700 bg-black bg-opacity-55 overflow-auto scrollbar flex justify-center items-center" style="display: none;">
        <form action="{{ route('Deletediscount', $discount->id) }}" method="POST" class="relative z-30 w-full lg:w-[30rem] bg-[#212227] p-5 pb-10 rounded-lg">
            <div class="closediscountdelete absolute right-0 top-0 p-5 cursor-pointer">
                <span><i class="fa-solid fa-xmark text-[#8693ab] lg:text-[30px] text-[40px]"></i></span>
            </div>
            @csrf
                <div class="p-5 pb-10 w-full text-center text-[18px] lg:text-[20px]">
                    <h1>Delete Discount</h1>
                </div>
                <div class="p-5 pb-10 w-full text-center text-[12px] lg:text-[14px]">
                    <p>This action will delete the discount percentage and it's data!</p>
                    <p>Are you sure you want to delete this discount?</p>
                </div>
                <div class="flex flex-col md:flex-row gap-3 justify-center">
                    <input type="hidden" name="discount_id" class="discount_id" value="">
                </div>
                <div class="w-full flex justify-center gap-5">
                    <button type="submit" name="register"
                        class="uppercase mt-5 p-3 py-5 bg-[#ab1d2c] w-full rounded-lg font-[500] text-[14px] lg:text-[16px] roboto">Yes</button>
                    <button type="button"
                        class="closediscountdelete uppercase mt-5 p-3 py-5 bg-[#8693ab] w-full rounded-lg font-[500] text-[14px] lg:text-[16px] roboto">No</button>
                </div>
        </form>
    </div>
</section>
