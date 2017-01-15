<?php
 $enable_footer_widget_area = esc_attr(onetone_option('enable_footer_widget_area'));
 $footer_columns            = onetone_option('footer_columns','4'); 
 $copyright_text            = onetone_option('copyright',''); 
 $display_copyright_bar     = onetone_option('display_copyright_bar','yes'); 

?>



    	<div style="margin-top:-20px;width:100%;background-color: #0d0d33;color:#fff !important;text-align:center;">

           <h1 style="font-weight: bold;padding-top:40px;margin-left:25px;">"Sign" the Charter Now</h1>

<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css" style="margin-top: -40px;">
<style type="text/css">
	#mc_embed_signup{background:#0d0d33; clear:left;  }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//younglib.us13.list-manage.com/subscribe/post?u=fef17fb732b4c2b12d13b3c4e&amp;id=a80917b6b1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
<div class="indicates-required" style="text-align:center;"><span class="asterisk">*</span> indicates required</div>
<div id="mailchimp-left">
<div class="mc-field-group mc-field-group-left">
</br>
	<label for="mce-FNAME">First Name </label>
	<input style="margin-left:12%;width:75% !important" type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group mc-field-group-left">
	<label for="mce-LNAME">Surname </label>
	<input style="margin-left:12%;width:75% !important" type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
</div>
<div id="mailchimp-right">
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input style="margin-left:12%;width:75% !important" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group mc-field-group-minus">
	<label for="mce-MMERGE3">Post Code  <span class="asterisk">*</span>
</label>
	<input style="margin-left:12%;width:75% !important" type="text" value="" name="MMERGE3" class="required" id="mce-MMERGE3">
</div>
</div>
<div style="clear:both"></div>
<div class="indicates-required" style="text-align:center;">By sending us this data, you accept out T&Cs and Privacy Policy</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fef17fb732b4c2b12d13b3c4e_a80917b6b1" tabindex="-1" value=""></div>
    <div class="clear" style="text-align:center !important;"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"  style="text-decoration: none;background-color: #a70b0e !important;color: #fff !important;border-color: #fff !important;"></div>
    </div>
</form>
</div>
<!--End mc_embed_signup-->

        </div>
  <div class="clear"></div>


  <div style="width:100%;height:5px;background-color:#a70b0e;"></div>
  <div class="clear"></div>

<!--Footer-->
		<footer>
        <?php if( $enable_footer_widget_area == '1' ):?>
			<div class="footer-widget-area">
                <div class="container">

                    <div class="row">
                    <?php 
					for( $i=1;$i<=$footer_columns; $i++ ){
					?>
                    <div class="col-md-<?php echo 12/$footer_columns; ?>">
                    <?php
							if(is_active_sidebar("footer_widget_".$i)){
	                           dynamic_sidebar("footer_widget_".$i);
                               }
							?>
                    </div>
                    
                    <?php }?>
                    </div>
                </div>
            </div>
            <?php endif;?>
			<div class="footer-info-area">
				<div class="container">	
					<div class="site-info pull-left">
					  &copy; The People's Charter Foundation 2016 | <a href="http://peoplescharter.org/privacy-policy/">Privacy Policy</a> | <a href="http://peoplescharter.org/terms-and-conditions/">Terms and Conditions</a> | <a href="http://peoplescharter.org/contact/">Contact</a>
					</div>
                     <div class="site-social pull-right">
                      <?php 
							echo onetone_get_social( 'footer', '','top','_blank');
							?>
                       </div>
				</div>
			</div>			
		</footer>
	</div>
    <?php wp_footer();?>	
</body>
</html>
