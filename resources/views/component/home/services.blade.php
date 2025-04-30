<section id="services" class="flex flex-col justify-center items-center relative w-full h-full bg-[#0a0a0a] text-[#e4e4e4bd] pb-14 overflow-hidden">
    <div class="bg-section_3 bg-no-repeat bg-cover bg-top absolute top-0 left-0 rotate-[180deg] w-full h-full z-20"></div>
    <div class="absolute top-0 left-0 w-full h-full bg-[#000000] bg-opacity-65 z-20"></div>
    <div class="flex justify-center z-30 items-center flex-wrap xl:flex-nowrap mt-14 gap-5 mx-10 md:mx-40 max-w-7xl">
        <button type="button" id="openModalPhoto" data-aos="zoom-out-right" data-aos-duration="1000" class="relative w-full lg:w-[90%] xl:w-full h-72 md:h-96 overflow-hidden group">
            <img id="servepPhoto1" src="{{asset('Asset/image/section_04/photography.jpg')}}" alt="Photography" class="w-full xl:w-[35rem] h-full transition-transform duration-500 ease-in-out transform group-hover:scale-125 rounded-lg">
            <div class="absolute bottom-0 right-0 p-2 md:p-5 flex flex-col gap-2 z-30 bg-gradient-to-b from-[#6f1e83] via-[#6f1e83e1] to-[#6f1e83] rounded-tl-full">
                <span id="servePhoto" class="text-[18px] md:text-[20px] lg:text-[24px] font-[900] uppercase">vibrant photos</span>
            </div>
        </button>
        <button type="button" id="openModalVideo" data-aos="zoom-out-down" data-aos-duration="1000" class="transition-all relative w-full lg:w-[90%] xl:w-full h-72 md:h-96 overflow-hidden group">
            <img id="servepPhoto2" src="{{asset('Asset/image/section_04/videography.jpg')}}" alt="Videography" class="w-full xl:w-[35rem] h-full transition-transform duration-500 ease-in-out transform group-hover:scale-125 rounded-lg">
            <div class="absolute bottom-0 right-0 p-2 md:p-5 flex flex-col gap-2 z-30 bg-gradient-to-b from-[#6f1e83] via-[#6f1e83e1] to-[#6f1e83] rounded-tl-full">
                <span id="serveVideo" class="text-[18px] md:text-[20px] lg:text-[24px] font-[900] uppercase">engaging videos</span>
            </div>
        </button>
        <button type="button" id="openModalAudio" data-aos="zoom-out-up" data-aos-duration="1000" class="transition-all relative w-full lg:w-[90%] xl:w-full h-72 md:h-96 overflow-hidden group">
            <img id="servepPhoto3" src="{{asset('Asset/image/section_04/audio.jpg')}}" alt="Audio" class="w-full xl:w-[35rem] h-full transition-transform duration-500 ease-in-out transform group-hover:scale-125 rounded-lg">
            <div class="absolute bottom-0 right-0 p-2 md:p-5 flex flex-col gap-2 z-30 bg-gradient-to-b from-[#6f1e83] via-[#6f1e83e1] to-[#6f1e83] rounded-tl-full">
                <span id="serveAudio" class="text-[18px] md:text-[20px] lg:text-[24px] font-[900] uppercase">immersive audio</span>
            </div>
        </button>
    </div>
    <div class="relative z-30 flex flex-col lg:flex-row justify-center mt-20 mx-10 md:mx-40 max-w-7xl">
        <div class="mx-auto flex flex-col items-center xl:items-start gap-5 leading-relaxed text-[16px] lg:text-[18px] text-center xl:text-left">
            <h1 id="serveTitle" data-aos="slide-up" data-aos-duration="700" class="tracking-widest text-[32px] lg:text-[44px] font-[900] text-[#E4E4E4] uppercase">S<span class="text-[#6f1e83]">e</span>rv<span class="text-[#6f1e83]">i</span>ce<span class="text-[#6f1e83]">s</span></h1>
            <div data-aos="slide-left" data-aos-duration="1000" class="xl:mx-0 mx-auto text-[#e4e4e4bd]">
                <p id="serveText">Our multimedia services blend state-of-the-art technology and artistic expertise, bringing stories to life across vibrant photos, engaging videos, and immersive audio. let us tailor a captivating digital narrative for you, anhanced with stunning visuals that elevate your message to new heights.</p>
            </div>
        </div>
    </div>
