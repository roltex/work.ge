<?php /* Smarty version Smarty-3.1.13, created on 2016-11-07 12:35:24
         compiled from "C:\xampp\htdocs\moe.gov.ge\html\themes\default\templates\submenu_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27801582066160af201-96523244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '880ec0335499a1e2f60bd93cd59d95e122e6cdcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe.gov.ge\\html\\themes\\default\\templates\\submenu_page.tpl',
      1 => 1478518483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27801582066160af201-96523244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582066165663a4_61823399',
  'variables' => 
  array (
    'site_data' => 0,
    'info' => 0,
    'index' => 0,
    'site_url' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582066165663a4_61823399')) {function content_582066165663a4_61823399($_smarty_tpl) {?><div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h3>
		<div class="col-md-9 page-content">
        	<ul>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <?php if (($_smarty_tpl->tpl_vars['index']->value+1)%3==0){?>
            <li class="extreme"><h4><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</a></h4></li>
            <?php }else{ ?>
            <li><h4><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</a></h4></li>
            <?php }?>
            <?php } ?>
            </ul>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div><?php }} ?>