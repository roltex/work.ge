<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<base href="{$site_url}" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="{if $og_array.description}{$og_array.description}{else if $site_data.description}{$site_data.description}{else}{$language.website_title}{/if}" />
<meta name="keywords" content="{if $og_array.title}{$og_array.title}{else}{$language.website_title}{/if}" />
<meta name="author" content="{$language.website_title}" />
<meta property="og:title" content="{if $og_array.title}{$og_array.title}{else}{$language.website_title}{/if}" />
<meta property="og:image" content="{if $og_array.thumbnail}{$site_url}res/images/{$og_array.thumbnail}{else}{$site_url}themes/default/images/image.jpg{/if}" />
<meta property="og:description" content="{if $og_array.description}{$og_array.description}{else if $site_data.description}{$site_data.description}{else}{$language.website_title}{/if}" />

<link rel="icon" href="assets/images/favicon.ico?v=1" type="image/x-icon" />
<link rel="shortcut icon" href="assets/images/favicon.ico?v=1" type="image/x-icon" />

<link rel="alternate" hreflang="{$site_data.language}" href="{$site_url}{$site_data.language}/{$site_data.section_slug}{if $site_data.slug_END}/{$site_data.slug_END}{/if}{$site_data.dirty_url}" />

<link rel="canonical" href="{$site_url}{$site_data.language}/{$site_data.section_slug}{if $site_data.slug_END}/{$site_data.slug_END}{/if}{$site_data.dirty_url}" />


<link rel="stylesheet" href="assets/css/partials/reset.css">
<link rel="stylesheet" href="assets/css/partials/fonts.css">
<link rel="stylesheet" href="assets/css/partials/keyframes.css">
<link rel="stylesheet" href="assets/css/partials/plugins.css">
<link rel="stylesheet" href="assets/css/partials/classes.css">

<link rel="stylesheet" href="assets/css/style.css?v=1479119969">
<link rel="stylesheet" href="assets/css/partials/user.css?v=1479119969">
<link rel="stylesheet" href="assets/css/partials/statments.css?v=1479119969">

<link rel="stylesheet" href="assets/css/partials/media.css">
  



<title>{if $og_array.title}{$og_array.title}{else}{$language.website_title}{/if}</title>
</head>

<body id="skrollr-body" data-page="{$page_class}" class="{$page_class} {$site_data.language}">
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=260216410840597";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<!--Top Task bar ()Logo, Menu, Add btn, user panel-->
<div class="taskbar clearfix">
  <!--Logo-->
  <a href="{$site_url}{$site_data.language}" class="logo">
    <img src="assets/images/logo.png" alt="Work.ge" title="Work.ge" />
  </a>

  <!--Menu-->  
  {$main_menu}


  <div class="user-bar clearfix">
    <!--Add Btn-->
    <a href="#" class="add-btn font-title"><i>+</i>განცხადების დამატება</a>

    <!--Lang Bar-->
    <ul class="lang">
    	{foreach $language_array as $key => $item}
        {if $key == $site_data.language}
        <li class="active"><img src="assets/images/icos/flag-{$item}.png" alt="{$item}" title="{$item}" /></li>
        {else}
        <li class="passive"><a href="{$site_url}{$key}/{$site_data.section_slug_by_language.$key}{if $sectionData.info_slug}/{$sectionData.info_slug.$key}{/if}{$site_data.dirty_url}"><img src="assets/images/icos/flag-{$item}.png" alt="{$item}" title="{$item}" /></a></li>
        {/if}
      	{/foreach}
    </ul>

    <!--favorites-->
    <div class="favorites icon-menu_17">
        <!--
          class - more-1 0<x<10
          class - more-10 10<x<100
          class - more-100 100<x
        -->
        <span class="counter more-1">9</span>
	</div>
    

    <!--user profile-->
    <div class="user">
    	<div class="image" style="background: url('assets/images/users/1.png') no-repeat center center;"></div>
        <span class="arrow-down icon-menu_15"></span>
	</div>

  </div>


</div>






<!--gradient mask-->
<div class="body-mask-fixed"></div>



<!--Main Container-->
<div class="container-fluid">


  <!--Content-->
  {include file = $content_file}


  <!--ზოგიერთ გვერდზე არ არის საჭირო ფუტერი და ფუტერის ნავიგაცი. $p ცვლადით ხდება შემოწმება -->
  
  <!--Class navigation under conainer-->
  <ul class="bottom-nav">
    <li
        data-anchor-target="#footer"
        data-240-bottom-top="opacity:0; transform: translate3d(-50%,-100%,0);"
        data-end="opacity:1; transform: translate3d(-50%,0%,0);">
      <a href="" class="font-title">ბლოგი</a>
    </li>
    <li
        data-anchor-target="#footer"
        data--40-bottom-top="opacity:0; transform: translate3d(-50%,-100%,0);"
        data-end="opacity:1; transform: translate3d(-50%,100%,0);">
      <a href="" class="font-title">ვაკანსიები</a>
    </li>
    <li
        data-anchor-target="#footer"
        data--80-bottom-top="opacity:0; transform: translate3d(-50%,-100%,0);"
        data-end="opacity:1; transform: translate3d(-50%,200%,0);">
      <a href="" class="font-title">კონტაქტი</a>
    </li>
    <li
        data-anchor-target="#footer"
        data--120-bottom-top="opacity:0; transform: translate3d(-50%,-100%,0);"
        data-end="opacity:1; transform: translate3d(-50%,300%,0);">
      <a href="" class="font-title">განცხადების დამატება</a>
    </li>
  </ul>

  <!--White Mask-->
  <div class="body-mask"
       data-anchor-target="#footer"
       data-bottom-top="width:calc(100% - 0px); box-shadow:0px 5px 5px rgba(40,79,127,0);"
       data-end="width:calc(100% - 140px); box-shadow:0px 5px 5px rgba(40,79,127,0.05);"
  ></div>
  

