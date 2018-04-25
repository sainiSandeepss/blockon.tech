


    // testing
    $(".we-build_trigger").click(function(){
        $(this).closest("#banner-chain").find(".active").removeClass("active");
        $(this).closest("#banner-chain").find(".we-build").addClass("active");
    });
    $(".we-research_trigger").click(function(){
        $(this).closest("#banner-chain").find(".active").removeClass("active");
        $(this).closest("#banner-chain").find(".we-research").addClass("active");
    });
    $(".we-advice_trigger").click(function(){
        $(this).closest("#banner-chain").find(".active").removeClass("active");
        $(this).closest("#banner-chain").find(".we-advice").addClass("active");
    });
    $(".we-train_trigger").click(function(){
       $(this).closest("#banner-chain").find(".active").removeClass("active");
        $(this).closest("#banner-chain").find(".we-train").addClass("active");
    });
    // Feature view js start 
    $(".simple_trigger").click(function(){
        $(this).closest(".feature-block").find(".active").removeClass("active");
        $(this).closest(".feature-block").find(".simple").addClass("active");
    });
    $(".safe_trigger").click(function(){
        $(this).closest(".feature-block").find(".active").removeClass("active");
        $(this).closest(".feature-block").find(".safe").addClass("active");
    });
    $(".buy_trigger").click(function(){
        $(this).closest(".feature-block").find(".active").removeClass("active");
        $(this).closest(".feature-block").find(".buy").addClass("active");
    });
    $(".sophist_trigger").click(function(){
        $(this).closest(".feature-block").find(".active").removeClass("active");
        $(this).closest(".feature-block").find(".sophist").addClass("active");
    });
    $(".global_trigger").click(function(){
        $(this).closest(".feature-block").find(".active").removeClass("active");
        $(this).closest(".feature-block").find(".global").addClass("active");
    });
    $(".support_trigger").click(function(){
        $(this).closest(".feature-block").find(".active").removeClass("active");
        $(this).closest(".feature-block").find(".support").addClass("active");
    });



    // NUmber counter js 
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    // aos plugin code
    AOS.init({
        easing: 'ease-in-out-sine'
    });




    // Service more show
    $(".rless").hide();
    $(".rmore").click(function(){
        $(this).closest(".service-detail").find(".default").hide();
        $(this).closest(".service-detail").find(".hide-txt").show();
        $(this).closest(".service-detail").find(".rless").show();
        $(this).closest(".service-detail").find(".rmore").hide();
    });

    $(".rless").click(function(){
        $(this).closest(".service-detail").find(".default").show();
        $(this).closest(".service-detail").find(".hide-txt").hide();
        $(this).closest(".service-detail").find(".rless").hide();
        $(this).closest(".service-detail").find(".rmore").show();
    });


    // Page link 
    $(".service-trigger").click(function(){
        $('html, body').animate({scrollTop: ($('.service-block').offset().top)},1000);
    });
    $(".about-trigger").click(function(){
        $('html, body').animate({scrollTop: ($('.intro-section').offset().top)},1000);
    }); 
    $(".contact-trigger").click(function(){
        $('html, body').animate({scrollTop: ($('.contact-section').offset().top)},1000);
    }); 