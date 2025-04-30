//Burger Menu
$(document).ready(function () {
    $('#home_burger').on('click', function (e) {
        e.stopPropagation();
        $('#home_menu').slideToggle();
    });
});
$(document).ready(function() {
    // Close on click
    $('.close-modal').on('click', function() {
        statusModal.fadeOut(500);
    });
    const statusModal = $('#statusModal');
    statusModal.removeClass('pointer-events-none hidden');

    // Auto-hide after 6 seconds
    setTimeout(function() {
        statusModal.fadeOut(500);
    }, 5000);
});

//Greet User (Banner)
$(document).ready(function() {
    $('#appearGreet').removeClass('hidden').hide().fadeIn(1000).slideDown(1000);
    setTimeout(function() {
        $('#appearGreet').slideUp(500, function() {
            $(this).addClass('hidden');
        });
    }, 4000);
});

//Banner Typing animation
$(document).ready(function () {
    const typingElement = $("#typingSpan");
    let typingText = [];
    let textIndex = 0;
    let charIndex = 0;
    let deleting = false;

    fetch("WebJSON/Banner/banner.json")
        .then(response => response.json())
        .then(json => {
            typingText = [
                `<span class="text-[#e4e4e4]">${json.title1}</span>`,
                `<span class="glow">${json.title2}</span>`,
                `<span class="text-[#e4e4e4]">${json.title3}</span>`
            ];
            $('.banner_description').html(json.ban_description);
            $('#banner').css('background-image', `url('../WebJSON/Banner/web_images/${json.image.split('/').pop()}')`);
            $('.bg-section_2').css('background-image', `url('../WebJSON/Banner/web_images/${json.bansec2_image.split('/').pop()}')`);
            $('.learnmoreTitle').text(json.bansec2_title).css('color', '#e4e4e4');
            $('.learnMore').html(json.bansec2_description);
            typeEffect();
        })
        .catch(error => console.error("Error fetching JSON:", error));

    function typeEffect() {
        if (typingText.length === 0) return;

        let fullText = typingText[textIndex];
        let tempDiv = $("<div>").html(fullText);
        let plainText = tempDiv.text();

        if (!deleting) {
            charIndex++;
            typingElement.css("opacity", Math.min(1, charIndex / plainText.length));
            if (charIndex > plainText.length) {
                deleting = true;
                setTimeout(typeEffect, 2500);
                return;
            }
        } else {
            charIndex--;
            typingElement.css("opacity", Math.max(0, charIndex / plainText.length));
            if (charIndex === 0) {
                deleting = false;
                textIndex = (textIndex + 1) % typingText.length;
            }
        }

        let typedPart = plainText.substring(0, charIndex);
        let updatedText = fullText.replace(plainText, typedPart);

        typingElement.html(updatedText);
        setTimeout(typeEffect, deleting ? 150 : 150);
    }
});

//Services API
$(document).ready(function () {
    fetch("WebJSON/Services/services.json")
        .then(response => response.json())
        .then(json => {
            $('#serveTitle').text(json.service_title);
            $('#serveText').text(json.service_description);
            $('#servePhoto').text(json.serve_text1);
            $('#serveVideo').text(json.serve_text2);
            $('#serveAudio').text(json.serve_text3);
            $('#studTitle').text(json.servesec2_title);
            $('#studText').text(json.servesub_title);
            $('#servesec3_title1').text(json.servesec3_title1);
            $('#servesec3_title2').text(json.servesec3_title2);
            $('#servesec3_iframe1').attr('src', json.servesec3_src1);
            $('#servesec3_iframe2').attr('src', json.servesec3_src2);
            
            // Update image sources dynamically
            if (json.service_images.serve_img1) {
                $('#servepPhoto1').attr('src', '../' + json.service_images.serve_img1);
            }
            if (json.service_images.serve_img2) {
                $('#servepPhoto2').attr('src', '../' + json.service_images.serve_img2);
            }
            if (json.service_images.serve_img3) {
                $('#servepPhoto3').attr('src', '../' + json.service_images.serve_img3);
            }
            if (json.service_images.serve_img3) {
                $('#servepPhoto3').attr('src', '../' + json.service_images.serve_img3);
            }
            if (json.price_img1) {
                $('#hourlyRate').attr('src', '../' + json.price_img1);
            }
            if (json.price_img2) {
                $('#rentalPackage').attr('src', '../' + json.price_img2);
            }

        })
        .catch(error => console.error("Error fetching JSON:", error));
});