</section>
<section class="flex items-center justify-center pt-14 bg-[#0a0a0a] text-white p-6">
    <div class="w-full max-w-4xl text-center flex justify-center flex-col items-center overflow-hidden">
        <div class="p-5 flex gap-2 flex-col">
            <h2 data-aos="fade-right" data-aos-duration="1500" class="tracking-widest text-[32px] lg:text-[44px] font-[900] uppercase" id="studTitle">Studio Pricing</h2>
            <p data-aos="fade-left" data-aos-duration="1000" class="text-[#e4e4e4bd] text-[14px] lg:text-[16px]" id="studText">Booking and usage policies</p>
        </div>
        <div class="flex lg:flex-row flex-col justify-center gap-6">
            <!-- Hourly Rates Card -->
            <div data-aos="flip-left" data-aos-duration="1000" class="relative bg-[#1A1A1A] p-6 rounded-xl shadow-lg hover:scale-105 hover:shadow-2xl transition-all duration-300 w-full max-w-5xl mt-5 overflow-hidden">
                <img src="{{asset('Asset/image/section_04/hourly')}}" alt="Hourly Rate" id="hourlyRate" class="w-full h-full object-fill">
            </div>
            <!-- Full-Day Rental Package Card -->
            <div data-aos="flip-right" data-aos-duration="1000" class="relative bg-[#1A1A1A] p-6 rounded-xl shadow-lg hover:scale-105 hover:shadow-2xl transition-all duration-300 w-full max-w-5xl text-left mt-5 overflow-hidden">
                <img src="{{asset('Asset/image/section_04/fullday.png')}}" alt="Rental Package" id="rentalPackage" class="w-full h-full object-fill">
            </div>
        </div>  
        <div data-aos="fade-up" data-aos-duration="1000" class="flex flex-col justify-center items-center p-5 space-y-4 mt-5">
            <button id="theme-toggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-200 text-gray-800 dark:text-[#6f1e83e1] transition-all">
                <svg id="moon-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-7.364l-1.414 1.414M6.05 17.95l-1.414 1.414m12.728 0l-1.414-1.414M6.05 6.05L4.636 4.636"></path></svg>
                <svg id="sun-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-7.364l-1.414 1.414M6.05 17.95l-1.414 1.414m12.728 0l-1.414-1.414M6.05 6.05L4.636 4.636M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            </button>
            <a href="#contact" class="p-4 px-10 text-white rounded-lg shadow-md bg-[#6f1e83] hover:bg-[#6f1e83e1] transition-all">Call Now</a>
        </div>      
    </div>
</section>
<section class="flex flex-col items-center justify-center pb-20 bg-[#0a0a0a] text-white text-[32px] lg:text-[44px] font-[900] uppercase tracking-widest">
    <div class="w-[90%] lg:w-[80%] max-w-6xl flex flex-col lg:flex-row items-center justify-center gap-5 pb-10 pt-5 overflow-hidden">
        <div class="w-full text-center">
            <h2 data-aos="slide-right" data-aos-delay="0" data-aos-duration="1000" class="p-3" id="servesec3_title1">Brochure</h2>
            <iframe data-aos="flip-left" data-aos-duration="1000"
            src="https://www.canva.com/design/DAGfjhPZs2c/hLJco0hf8X4OXZBPU1--Cg/view?embed" 
            width="100%" 
            height="600px" 
            class="rounded-lg shadow-lg"
            id="servesec3_iframe1"
        ></iframe>
        </div>
        <div class="w-full text-center">
            <h2 data-aos="slide-left" data-aos-delay="500" data-aos-duration="1000" class="p-3" id="servesec3_title2">Poster</h2>
            <iframe data-aos="flip-right" data-aos-duration="1000" data-aos-delay="500"
            src="https://www.canva.com/design/DAGhZ1f4J-4/W-OvHHogVtGJ42U4xNOSrg/view?embed" 
            width="100%" 
            height="600px" 
            class="rounded-lg shadow-lg"
            id="servesec3_iframe2"
        ></iframe>
        </div>
    </div>
</section>
<!-- Modal Container -->
<div id="photopricingModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50" style="display: none;">
    <div class="bg-[#1A1A1A] p-8 rounded-2xl shadow-2xl w-full max-w-lg relative text-white">
        <button id="closePhotoModal" class="absolute top-4 right-4 text-3xl font-bold text-gray-400 hover:text-gray-200">&times;</button>
        
        <h2 class="text-3xl font-extrabold text-center mb-8 tracking-wide">Immersive Photography</h2>
        
        <div class="space-y-6">
            <!-- AUDIO ONLY -->
            <div class="p-5 bg-[#2A2A2A] rounded-xl shadow-md">
                <h3 class="text-xl font-semibold text-[#EECEB9] mb-2">AUDIO ONLY</h3>
                <p class="text-lg">₱2,000.00 <span class="text-gray-400">Per Hour</span></p>
                <p class="text-lg">₱1,000.00 <span class="text-gray-400">Per Succeeding Hour</span></p>
            </div>
            
            <!-- AUDIO + OUTPUT -->
            <div class="p-5 bg-[#2A2A2A] rounded-xl shadow-md">
                <h3 class="text-xl font-semibold text-[#EECEB9] mb-2">AUDIO + OUTPUT (MASTERED)</h3>
                <p class="text-lg">₱2,000.00 <span class="text-gray-400">For The First Hour</span></p>
                <p class="text-lg">₱1,500.00 <span class="text-gray-400">Per Succeeding Hour</span></p>
                <p class="text-sm text-gray-400 mt-2">Output will be delivered within 10 working days.</p>
            </div>
            
            <!-- AUDIO ROOM -->
            <div class="p-5 bg-[#2A2A2A] rounded-xl shadow-md">
                <h3 class="text-xl font-semibold text-[#EECEB9] mb-2">AUDIO ROOM</h3>
                <p class="text-lg">Practice: ₱500.00 <span class="text-gray-400">Per Hour</span></p>
                <p class="text-lg">Rehearsal: ₱500.00 <span class="text-gray-400">Per Hour</span></p>
            </div>
        </div>
        <div>
            <a href="https://www.facebook.com/share/p/1ECs48MpsU/" target="_blank" class="block mt-8 text-center text-[#EECEB9] bg-[#6f1e83] p-3 font-semibold hover:underline uppercase text-lg">View Sample Project</a>
        </div>
    </div>
