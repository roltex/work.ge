<?php /* Smarty version Smarty-3.1.13, created on 2016-11-23 04:40:39
         compiled from "/home1/tdtemo/public_html/work.ge/test/html/themes/default/templates/text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2263232958357227c111e7-35830375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f22d24eb8e4321998a7753e367203d65f83b26b' => 
    array (
      0 => '/home1/tdtemo/public_html/work.ge/test/html/themes/default/templates/text_page.tpl',
      1 => 1479152322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2263232958357227c111e7-35830375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58357227ca86a0_16263931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58357227ca86a0_16263931')) {function content_58357227ca86a0_16263931($_smarty_tpl) {?><div class="row">
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