</div>

<!--footer-->
<footer id="footer">
  <div class="footer-wrap clearfix">

    <!--Copy-->

    <div class="item">
        <h5 class="font-title"><img src="assets/images/f-logo.png" alt="" title="" /></h5>

        <p>
            1996 წლის სექტემბერში <br>პირველი GSM ოპერატორი<br><br>Tel:(+995)555 444 333<br>Emali: info@work.ge
        </p>
    </div>

    <div class="item">
        <h5 class="font-title">{$language.media}</h5>
        <ul class="footer-nav">
            {if $setting_data.fb_page}
            <li>
            	<a target="_blank" href="{$setting_data.fb_page}"><i class="icon-menu_25 fb"></i> Facebook</a>
            </li>
            {/if}
            {if $setting_data.youtube_page}
            <li><a target="_blank" href="{$setting_data.youtube_page}"><i class="icon-menu_26 youtube"></i> Youtube</a></li>
            {/if}
            {if $setting_data.twitter_page}
            <li><a target="_blank" href="{$setting_data.twitter_page}"><i class="icon-menu_27 twitter"></i> Twitter</a></li>
            {/if}
        </ul>
    </div>

    <div class="item">
        <h5 class="font-title">კითხვები</h5>
        <ul class="footer-nav">
            <li><a href="#">რატომ work.ge</a></li>
            <li><a href="#">უპირატესობები</a></li>
            <li><a href="#">სერვისის შესახებ</a></li>
        </ul>
    </div>

    <div class="item">
        <h5>გამოწერა</h5>
        <p>
            1996 წელს პირველად დაარსდა, რომელიც
        </p>
        <form action="">
            <div class="input">
                <i class="icon-menu_24"></i>
                <input type="text" placeholder="" value="sample@company.com" />
                <button class="icon-menu_48"></button>
            </div>
        </form>

    </div>


</div>

<h4 class="copy">{$language.website_copyright}</h4></footer>



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"><i class="icon-menu_36"></i></span>
    <h2 class="font-title"></h2>
    <p></p>
  </div>

</div>



<!-- The Auth Modal -->
<div id="auth" >

  <!--Content-->
<div class="auth-wrap">

    <div class="registration-form">
        <a href=""><img src="assets/images/logo-blue.png" alt="" title="" /></a>

        <div class="form-wrap">

            <h2 class="font-title">ავტორიზაცია</h2>
            <p>ლორემ იპსუმ დოლორ სიტ ამეტ,</p>

            <a href="" class="fb-button font-title"><i class="icon-menu_25"></i>  ფეისბუქ ავტორიზაცია</a>

            <div class="divider">
                <span class="font-title">ან</span>
            </div>

            <!--Select type of auth-->
            <div class="auth-type">
                <a href="#" attr-type="physical"  attr-action="show" class="clearfix auth-type-btn font-title active"><i class="icon-menu_42"></i> <span>ფიზიკური პირი</span></a>
                <a href="#" attr-type="juridical" attr-action="hide" class="clearfix auth-type-btn font-title"><i class="icon-menu_23"></i>  <span>კომპანია</span></a>
            </div>

            <div class="form">
                <form action="" class="active" id="physical">
                    <div class="input">
                        <input type="text" value="" placeholder="ელ-ფოსტა" name="" >
                    </div>
                    <div class="input">
                        <input type="password" value="" placeholder="პაროლი" name="" >
                    </div>

                    <div class="submit-wrap">
                        <a href="#" class="font-title signup-btn">შესვლა</a>
                        <a href="#" class="font-title login-btn">რეგისტრაცია</a>
                    </div>


                </form>

                <form action="" id="juridical">
                    <div class="input">
                        <input type="text" value="" placeholder="ელ-ფოსტა" name="" >
                    </div>
                    <div class="input">
                        <input type="password" value="" placeholder="პაროლი" name="" >
                    </div>

                    <div class="submit-wrap">
                        <a href="#" class="font-title signup-btn">შესვლა</a>
                        <a href="#" class="font-title login-btn">რეგისტრაცია</a>
                    </div>
                </form>

                <a href="" class="password-recover-link">დაგავიწყდა პაროლი?</a>

            </div>


        </div>


    </div>

    <a href="#" class="close-auth font-title">გაუქმება</a>

</div>

</div>

<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery.mousewheel.min.js"></script>
<script src="assets/js/lib/jquery.mCustomScrollbar.min.js"></script>
<script src="assets/js/lib/slick.min.js"></script>
<script src="assets/js/lib/skrollr.min.js"></script>
<script src="assets/js/lib/jquery.range.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>