//About Us API
$(document).ready(function () {
    fetch("WebJSON/About/about.json")
        .then(response => response.json())
        .then(json => {
            $('#aboutus_title').text(json.aboutus_title);
            $('#aboutus_description').text(json.aboutus_description);
            $('.aboutcontent1_title1').text(json.aboutcontent1_title1);
            $('.content1_description1').text(json.content1_description1);
            $('#aboutcontent2_title2').text(json.aboutcontent2_title2);
            $('#content2_description2').text(json.content2_description2);
            $('#aboutcontent3_title3').text(json.aboutcontent3_title3);
            $('#content3_description3').text(json.content3_description3);
            $('#about').css('background-image', `url('../WebJSON/about/web_images/${json.service_images.aboutus_bg.split('/').pop()}')`);
            $('#aboutcontent1_img1').attr('src', '../' + json.service_images.aboutcontent1_img1);
            $('#content2_img2').attr('src', '../' + json.service_images.content2_img2);
            $('#content3_img3').attr('src', '../' + json.service_images.content3_img3);
        })
        .catch(error => console.error("Error fetching JSON:", error));
});

//Milestone API
$(document).ready(function (){
    fetch("WebJSON/Milestones/milestone.json")
    .then(response => response.json())
    .then(json => {
        $('#milestone_title').text(json.milestone_title);
        $('.milestone_bg').css('background-image', `url('../WebJSON/Milestones/web_images/${json.milestone_bg.split('/').pop()}')`);
        $('#bullet1').attr('src', '../' + json.bullet1);
        $('#bullet2').attr('src', '../' + json.bullet2);
        $('#bullet3').attr('src', '../' + json.bullet3);
        $('#bullet4').attr('src', '../' + json.bullet4);
        $('#bullet5').attr('src', '../' + json.bullet5);
        $('#bullet6').attr('src', '../' + json.bullet6);
        $('#bullet7').attr('src', '../' + json.bullet7);
        $('#bullet8').attr('src', '../' + json.bullet8);
        $('#mile_img1').attr('src', '../' + json.mile_img1);
        $('.mile_img2').attr('src', '../' + json.mile_img2);
        $('.mile_img3').attr('src', '../' + json.mile_img3);
        $('.mile_img4').attr('src', '../' + json.mile_img4);
        $('.mile_img5').attr('src', '../' + json.mile_img5);
        $('.mile_img6').attr('src', '../' + json.mile_img6);
        $('.mile_img7').attr('src', '../' + json.mile_img7);
        $('.mile_img8').attr('src', '../' + json.mile_img8);
        $('#desc1').text(json.desc1);
        $('#desc2').text(json.desc2);
        $('#desc3').text(json.desc3);
        $('#desc4').text(json.desc4);
        $('#desc5').text(json.desc5);
        $('#desc6').text(json.desc6);
        $('#desc7').text(json.desc7);
        $('#desc8').text(json.desc8);
    })
    .catch(error => {
        console.error("Error fetching JSON:", error);
    });
});

//Contact Us API
$(document).ready(function () {
    fetch("WebJSON/Contact/contact.json")
        .then(response => response.json())
        .then(json => {
            $('#contact').css('background-image', `url('../WebJSON/Contact/web_images/${json.image.split('/').pop()}')`);
        })
        .catch(error => console.error("Error fetching JSON:", error));
});
//Pay Admin panel
$(document).ready(function () {
    $('.pay').on('click', function () {
        var id = $(this).data('id');
        $('#user_id').val(id);
        $('#payment_div').slideDown().fadeIn();
    });
    $('.cancel_pay').on('click', function () {
        $('#payment_div').slideUp().fadeOut();
    });
});

