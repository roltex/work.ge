<?php /* Smarty version Smarty-3.1.13, created on 2015-11-25 18:01:40
         compiled from "C:\xampp\htdocs\tbilisisilkroad.ge\smarty\templates\news_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91365655bb25522471-94969030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e89e26a8256961a2cdd37cbde1986aa22e54072' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tbilisisilkroad.ge\\smarty\\templates\\news_single_page.tpl',
      1 => 1448460095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91365655bb25522471-94969030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5655bb256659d7_57419571',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'info_title' => 0,
    'start_date' => 0,
    'info_img' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655bb256659d7_57419571')) {function content_5655bb256659d7_57419571($_smarty_tpl) {?><div class="center-wrap main second-font">
	<div class="clear"></div>&nbsp;
</div>
<div class="content-long left">
    <h1 class="upper left"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
    <div class="left">
        <span class="date upper"><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
            <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
            </a>
            <?php }?>
		<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

    </div>   
    <div class="clear"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>