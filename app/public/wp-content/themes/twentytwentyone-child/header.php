<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1');
  ?>
	<?php wp_head(); ?>

  <!-- PHP記載箇所 -->
  <script>
    jQuery(function() {
      $('.image-top-about').hover(function() {
        $('.image-top-about-write-wrap').fadeIn(300);
      },function() {
        $('.image-top-about-write-wrap').fadeOut(300);
      });

      $('.image-top-history').hover(function() {
        $('.image-top-history-write-wrap').fadeIn(300);
      },function() {
        $('.image-top-history-write-wrap').fadeOut(300);
      });

      $('.image-top-skill').hover(function() {
        $('.image-top-skill-write-wrap').fadeIn(300);
      },function() {
        $('.image-top-skill-write-wrap').fadeOut(300);
      });

      $('.image-top-about-write-wrap,.image-about-hover').hover(function() {
        $('.image-about-hover').css("opacity", "1");
      },function() {
        $('.image-about-hover').css("opacity", "0");
      });

      $('.image-top-skill-write-wrap,.image-skill-hover').hover(function() {
        $('.image-skill-hover').css("opacity", "1");
      },function() {
        $('.image-skill-hover').css("opacity", "0");
      });

      $('.image-top-contact-write-wrap,.image-contact-hover').hover(function() {
        $('.image-contact-hover').css("opacity", "1");
        $('.image-write-title-contact').css("opacity", "0.4");
        $('.image-write-contents-contact').css("opacity", "0.4");
        $('.image-write-title-contact').css("transition", "0.2s");
        $('.image-write-contents-contact').css("transition", "0.2s");
      },function() {
        $('.image-contact-hover').css("opacity", "0");
        $('.image-write-title-contact').css("opacity", "1");
        $('.image-write-contents-contact').css("opacity", "1");
        $('.image-write-title-contact').css("transition", "0.2s");
        $('.image-write-contents-contact').css("transition", "0.2s");
      });

			// モーダルウィンドウ用
			$(function(){
				var openMexico = $('.f13-image-tag-mexico'),
					openFriends = $('.f13-image-tag-friends'),
					openHsu = $('.f13-image-tag-hsu'),
					openSushi = $('.f13-image-tag-sushi'),
					openFavo13 = $('.f13-image-tag-favo13'),
					openHouse = $('.f13-image-tag-house'),
					openHikaru = $('.f13-image-tag-hikaru'),
					openApple = $('.f13-image-tag-apple'),
					openOasis = $('.f13-image-tag-oasis'),
					openPiano = $('.f13-image-tag-piano'),
					openBaseball = $('.f13-image-tag-baseball'),
					openCar = $('.f13-image-tag-car'),
					openAlchole = $('.f13-image-tag-alchole'),
					openTravel = $('.f13-image-tag-travel'),
					openMakaenn = $('.f13-image-tag-makaenn'),

					containerMexico = $('.modal-container-mexico');
					containerFriends = $('.modal-container-friends');
					containerHsu = $('.modal-container-hsu');
					containerSushi = $('.modal-container-sushi');
					containerFavo13 = $('.modal-container-favo13');
					containerHouse = $('.modal-container-house');
					containerHikaru = $('.modal-container-hikaru');
					containerApple = $('.modal-container-apple');
					containerOasis = $('.modal-container-oasis');
					containerBaseball = $('.modal-container-baseball');
					containerPiano = $('.modal-container-piano');
					containerCar = $('.modal-container-car');
					containerAlchole = $('.modal-container-alchole');
					containerTravel = $('.modal-container-travel');
					containerMakaenn = $('.modal-container-makaenn');

					close = $('.modal-close'),

				openMexico.on('click',function(){
					containerMexico.addClass('active');
					return false;
				});

				openFriends.on('click',function(){
					containerFriends.addClass('active');
					return false;
				});

				openHsu.on('click',function(){
					containerHsu.addClass('active');
					return false;
				});

				openSushi.on('click',function(){
					containerSushi.addClass('active');
					return false;
				});

				openFavo13.on('click',function(){
					containerFavo13.addClass('active');
					return false;
				});

				openHouse.on('click',function(){
					containerHouse.addClass('active');
					return false;
				});

				openHikaru.on('click',function(){
					containerHikaru.addClass('active');
					return false;
				});

				openApple.on('click',function(){
					containerApple.addClass('active');
					return false;
				});

				openOasis.on('click',function(){
					containerOasis.addClass('active');
					return false;
				});

				openPiano.on('click',function(){
					containerPiano.addClass('active');
					return false;
				});

				openBaseball.on('click',function(){
					containerBaseball.addClass('active');
					return false;
				});

				openCar.on('click',function(){
					containerCar.addClass('active');
					return false;
				});

				openAlchole.on('click',function(){
					containerAlchole.addClass('active');
					return false;
				});

				openTravel.on('click',function(){
					containerTravel.addClass('active');
					return false;
				});

				openMakaenn.on('click',function(){
					containerMakaenn.addClass('active');
					return false;
				});

				close.on('click',function(){
					containerMexico.removeClass('active');
					containerFriends.removeClass('active');
					containerHsu.removeClass('active');
					containerSushi.removeClass('active');
					containerFavo13.removeClass('active');
					containerHouse.removeClass('active');
					containerHikaru.removeClass('active');
					containerApple.removeClass('active');
					containerOasis.removeClass('active');
					containerPiano.removeClass('active');
					containerBaseball.removeClass('active');
					containerCar.removeClass('active');
					containerAlchole.removeClass('active');
					containerTravel.removeClass('active');
					containerMakaenn.removeClass('active');
				});

				$(document).on('click',function(e) {
					if(!$(e.target).closest('.modal-body').length) {
						containerMexico.removeClass('active');
						containerFriends.removeClass('active');
						containerHsu.removeClass('active');
						containerSushi.removeClass('active');
						containerFavo13.removeClass('active');
						containerHouse.removeClass('active');
						containerHikaru.removeClass('active');
						containerApple.removeClass('active');
						containerOasis.removeClass('active');
						containerPiano.removeClass('active');
						containerBaseball.removeClass('active');
						containerCar.removeClass('active');
						containerAlchole.removeClass('active');
						containerTravel.removeClass('active');
						containerMakaenn.removeClass('active');
					}
				});
			});

			// history高さ取得
			$(function(){
			  var text1995 = jQuery(".text1995").outerHeight(true);
				var text1999 = jQuery(".text1999").outerHeight(true);
				var text2003 = jQuery(".text2003").outerHeight(true);
				var text2008 = jQuery(".text2008").outerHeight(true);
				var text2011 = jQuery(".text2011").outerHeight(true);
				var text2014 = jQuery(".text2014").outerHeight(true);
				var text2015 = jQuery(".text2015").outerHeight(true);
				var text2016 = jQuery(".text2016").outerHeight(true);
				var text2018 = jQuery(".text2018").outerHeight(true);
				var text2019 = jQuery(".text2019").outerHeight(true);
				var text2020 = jQuery(".text2020").outerHeight(true);
				var text2022 = jQuery(".text2022").outerHeight(true);
				$('.year1995').css('height',text1995);
				$('.year1999').css('height',text1999);
				$('.year2003').css('height',text2003);
				$('.year2008').css('height',text2008);
				$('.year2011').css('height',text2011);
				$('.year2014').css('height',text2014);
				$('.year2015').css('height',text2015);
				$('.year2016').css('height',text2016);
				$('.year2018').css('height',text2018);
				$('.year2019').css('height',text2019);
				$('.year2020').css('height',text2020);
				$('.year2022').css('height',text2022);

				// Work高さを取得
				var workDescription = jQuery(".work-ec-description").outerHeight(true);
				$('.work-description').css('height',workDescription);
			});

      // TOP画像画面遷移
      $('.image-top-about').on("click", function() {
        location.href= document.URL + "/?page_id=7";
      });
      $('image-top-10').on("click", function() {
        location.href= document.URL + "/?page_id=70";
      });
      $('.image-top-history').on("click", function() {
        location.href= document.URL + "/?page_id=72";
      });
      $('.image-top-contact').on("click", function() {
        location.href= document.URL + "/?page_id=8";
      });
      $('.image-top-skill').on("click", function() {
        location.href= document.URL + "/?page_id=68";
      });
      $('.image-top-work').on("click", function() {
        location.href= document.URL + "/?page_id=66";
      });
      jQuery(window).scroll(function(){
        const ua = navigator.userAgent;
        if (ua.indexOf('iPhone') > -1 || (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)) {
          var obj_about = jQuery('.sp-scroll-about').offset().top;
          var obj_history = jQuery('.sp-scroll-history').offset().top;
          var obj_skill = jQuery('.sp-scroll-skill').offset().top;
          var scr_count = jQuery(document).scrollTop();
          if(scr_count > obj_about - 40){ // スクロール量が、指定した要素の位置を超えたら発火
             jQuery('.image-top-about-write-wrap').fadeIn(300);
          }else{
             jQuery('.image-top-about-write-wrap').fadeOut(300);
          }
          if(scr_count > obj_history - 200){ // スクロール量が、指定した要素の位置を超えたら発火
             jQuery('.image-top-history-write-wrap').fadeIn(300);
          }else{
             jQuery('.image-top-history-write-wrap').fadeOut(300);
          }
          if(scr_count > obj_skill - 200){ // スクロール量が、指定した要素の位置を超えたら発火
             jQuery('.image-top-skill-write-wrap').fadeIn(300);
          }else{
             jQuery('.image-top-skill-write-wrap').fadeOut(300);
          }
        }
      })

    });
  </script>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
