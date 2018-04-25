    <!-- Footer Start -->
    <footer>
        <div class="container">
            <div class="links">
                <a href="index.php">Home</a>
                <a href="about-us.php">About Us</a>
                <a href="our-products.php">Our Products</a>
                <a href="supplements.php">Supplements</a>
                <a href="contact-us.php">Contact Us</a>
            </div>
            <p>Life 247 is a one of the leading Online Pharmacy,<br/>which help you to buy hasselfree and affordable medication at your door step for no additional cost.</p>
        </div>
    </footer>
    <div class="copyright">
        <div class="container">
            <p>Copyright © 2018 Life-247. All Right Reserved.</p>
            <p><iframe type="text/html" src="http://www.iweblogix.com/demo/api/iweb/black-any.html" width="101" height="25" frameborder="0"></iframe></p>
        </div>
    </div>
    <!-- Copyright Start -->

    <!-- Copyright End -->

    <a href="javascript:" id="return-to-top"><img src="life247-img/arrow2.png"></a>

<!-- Java Script -->
<script type="text/javascript" src="directory/js/jquery.min.js"></script>
<script type="text/javascript" src="directory/js/bootstrap.js"></script>
<script type="text/javascript" src="directory/js/owl.carousel.min.js"></script>

<!-- Menu Java Script -->
<script>
    $(document).ready(function(){ 
        var touch   = $('#resp-menu');
        var menu    = $('.menu');
     
        $(touch).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
        
        $(window).resize(function(){
            var w = $(window).width();
            if(w > 767 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
        
    });
</script>

<!-- Scroll to Top -->
<script>
	$(window).scroll(function() {
	if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
	    $('#return-to-top').fadeIn(200);    // Fade in the arrow
	} else {
	    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
	}
	});
	$('#return-to-top').click(function() {      // When arrow is clicked
	$('body,html').animate({
	    scrollTop : 0                       // Scroll to top of body
	}, 500);
	});
</script>
<!-- testimonials -->
<script type="text/javascript">
    $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:false,
        navigationText:["",""],
        slideSpeed:1000,
        singleItem:true,
        autoPlay:true
    });
});
</script>

<!-- products side menu -->
<script type="text/javascript" src="directory/js/woco.accordion.min.js"></script>
<script>
    $(".accordion").accordion();
</script>
</body>
</html>


