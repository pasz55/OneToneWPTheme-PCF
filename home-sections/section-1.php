<?php
 global $onetone_animated;
 $i                   = 0 ;
 $section_title       = onetone_option( 'section_title_'.$i );
 
 $section_menu        = onetone_option( 'menu_title_'.$i );
 $parallax_scrolling  = onetone_option( 'parallax_scrolling_'.$i );
 $section_css_class   = onetone_option( 'section_css_class_'.$i );
 $section_content     = onetone_option( 'section_content_'.$i );
 $full_width          = onetone_option( 'full_width_'.$i );
 
 $content_model       = onetone_option( 'section_content_model_'.$i,1);
 $section_subtitle    = onetone_option( 'section_subtitle_'.$i );
 $btn_text    = onetone_option( 'section_btn_text_'.$i );
 $btn_link    = onetone_option( 'section_btn_link_'.$i );
 $btn_target  = onetone_option( 'section_btn_target_'.$i );
 $icons       = onetone_option( 'section_icons_'.$i );
 $color       = onetone_option( 'section_color_'.$i );
 
  if( !isset($section_content) || $section_content=="" ) 
  $section_content = onetone_option( 'sction_content_'.$i );
  
  $section_id      = sanitize_title( onetone_option( 'menu_slug_'.$i ,'section-'.($i+1) ) );
  if( $section_id == '' )
   $section_id = 'section-'.($i+1);
   
   $section_id  = strtolower( $section_id );
  
  $container_class = "container";
  if( $full_width == "yes" ){
  $container_class = "";
  }
  
  if( $parallax_scrolling == "yes" || $parallax_scrolling == "1" ){
	 $section_css_class  .= ' onetone-parallax';
  }
  
  if( $content_model == '0' ){
	  $section_css_class .= ' fullheight verticalmiddle';
	  }
  
?>
<section id="<?php echo $section_id; ?>" class="home-section-<?php echo ($i+1); ?> <?php echo $section_css_class;?> home-banner" style="margin-bottom: -200px !important;">
      <div class="section-content">
    	<div class="home-container <?php echo $container_class; ?> page_container">
        <?php
		if( $content_model == '0' ):
		?>
       <div class="<?php echo $onetone_animated; ?>" data-animationduration="0.9" data-animationtype="bounceInDown" data-imageanimation="no" id="">
        <div style="text-align:center;color:<?php echo $color; ?>;">

          <div style="margin-top: 10px;">
            <br />
            <?php if( $btn_text != ''):?>
            <a href="<?php //echo esc_url($btn_link);?>#mc_embed_signup" target="<?php echo esc_attr($btn_target);?>" class=" magee-btn-normal btn-lg btn-line btn-light" style="text-decoration: none;background-color: #a70b0e !important;color: #fff !important;border-color: #fff !important;"><?php echo do_shortcode($btn_text);?></a> 
            <?php endif;?>
            </div>
          <div class="banner-sns" style="margin-top: 45px;">
           <ul>
           <?php 
		   for( $s=0;$s<6;$s++ ):
		   
		   $icon       = onetone_option( "section_social_icon_".$i."_".$s );
           $link       = onetone_option( "section_icon_link_".$i."_".$s );
           echo ' <li><a href="'.esc_url($link).'" target="_blank"><i class="fa fa-2 '.esc_attr($icon).'">&nbsp;</i></a></li>';
		   endfor;
		   ?>
           </ul>
          </div>


        </div>
      </div>
        <?php
		else:
		?>
        <?php if( $section_title != '' ):?>
        <div class="section-title"><?php echo do_shortcode($section_title);?></div>
        <?php endif;?>
            <div class="home-section-content">
         <?php 
			if(function_exists('Form_maker_fornt_end_main'))
             {
                 $section_content = Form_maker_fornt_end_main($section_content);
              }
			 echo do_shortcode($section_content);
			?>
        </div>
        <?php 
		endif;
		?>
        </div>
  <div class="clear"></div>

  </div>
</section>


  <div class="clear"></div>



<div style="width:100%; background-image: url(./img/chartists.jpg); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-attachment: fixed; background-position: top center; background-repeat: no-repeat;padding:30px;margin-top: 260px;margin-bottom: -260px;width: 100%; position: relative; float: left;">
          <div style="text-decoration: none;background-color: #0d0d33 !important;opacity:0.9;color: #fff !important;border: 1px solid #fff !important;padding-top:30px;padding-bottom:30px;margin: 80px 0;">
          <img style="width: 86%;z-index: 9999 !Important;height: 100%;margin-left: 7%;display: block;" src="./img/peoplescharter_video_overlay.png">
          </div>
</div>


  <div class="clear"></div>



<div style="width:100%;background-image: url(http://peoplescharter.org/wp-content/uploads/2016/10/flag-bg.png); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-attachment: fixed; background-position: top center; background-repeat: no-repeat;padding:30px;margin-top: 260px;width: 100%; position: relative; float: left;">
<div style="background-color: #fff; color: #a70b0e !important; border: 2px solid #a70b0e !important;width: 100%; position: relative; float: left;">

<div id="ujackbox-left" style="/* background:url('./img/sidebanner.png') */">
<img src="./img/sidebanner.png" style="width:100%;height:auto"> 
</div>

<div id="ujackbox-right">
<div id="ujackbox-right-inner">
            <p style="color: #0d0d33 !important; font-size: 18px !important;font-weight: bold;">2016: the year when the people of Britain stood up to the establishment, when they demanded accountable government, when they voted for Brexit.</p>
            <p style="color: #a70b0e !important; font-size: 14px !important;">The "chattering classes" of the Islington metropolitan elite, many who worked in the arts and non-profits, never had a real job and are completely out of touch with the people. The likes of Anna Soubry, Diane Abbot and Emily Thornberry don't speak for us. Enough is enough. The people won't accept this any longer.</p>
            <p style="color: #a70b0e !important; font-size: 14px !important;">The People's Charter of 1838 demanded universal suffrage, expanding the provision won by the sealing of Magna Carta. There was a long and difficult struggle to establish the British concept of negative liberty, including your right to vote - your right to choose and fire politicians, so as to ensure your voice is heard.</p>
            <p style="color: #a70b0e !important; font-size: 14px !important;">The People's Charter Foundation was established to promote democracy and freedom for all Britons, regardless of their race, gender, sexuality or religion. The six points of the People's Charter of 2016 are as follows:
<ul>
<li>1. Leave the EU: a points-based migration policy, and leave the 'single market';</li>
<li>2. Government to be downsized: the national budget must be balanced and taxes lower;</li>
<li>3. Not be ashamed of British national flags;</li>
<li>4. A strong military is essential;</li>
<li>5. English as our core language is required;</li>
<li>6. In the spirit of the 1838 Charter's sixth point that was never realised, for the right to recall bad MPs;</li>
</ul>
</p>
</div>...
</div>

<div id="ujackbox-right2">
<p style="font-size: 18px !important;font-weight: bold;color:navy !important;"><a style="color:navy !important;" href="http://peoplescharter.org/new-chartist-movement/">Form a Chartists group in your constituency now >></a></p>
</div>

</div>
</div>

  <div class="clear"></div>
 
