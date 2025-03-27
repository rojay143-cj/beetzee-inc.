<section id="contact" class="w-full h-full contactBG bg-no-repeat bg-center bg-cover pb-20 lg:pb-0 relative">
    <div class="absolute top-0 left-0 w-full h-full bg-[#000000] bg-opacity-55"></div>
    <div id="contactPage"
        class="w-[90%] lg:w-[80%] max-w-[1710px] mx-auto overflow-hidden relative z-30 py-0 lg:py-40">
        <div
            class="overflow-hidden flex justify-center h-full w-full mx-auto lg:flex-nowrap flex-wrap-reverse relative gap-5 py-0 mt-5">
            <form action="{{ route('contact.send') }}" method="POST" id="form_contact" data-aos="fade-right" data-aos-duration="1000"
                class="grid grid-cols-1 md:grid-cols-2 md:flex flex-row self-center gap-3 relative z-30 flex-wrap w-full lg:w-[90%] xl:w-[50%] max-w-[650px] right duration-1000">
                @csrf
                <div class="flex flex-col w-full mb-1 roboto font-[400]">
                    <label for="name" class="text-[14px] md:text-[16px] text-white">Name*</label>
                    <input type="text" id="name" name="name" class="h-8 p-6 w-full text-[#07061C]"
                        placeholder="Your name">
                </div>
                <div class="flex flex-row gap-5 items-center w-full max-w-full flex-wrap md:flex-nowrap roboto font-[400]">
                    <div class="flex flex-col w-full">
                        <label for="organization" class="text-[14px] md:text-[16px] text-white">Organization*</label>
                        <input type="text" name="organization" id="organization" class="h-8 p-6 w-full text-[#07061C]"
                            placeholder="Organization">
                    </div>
                    <div class="flex flex-col w-full">
                        <label for="inquiry" class="text-[14px] md:text-[16px] text-white">Type of Inquiry*</label>
                        <select name="inquiry" id="inquiry" class="h-12 px-5 w-full text-[#07061C]">
                            <option value="" disabled selected>Type of inquiry</option>
                            <option value="General Inquiry">GENERAL INQUIRY</option>
                            <option value="BE A SPONSOR">BE A SPONSOR</option>
                            <option value="FUNDRAISING">FUNDRAISING</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-row gap-5 items-center w-full max-w-full flex-wrap md:flex-nowrap roboto font-[400]">
                    <div class="flex flex-col w-full">
                        <label for="contact_email" class="text-[14px] md:text-[16px] text-white">Email*</label>
                        <input type="text" name="contact_email" id="contact_email" class="h-8 p-6 w-full text-[#07061C]"
                            placeholder="Your email address">
                    </div>
                    <div class="flex flex-col w-full text-black">
                        <label for="number" class="text-[14px] md:text-[16px] text-white">Contact*</label>
                        <input type="text" name="number" id="number" class="h-8 p-6 w-full text-[#07061C]"
                            placeholder="Your contact number">
                    </div>
                </div>
                <div class="flex flex-col w-full">
                    <div class="flex flex-col roboto font-[400]">
                        <label for="message" class="text-[14px] md:text-[16px] text-white">Message*</label>
                        <textarea class="text-black px-5 py-5" name="message" id="message" cols="30" rows="8"
                            placeholder="What do you want to say..."></textarea>
                    </div>
                    <button type="button" name="send" id="btn_send" class="roboto font-[400] text-white text-xl text-center bg-blue-600 rounded-none md:rounded-lg mt-5 py-3">
                        send
                    </button>
                </div>
                <div id="contact_msg" class="absolute -bottom-10 text-red-600 text-[14px] md:text-[16px] flex flex-col roboto font-[700] text-center"></div>
            </form>
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" class="mb-10 md:mb-0 lg:mb-10 relative flex flex-row items-center justify-between lg:justify-center z-20 w-[97%] md:w-[95%] lg:w-fit translate-x-0 lg:translate-x-[4rem] xl:translate-x-[0rem]">
                <div
                    class="text-white relative text-[14px] md:text-[16px] flex flex-col roboto font-[400] self-center md:self-end lg:self-start">
                    <img src="{{ asset('Asset/image/section_05/get in touch.png') }}" alt=""
                        class="h-5 md:h-7 w-32 md:w-52 fade duration-1000">
                    <p class="text-wrap md:text-nowrap w-full mt-2 fade duration-1000 relatieve z-30">Let us know how can we help you.</p>
                    <div class="absolute h-[30rem] w-[40rem] z-30 left-0 translate-x-[-8rem] bottom-0 translate-y-[6rem] hidden lg:block">
                        <img src="{{ asset('Asset/image/section_05/Comet_01.png') }}" alt=""
                            class="w-[65%] h-full object-contain ml-[-2rem] xl:ml-[0rem] mt-[2rem] xl:mt-0 object-right absolute bottom-[-75%] left-[-8%] xl:left-[3rem] scale1 duration-1000 z-20">
                    </div>
                </div>
                <img src="{{ asset('Asset/image/section_05/Comet_02.png') }}" alt=""
                    class="object-cover block lg:hidden h-36 md:h-96 object-left scale1 duration-1000">
                <img src="{{ asset('Asset/image/Light/1_1.png') }}" alt=""
                    class="absolute right-0 md:right-[40%] top-[-4rem] md:top-[85%] w-7 md:w-12 block lg:hidden scale1 duration-1000 delay-[0.8s]">
                <img src="{{ asset('Asset/image/Light/1_2.png') }}" alt=""
                    class="absolute left-0 md:left-[95%] top-[-4rem] md:top-[10%] w-5 md:w-7 block lg:hidden scale1 duration-1000 delay-[0.8s]">
                <img src="{{ asset('Asset/image/Light/1_3.png') }}" alt=""
                    class="absolute right-[10rem] md:right-[83%] bottom-[-2rem] md:bottom-[20%] w-12 md:w-28 block lg:hidden scale1 duration-1000 delay-[0.8s]">
            </div>
            <img src="{{ asset('Asset/image/Light/1_4.png') }}" alt=""
                class="absolute right-[-5%] xl:right-0 top-[10%] xl:top-0 w-8 xl:w-12 hidden lg:block scale1 duration-1000 delay-[0.8s]">
            <img src="{{ asset('Asset/image/Light/1_2.png') }}" alt=""
                class="absolute right-0 w-16 xl:w-14 bottom-40 hidden lg:block scale1 duration-1000 delay-[0.8s]">
            <img src="{{ asset('Asset/image/Light/1_3.png') }}" alt=""
                class="absolute right-[5%] xl:right-[30%] bottom-20 w-32 hidden lg:block scale1 duration-1000 delay-[0.8s]">
        </div>
        <div id="status" class="absolute top-0 w-full h-full"></div>
        @include('component.loadAnimation')
    </div>
</section>