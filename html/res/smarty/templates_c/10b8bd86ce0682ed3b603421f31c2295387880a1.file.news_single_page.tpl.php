<?php /* Smarty version Smarty-3.1.13, created on 2013-10-30 14:00:05
         compiled from "C:\xampp\htdocs\lvstandard\smarty\templates\news_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21687526f86ae6eb0c3-24751230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10b8bd86ce0682ed3b603421f31c2295387880a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lvstandard\\smarty\\templates\\news_single_page.tpl',
      1 => 1383127204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21687526f86ae6eb0c3-24751230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526f86ae8c0d87_07038077',
  'variables' => 
  array (
    'site_data' => 0,
    'info_title' => 0,
    'language' => 0,
    'info_img' => 0,
    'site_url' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f86ae8c0d87_07038077')) {function content_526f86ae8c0d87_07038077($_smarty_tpl) {?><div class="center_container">
	<div class="center">    
		
        <div class="content_wrapper">
            <h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
            
        	<p><a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></p>
        
            <div class="text_center">
                <?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
                <div class="thumbnail">
                <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
                </a>
                </div>
                <?php }?>
                
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

            </div>
		</div>
        
        <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>
        
    </div>
        
</div>
    <?php }} ?>