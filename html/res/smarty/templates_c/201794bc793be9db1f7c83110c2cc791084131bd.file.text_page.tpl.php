<?php /* Smarty version Smarty-3.1.13, created on 2016-11-14 20:41:43
         compiled from "C:\xampp\htdocs\works.ge\html\themes\default\templates\text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82825829c0a7a0f915-56955068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '201794bc793be9db1f7c83110c2cc791084131bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\works.ge\\html\\themes\\default\\templates\\text_page.tpl',
      1 => 1479152322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82825829c0a7a0f915-56955068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5829c0a7ab78b3_72841938',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5829c0a7ab78b3_72841938')) {function content_5829c0a7ab78b3_72841938($_smarty_tpl) {?><div class="row">
    <div id="header"></div>
    <div class="content">
        <h2 class="font-title"><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h2>
        <?php if ($_smarty_tpl->tpl_vars['thumbnail']->value){?>
        <div class="col-md-4">
            <a class="zoom standard_image" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/small_<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
            </a>
        </div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

    
        <h3 class="font-title">პარტნიორები</h3>
        <ul>
            <li><a href="" target="_blank"><img src="assets/images/partners/2.png" alt="" title=""></a></li>
            <li><a href="" target="_blank"><img src="assets/images/partners/1.png" alt="" title=""></a></li>
            <li><a href="" target="_blank"><img src="assets/images/partners/2.png" alt="" title=""></a></li>
            <li><a href="" target="_blank"><img src="assets/images/partners/1.png" alt="" title=""></a></li>
        </ul>
    
    </div>
</div>
<?php }} ?>