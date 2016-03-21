<?php 
header('Content-type: text/css');
ob_start("compress");

    function compress( $minify ) 
    {
	/* remove comments */
    	$minify = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $minify );

        /* remove tabs, spaces, newlines, etc. */
    	$minify = str_replace( array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $minify );
    		
        return $minify;
    }

    /* css files for combining */
    include('../css/bootstrap.min.css');
    include('../css/bootstrap-theme.css');
    include('../css/docs.min.css');
    include('../css/animate.css');
    include('../css/calendar.css');
    include('../css/paymentfont.css');
    include('../css/social-media.css');
    include('../css/dropdown.css');
    include('../css/portfolio-sortable.css');
    include('../css/shop.css');
    include('../css/portfolio-grid.css');
    include('../css/fractionslider.css');
    include('../css/logo-slider.css');
    include('../css/style.css');

ob_end_flush();
?>
