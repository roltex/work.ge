<?php /* Smarty version Smarty-3.1.13, created on 2016-11-14 14:48:23
         compiled from "C:\xampp\htdocs\works.ge\html\themes\default\templates\widgets\social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252275829c0a7aea549-12960176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9504e2d6e90b07b05f739ae3bb2170656cd5aa6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\works.ge\\html\\themes\\default\\templates\\widgets\\social.tpl',
      1 => 1467214561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252275829c0a7aea549-12960176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5829c0a7b11644_14678984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5829c0a7b11644_14678984')) {function content_5829c0a7b11644_14678984($_smarty_tpl) {?><p>&nbsp;</p>
<p>&nbsp;</p>
<div class="social">	
	<div class="fb-share-button" data-href="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['slug_END']){?>/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['slug_END'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" data-layout="button_count" data-mobile-iframe="true"></div>
</div><?php }} ?>