</div>
<!-- Modal Container -->
<div id="audiopricingModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50" style="display: none;">
    <div class="bg-[#1A1A1A] p-8 rounded-2xl shadow-2xl w-full max-w-lg relative text-white">
        <button id="closeModal" class="absolute top-4 right-4 text-3xl font-bold text-gray-400 hover:text-gray-200">&times;</button>
        
        <h2 class="text-3xl font-extrabold text-center mb-8 tracking-wide">Immersive Audio</h2>
        
        <div class="space-y-6">
            <!-- AUDIO ONLY -->
            <div class="p-5 bg-[#2A2A2A] rounded-xl shadow-md">
                <h3 class="text-xl font-semibold text-[#EECEB9] mb-2">AUDIO ONLY</h3>
                <p class="text-lg">₱2,000.00 <span class="text-gray-400">Per Hour</span></p>
                <p class="text-lg">₱1,000.00 <span class="text-gray-400">Per Succeeding Hour</span></p>
            </div>
            
            <!-- AUDIO + OUTPUT -->
            <div class="p-5 bg-[#2A2A2A] rounded-xl shadow-md">
                <h3 class="text-xl font-semibold text-[#EECEB9] mb-2">AUDIO + OUTPUT (MASTERED)</h3>
                <p class="text-lg">₱2,000.00 <span class="text-gray-400">For The First Hour</span></p>
                <p class="text-lg">₱1,500.00 <span class="text-gray-400">Per Succeeding Hour</span></p>
                <p class="text-sm text-gray-400 mt-2">Output will be delivered within 10 working days.</p>
            </div>
            
            <!-- AUDIO ROOM -->
            <div class="p-5 bg-[#2A2A2A] rounded-xl shadow-md">
                <h3 class="text-xl font-semibold text-[#EECEB9] mb-2">AUDIO ROOM</h3>
                <p class="text-lg">Practice: ₱500.00 <span class="text-gray-400">Per Hour</span></p>
                <p class="text-lg">Rehearsal: ₱500.00 <span class="text-gray-400">Per Hour</span></p>
            </div>
        </div>
        <div>
            <a href="#" class="block mt-8 text-center text-[#EECEB9] bg-[#6f1e83] p-3 font-semibold hover:underline uppercase text-lg">View Sample Project</a>
        </div>
    </div>
</div>
<!-- Modal Container -->
<div id="videoPricingModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50" style="display: none;">
    <div class="bg-[#1A1A1A] p-8 rounded-2xl shadow-2xl w-full max-w-lg relative text-white">
        <button id="closeVideoModal" class="absolute top-4 right-4 text-3xl font-bold text-gray-400 hover:text-gray-200">&times;</button>
        
        <h2 class="text-3xl font-extrabold text-center mb-8 tracking-wide">Music Video</h2>
        
        <div class="space-y-6">
            <!-- MUSIC VIDEO -->
            <div class="p-5 bg-[#2A2A2A] rounded-xl shadow-md">
                <h3 class="text-xl font-semibold text-[#EECEB9] mb-2">MUSIC VIDEO</h3>
                <p class="text-lg">Starts at ₱25,000.00 <span class="text-gray-400">Per Day (8 hours)</span></p>
                <p class="text-lg">₱1,500.00 <span class="text-gray-400">Per Succeeding Hour</span></p>
                <p class="text-sm text-gray-400 mt-3">Includes:</p>
                <ul class="list-disc list-inside text-gray-300 text-lg ml-4">
                    <li>1 Videographer</li>
                    <li>1 Assistant</li>
                    <li>Drone 4K</li>
                    <li>HD Camera 4K</li>
                </ul>
                <p class="text-sm text-gray-400 mt-3">Final output: 1 music video delivered after 10 working days.</p>
            </div>
        </div>
        <div>
            <a href="https://art.beetzee.com/live-music/" class="block mt-8 p-3 text-center text-[#EECEB9] bg-[#6f1e83] font-semibold hover:underline uppercase text-lg">View Sample Project</a>
        </div>
    </div>
</div>