//Login Form
$(document).ready(function () {
    $('.register').on('click', function (e){
        e.stopPropagation();
        var form = $('#register_div');
        if(form.css('display') == 'none') {
            form.slideDown().fadeIn();
        }else{
            form.slideUp().fadeOut();
        }
    });
    $(document).on('click', function (e) {
        if (!$(e.target).closest('#register_form').length) {
            $('#register_div').slideUp().fadeOut();
        }
    })
    $('#register_back').on('click', function (e){
        e.stopPropagation();
        $('#register_div').slideUp().fadeOut();
    })
});

// Registration
$(document).ready(function () {
    $('#generate_password').on('click', function () {
        var password = Math.random().toString(20).slice(-8);
        $('#password').val(password);
    });
});
$(document).ready(function () {
    $('.InsertDiscount').on('click', function (e) {
        e.stopPropagation();
        var form = $('#divtoInsert');
        if(form.css('display') == 'none') {
            form.slideDown().fadeIn();
        }else{
            form.slideUp().fadeOut();
        }
    });
    $('.closediscountInsert').on('click', function () {
        $('#divtoInsert').slideToggle().fadeOut();
    })
});
$(document).ready(function () {
    $('.edit_discount').on('click', function (e) {
        e.stopPropagation();
        let discountID = $(this).data('id');
        $('.discount_id').val(discountID);
        $('.edit_discount_div').slideToggle().fadeIn();
    });
    $('.closediscountEdit').on('click', function () {
        $('.edit_discount_div').slideToggle().fadeOut();
    })
});
$(document).ready(function () {
    $('.delete_discount').on('click', function (e) {
        e.stopPropagation();
        let discountID = $(this).data('id');
        $('.discount_id').val(discountID);
        $('.delete_discount_div').slideToggle().fadeIn();
    });
    $('.closediscountdelete').on('click', function () {
        $('.delete_discount_div').slideToggle().fadeOut();
    })
});
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#register').on('click', function () {
        const fname = $('#fname').val();
        const lname = $('#lname').val();
        const email = $('#reg_email').val();
        const agreement = $('#reg_agree').is(':checked') ? 'yes' : 'no';
        const password = $('#reg_password').val();

        if(fname == '' || lname == '' || email == '' || password == '') {
            alert('Please fill all the fields');
        } else {
            $.ajax({
                url: '/register',
                method: 'POST',
                data: {
                    agreement: agreement,
                    fname: fname,
                    lname: lname,
                    email: email,
                    password: password,
                },
                success: function (response) {
                    console.log(response);
                    $('.register_success').text(response).slideDown();
                    setTimeout(() => {
                        $('.register_success').text(response).slideUp();
                    }, 3000);
                },
                error: function (xhr, status, error) {
                    console.log(error);
                    $('.register_error').text('Double check your information and try again.').slideDown();
                    setTimeout(() => {
                        $('.register_error').text('Double check your information and try again.').slideUp();
                    }, 3000);
                }
            });
        }
    });
});
//Header Fade animation
$(document).ready(function() {
    var prevScrollpos = $(window).scrollTop();

    $(window).scroll(function() {
        var currentScrollPos = $(window).scrollTop();

        if (prevScrollpos < currentScrollPos) {
            $("#header").css("top", "-100px");
            $("#menu_burger").slideUp();
        }else if(currentScrollPos <= 0){
            $("#header").css({
                "backgroundColor": "transparent",
            });
        }
        else {
            $("#header").css("top", "0");
            $("#header").css({
                "backgroundColor": "#16171a",
            });
        }

        prevScrollpos = currentScrollPos;
    });
});
//Navigation
$(document).ready(function () {
    $('#member_burger').on('click', function () {
        $('#member_menu').slideToggle();
    });
    $('#TRANSACTIONLINK, .TRANSACTION').on('click', function () {
        $('#PROFILE').hide();
        $('.section_02').hide();
        $('.discountDIV').hide();
        $('#REGISTER').hide();
        $('#ACCOUNTS').hide();
        $('#web_content').hide();
        $('.section_03').show();
    });
    $('#CONTENTLINK, .CONTENT').on('click', function () {
        $('#PROFILE').hide();
        $('.section_02').hide();
        $('.discountDIV').hide();
        $('#REGISTER').hide();
        $('#ACCOUNTS').hide();
        $('.section_03').hide();
        $('#web_content').show();
    });
    $('#TRACKLINK, .TRACK').on('click', function () {
        $('#PROFILE').hide();
        $('#REGISTER').hide();
        $('#section_03').hide();
        $('.discountDIV').hide();
        $('#web_content').hide();
        $('#ACCOUNTS').show();
    });
    $('#ACCOUNTLINK, .ACCOUNT').on('click', function () {
        $('#REGISTER').show();
        $('#ACCOUNTS').hide();
        $('#section_03').hide();
        $('.discountDIV').hide();
        $('#web_content').hide();
        $('#PROFILE').hide();
    });
    $('#PROFILELINK, .PROFILE').on('click', function () {
        $('.section_02').hide();
        $('.discountDIV').hide();
        $('#REGISTER').hide();
        $('#ACCOUNTS').hide();
        $('#web_content').hide();
        $('#PROFILE').show();
        $('.section_03').hide();
    });
    $('#MEMBER_DASHBOARD').on('click', function () {
        $('.section_02').show();
        $('.discountDIV').hide();
        $('#PROFILE').hide();
        $('#section_03').hide();
        $('.section_03').hide();
    });
    $('.DISCOUNT').on('click', function () {
        $('.section_02').hide();
        $('.discountDIV').show();
        $('#REGISTER').hide();
        $('#ACCOUNTS').hide();
        $('#web_content').hide();
        $('#PROFILE').hide();
        $('.section_03').hide();
    });
    $('#SEARCH').on('click', function () {
        $('#searchDiv').slideToggle();
    });
    $('#edit_profile').on('click', function(e){
        e.stopPropagation();
        $('#edit_div').fadeOut().slideDown(600);
    });
    $('.cancel_edit').on('click', function(){
        $('#edit_div').fadeIn().slideUp(600);
    });

    $(document).on('click', function (e) {
        if (!$(e.target).closest('.form_edit').length) {
            $('#edit_div').slideUp().fadeOut();
        }
    })
    function Search(input, element) {
        var inputField = input.val().toLowerCase();
        element.each(function () {
            if ($(this).text().toLowerCase().indexOf(inputField) > -1) {
                $(this).css("transform", "translateX(0)");
                $(this).fadeIn(300);
            } else {
                $(this).css("transform", "translateX(-100%)");
                $(this).fadeOut(300);
            }
        });
    }

    $("#search_acc").on("keyup", function () {
        Search($(this), $(".members"));
    });
    $("#search_trans").on("keyup", function () {
        Search($(this), $(".trans"));
    });
});


