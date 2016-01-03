<?php
/**
 * Template for displaying the footer
 */
?>

		<div id="footer" role="contentinfo">
			Copyright <a href="<?php bloginfo('url') ?>">kuopdesigns.com</a>
		</div><!-- #footer -->
	</div><!-- .main-content-wrap -->
</div><!-- #wrapper -->

<script>
	
	$(document).ready(function() {
		var config = {};
		config.window = $(window);
		config.wWidth = config.window.width();
		config.wHeight = config.window.height();
		config.t = 1;
		config.t2 = 3;
		config.e = Power2.easeOut;
		config.e2 = Power2.easeIn;
		config.pageTrans = new TimelineMax({
		    repeat: -1,
		    repeatDelay: 0,
		    yoyo: true
		});
		config.pageTrans.fromTo('.green', config.t, { x: config.wWidth / 2 }, {
		    x: 0,
		    ease: config.e
		}, 'f').fromTo('.dark-blue', config.t, { x: -config.wWidth / 2 }, {
		    x: 0,
		    ease: config.e
		}, 'f').fromTo('.black', config.t, { y: -config.wHeight }, {
		    y: 0,
		    ease: config.e
		}, 'f').fromTo('.gold', config.t, { y: config.wHeight }, {
		    y: 0,
		    ease: config.e
		}, 'f').fromTo('.dark-blue', config.t2, { y: 0 }, {
		    y: -config.wHeight / 2,
		    ease: config.e2
		}, 'f+=.8').fromTo('.green', config.t2, { y: 0 }, {
		    y: config.wHeight / 2,
		    ease: config.e2
		}, 'f+=.8').fromTo('#pre-loader', 2.5, { rotation: 0 }, {
		    rotation: 10,
		    ease: config.e
		}, 'f').fromTo('.vic-gb', 0.8, {
		    rotation: 0,
		    scale: 0
		}, {
		    rotation: -10,
		    scale: 1,
		    ease: Back.easeOut
		}, 'f+=.6');
 
    setTimeout(function(){
	    //stop preloader animation
      TweenMax.killAll(false, true, false);
	    //load wrapper after all assets are loaded and page loader finishes
	    $("#wrapper").addClass("loaded");
	    //fadeout preloader
      $("#pre-loader").hide();      
      $(".our-process-accordion").addClass("loaded")
      //about us page accordian
      jQuery('.expand_content').hide();
    	jQuery('h4.expand').on('click', function() {
    	    var state = jQuery(this).next('.expand_content').is('.open');
    	    if (state) {
    	        jQuery(this).next('.expand_content').removeClass('open').fadeOut();
    	    }else{
    	        jQuery(this).next('.expand_content').addClass('open').slideDown()
    	               .siblings('.expand_content').removeClass('open').slideUp();
    	    }
    	});
			
    	}, 3000);
 
	});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59242041-8', 'auto');
  ga('send', 'pageview');

</script>


<?php wp_footer(); ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-568818ef291a3b6b" async="async"></script>
</body>
</html>
