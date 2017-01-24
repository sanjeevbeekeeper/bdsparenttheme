// Slideshow for front-page.php - 24 Jan 2017
jQuery(document).ready(function(){
    jQuery("#slideshow > img:gt(0)").hide();
    setInterval(function() {
        jQuery('#slideshow > img:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    }, 4000);
    });