//Home Page Animation
$(document).ready(function () {
    const right = $('#next');
    const left = $('#prev');
    const slides = $('.show_slides > a');
    let autoslider;
    let index = 0;
    let delay = 400;

    function autoslideshow(){
        autoslider = setInterval(() => {
            index = (index + 1) % slides.length;
            SlideShow();
        }, 4000);
    }
    $('.slider').hover(function () {
        clearInterval(autoslider);
    }, function () {
        autoslideshow();
    });
    function SlideShow() {
        slides.hide().eq(index).fadeIn(delay);
    };
    right.click(() => {
        index = (index + 1) % slides.length;
        SlideShow(index);
    });
    left.click(() => {
        index = (index - 1 + slides.length) % slides.length;
        SlideShow(index);
    })
});
//Orbit and Planet animation section 2_2
$(document).ready(function () {
    const planets = $(".small_planets .tab");

    planets.on("click", function () {
        const index = $(this).index();
        planets.removeClass('scale-up');
        $(this).toggleClass('scale-up');
        $('.tab span').fadeOut();
        $('.tab .year').fadeOut();
        $('.tab span').eq(index).fadeIn();
        $('.tab .year').eq(index).fadeIn();
        switch (index) {
            case 7:
                $('.small_planets').css('transform', 'translateX(0%)');
                break;
            case 6:
                $('.small_planets').css('transform', 'translateX(15%)');
                break;
            case 5:
                $('.small_planets').css('transform', 'translateX(25%)');
                break;
            case 4:
                $('.small_planets').css('transform', 'translateX(35%)');
                break;
            case 3:
                $('.small_planets').css('transform', 'translateX(45%)');
                break;
            case 2:
                $('.small_planets').css('transform', 'translateX(55%)');
                break;
            case 1:
                $('.small_planets').css('transform', 'translateX(65%)');
                break;
            case 0:
                $('.small_planets').css('transform', 'translateX(65%)');
                break;
            default:
                break;
        }
        // Apply rotation for all orbits based on the clicked index
        switch (index) {
            case 0:
                $('.orbit1').css('transform', 'rotate(620deg)');
                $('.orbit2').css('transform', 'rotate(1120deg)');
                $('.orbit3').css('transform', 'rotate(920deg)');
                $('.orbit4').css('transform', 'rotate(1020deg)');
                $('.c2014').removeClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 1:
                $('.orbit1').css('transform', 'rotate(540deg)');
                $('.orbit2').css('transform', 'rotate(970deg)');
                $('.orbit3').css('transform', 'rotate(740deg)');
                $('.orbit4').css('transform', 'rotate(880deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').removeClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 2:
                $('.orbit1').css('transform', 'rotate(460deg)');
                $('.orbit2').css('transform', 'rotate(820deg)');
                $('.orbit3').css('transform', 'rotate(560deg)');
                $('.orbit4').css('transform', 'rotate(740deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').removeClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 3:
                $('.orbit1').css('transform', 'rotate(380deg)');
                $('.orbit2').css('transform', 'rotate(670deg)');
                $('.orbit3').css('transform', 'rotate(480deg)');
                $('.orbit4').css('transform', 'rotate(580deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').removeClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 4:
                $('.orbit1').css('transform', 'rotate(300deg)');
                $('.orbit2').css('transform', 'rotate(520deg)');
                $('.orbit3').css('transform', 'rotate(380deg)');
                $('.orbit4').css('transform', 'rotate(420deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').removeClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 5:
                $('.orbit1').css('transform', 'rotate(220deg)');
                $('.orbit2').css('transform', 'rotate(370deg)');
                $('.orbit3').css('transform', 'rotate(280deg)');
                $('.orbit4').css('transform', 'rotate(290deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').removeClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 6:
                $('.orbit1').css('transform', 'rotate(140deg)');
                $('.orbit2').css('transform', 'rotate(220deg)');
                $('.orbit3').css('transform', 'rotate(140deg)');
                $('.orbit4').css('transform', 'rotate(260deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').removeClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 7:
                $('.orbit1').css('transform', 'rotate(60deg)');
                $('.orbit2').css('transform', 'rotate(70deg)');
                $('.orbit3').css('transform', 'rotate(30deg)');
                $('.orbit4').css('transform', 'rotate(80deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').removeClass('hidden');
                break;
            default:
                $('.orbit1, .orbit2, .orbit3, .orbit4').css('transform', 'rotate(0deg)');
            break;
        }
    });
});

