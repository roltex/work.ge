<?php /* Smarty version Smarty-3.1.13, created on 2016-11-23 04:40:28
         compiled from "/home1/tdtemo/public_html/work.ge/test/html/themes/default/templates/skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1835128125835721cc9cba4-21295196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af8f2d9bb55a22991c84e30eac0a2a2639d9ab0' => 
    array (
      0 => '/home1/tdtemo/public_html/work.ge/test/html/themes/default/templates/skeleton_main.tpl',
      1 => 1479146019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1835128125835721cc9cba4-21295196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'page_class' => 0,
    'main_menu' => 0,
    'language_array' => 0,
    'key' => 0,
    'item' => 0,
    'sectionData' => 0,
    'content_file' => 0,
    'setting_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5835721d07b0e9_53700262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835721d07b0e9_53700262')) {function content_5835721d07b0e9_53700262($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<base href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
<?php }elseif($_smarty_tpl->tpl_vars['site_data']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['description'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
" />
<meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta property="og:image" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['thumbnail']){?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/<?php echo $_smarty_tpl->tpl_vars['og_array']->value['thumbnail'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
themes/default/images/image.jpg<?php }?>" />
<meta property="og:description" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
<?php }elseif($_smarty_tpl->tpl_vars['site_data']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['description'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />

<link rel="icon" href="assets/images/favicon.ico?v=1" type="image/x-icon" />
<link rel="shortcut icon" href="assets/images/favicon.ico?v=1" type="image/x-icon" />

<link rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['slug_END']){?>/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['slug_END'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" />

<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['slug_END']){?>/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['slug_END'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" />


<link rel="stylesheet" href="assets/css/partials/reset.css">
<link rel="stylesheet" href="assets/css/partials/fonts.css">
<link rel="stylesheet" href="assets/css/partials/keyframes.css">
<link rel="stylesheet" href="assets/css/partials/plugins.css">
<link rel="stylesheet" href="assets/css/partials/classes.css">

<link rel="stylesheet" href="assets/css/style.css?v=1479119969">
<link rel="stylesheet" href="assets/css/partials/user.css?v=1479119969">
<link rel="stylesheet" href="assets/css/partials/statments.css?v=1479119969">

<link rel="stylesheet" href="assets/css/partials/media.css">
  



<title><?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?></title>
</head>

<body id="skrollr-body" data-page="<?php echo $_smarty_tpl->tpl_vars['page_class']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['page_class']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
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
  <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
" class="logo">
    <img src="assets/images/logo.png" alt="Work.ge" title="Work.ge" />
  </a>

  <!--Menu-->  
  <?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>



  <div class="user-bar clearfix">
    <!--Add Btn-->
    <a href="#" class="add-btn font-title"><i>+</i>განცხადების დამატება</a>

    <!--Lang Bar-->
    <ul class="lang">
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['language_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['site_data']->value['language']){?>
        <li class="active"><img src="assets/images/icos/flag-<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" /></li>
        <?php }else{ ?>
        <li class="passive"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
"><img src="assets/images/icos/flag-<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" /></a></li>
        <?php }?>
      	<?php } ?>
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
  <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



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
        <h5 class="font-title"><?php echo $_smarty_tpl->tpl_vars['language']->value['media'];?>
</h5>
        <ul class="footer-nav">
            <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['fb_page']){?>
            <li>
            	<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['fb_page'];?>
"><i class="icon-menu_25 fb"></i> Facebook</a>
            </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['youtube_page']){?>
            <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['youtube_page'];?>
"><i class="icon-menu_26 youtube"></i> Youtube</a></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['twitter_page']){?>
            <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['twitter_page'];?>
"><i class="icon-menu_27 twitter"></i> Twitter</a></li>
            <?php }?>
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

<h4 class="copy"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
</h4></footer>



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
</html><?php }} ?>