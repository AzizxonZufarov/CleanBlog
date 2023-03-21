<?php
session_start();
?>
<? include "inc/bd.php";?>
 <? include "inc/header.php";?>


  <link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />



<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>

<script>

		<? $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>
		window.addEventListener('load', function() {
		const pageName = '<?= $curPageName ?>';

			if ( pageName == 'Portfolio.php') {
				document.querySelector('link[href$="s3slider.css"]').remove();
		  }
		});
</script>

    <? include "inc/left.php";?>
    
    <div id="templatemo_right_column">
    
        <div id="templatemo_main">
        
            <h2>Portfolio of Web Templates</h2>
            <div id="gallery">
                <ul>
                
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_01_b.jpg" class="pirobox" title="Project 1"><img src="images/gallery/image_01.jpg" alt="1" /></a>
                        </div>
                        <div class="right">
                            <h5>Project 1</h5>
                            <p>Integer sed nisi sapien, ut gravida mauris. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                        </div>
                        <div class="cleaner"></div>
                    </li>
                    
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_02_b.jpg" class="pirobox" title="Project 2"><img src="images/gallery/image_02.jpg" alt="2" /></a>
                        </div>
                        <div class="right">
                          <h5>Project 2</h5>
                          <p>Mauris risus magna, blandit ac suscipit at, tristique id erat.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                        </div>
                        <div class="cleaner"></div>
                    </li>
                    
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_03_b.jpg" class="pirobox" title="Project 3"><img src="images/gallery/image_03.jpg" alt="3" /></a>
                        </div>
                        <div class="right">
                            <h5>Project 3</h5>
                          <p>Etiam eu ipsum a arcu sodales consequat sit amet at orci. Nulla in luctus elit.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                      </div>
                         <div class="cleaner"></div>
                    </li>
                    
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_04_b.jpg" class="pirobox" title="Project 4"><img src="images/gallery/image_04.jpg" alt="4" /></a>
                        </div>
                        <div class="right">
                            <h5>Project 4</h5>
                            <p>Divamus interdum, tortor at pellentesque pulvinar, diam quam blandit nulla.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                        </div>
                        <div class="cleaner"></div>
                    </li>
                    
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_05_b.jpg" class="pirobox" title="Project 5"><img src="images/gallery/image_05.jpg" alt="5" /></a>
                        </div>
                        <div class="right">
                            <h5>Project 5</h5>
                            <p>Divamus interdum, tortor at pellentesque pulvinar, diam quam blandit nulla.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                        </div>
                        <div class="cleaner"></div>
                    </li>
                    
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_06_b.jpg" class="pirobox" title="Project 6"><img src="images/gallery/image_06.jpg" alt="6" /></a>
                        </div>
                        <div class="right">
                            <h5>Project 6</h5>
                            <p>Divamus interdum, tortor at pellentesque pulvinar, diam quam blandit nulla.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                        </div>
                        <div class="cleaner"></div>
                    </li>
                </ul>
            
            </div>
        
        </div> <!-- end of main -->
        <div class="cleaner"></div>
    </div>  <!-- end of right column -->
    
  	<div class="cleaner_h20"></div>
  
 <? include "inc/footer.php";?>