//Services Page
$(document).ready(function() {
    $('#openModalAudio').on('click', function(e) {
        e.stopPropagation();
        $('#audiopricingModal').fadeIn(500);
    });
    $('#closeModal').on('click', function(e) {
        e.stopPropagation();
        $('#audiopricingModal').fadeOut(500);
    });

    $('#openModalVideo').on('click', function(e) {
        e.stopPropagation();
        $('#videoPricingModal').fadeIn(500);
    });
    $('#closeVideoModal').on('click', function(e) {
        e.stopPropagation();
        $('#videoPricingModal').fadeOut(500);
    });

    $('#openModalPhoto').on('click', function(e) {
        e.stopPropagation();
        $('#photopricingModal').fadeIn(500);
    });
    $('#closePhotoModal').on('click', function(e) {
        e.stopPropagation();
        $('#photopricingModal').fadeOut(500);
    });
});

// Contact Page
$(document).ready(function () {
    $("#btn_send").click(function (e) {
        // Show success modal
        $('body').on('click', '.close-modal', function() {
            $('#statusModal').remove();
        });

        // Send AJAX to the controller
        var name = $("#name").val();
        var organization = $("#organization").val();
        var inquiry = $("#inquiry").val();
        var email = $("#contact_email").val();
        var number = $("#number").val();
        var message = $("#message").val();

        // Form validation
        $('#contact_msg').empty();
        $("#status").empty();
        if (
            name == "" ||
            inquiry == "" ||
            email == "" ||
            message == ""
        ) {
            e.preventDefault();
            $('#contact_msg').append(`
               <span class="error-message duration-500 ease-linear shadow-lg shadow-red-600 roboto">Please fill out the form below!</span>
            `);
        } else {
            var data = {
                name: name,
                organization: organization,
                inquiry: inquiry,
                email: email,
                number: number,
                message: message,
            };

            // Make AJAX request
            var ContacatAJAX = $.ajax({
                type: "POST",
                url: "/contact/send",
                data: JSON.stringify(data),
                contentType: "application/json",
                dataType: "json",

                beforeSend: function() {
                    $('#contact_load').show();
                },

                success: function(response) {
                    $('#contact_load').hide();
                    var name = $("#name").val("");
                    var organization = $("#organization").val("");
                    var inquiry = $("#inquiry").val("");
                    var email = $("#contact_email").val("");
                    var number = $("#number").val("");
                    var message = $("#message").val("");
                    $("#status").append(
                        `
                        <div id="statusModal"
                            class="fixed top-0 left-0 w-full h-full bg-[#1A193D] bg-opacity-50 z-50 flex justify-center items-center">
                            <div class="bg-[#1A193D] rounded-3xl py-10 px-6 w-full max-w-md mx-4 lg:max-w-lg relative">
                                <div class="absolute top-4 right-6 cursor-pointer close-modal">
                                    <i class="fa-solid fa-xmark text-4xl"></i>
                                </div>
                                <div class="p-5 flex justify-center items-center relative">
                                    <img src="../Asset/image/section_05/success_message.png" alt="Success Image"
                                         class="max-w-full h-auto object-contain">
                                </div>
                                <div class="text-white font-semibold text-center">
                                    <h5 class="text-xl md:text-2xl lg:text-3xl mb-3">Thank you for messaging us!</h5>
                                    <p class="text-sm md:text-base lg:text-lg opacity-80">
                                        We have received your message! We will get back to you as soon as possible.
                                    </p>
                                </div>
                            </div>
                        </div>
                        `
                    );

                    setTimeout(function() {
                        $('#statusModal').fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },

                error: function(error) {
                    console.log(error);
                    $('#contact_load').hide();
                    $('#status').append(
                        `
                        <div id="statusModal"
                            class="fixed top-0 left-0 w-full h-full bg-[#1A193D] bg-opacity-50 z-50 flex justify-center items-center">
                            <div class="bg-[#1A193D] rounded-3xl py-10 px-6 w-full max-w-md mx-4 lg:max-w-lg relative">
                                <div class="absolute top-4 right-6 cursor-pointer close-modal">
                                    <i class="fa-solid fa-xmark text-4xl"></i>
                                </div>
                                <div class="p-5 flex justify-center items-center">
                                    <img src="../Asset/image/section_05/error_message.png" alt="Error Image"
                                        class="max-w-full h-auto object-contain">
                                </div>
                                <div class="text-white font-semibold text-center">
                                    <h5 class="text-xl md:text-2xl lg:text-3xl mb-3">Message couldn’t be sent...</h5>
                                    <p class="text-sm md:text-base lg:text-lg opacity-80">
                                        An error occurred while trying to send the message. Please try again.
                                    </p>
                                </div>
                            </div>
                        </div>
                        `
                    );
                    setTimeout(function() {
                        $('#statusModal').fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                complete: function() {
                    $('#contact_load').hide();
                }
            });
        }
    });
});

//Team Slider
$(document).ready(function () {
    const right = $('#slideRight');
    const left = $('#slideLeft');
    const slides = $('#team');
    let speed = 650;
    var scrollSpeed = 20;
    right.click(() => {
        slides.scrollLeft(slides.scrollLeft() + speed);
    });
    left.click(() => {
        slides.scrollLeft(slides.scrollLeft() - speed);
    });


    slides.append(slides.children().clone());
    function autoScroll() {
        slides.scrollLeft(slides.scrollLeft() + scrollSpeed);

        if (slides.scrollLeft() >= slides[0].scrollWidth / 2) {
            slides.scrollLeft(0);
        }
    }

    setInterval(autoScroll, 0.1);
});