<?php /* Smarty version Smarty-3.1.13, created on 2014-01-06 12:44:20
         compiled from "C:\xampp\htdocs\aig\smarty\templates\list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133165295c3a06af901-66913981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d1ce4fdc0887419e41277a6af0db7d33577892' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aig\\smarty\\templates\\list_page.tpl',
      1 => 1388997852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133165295c3a06af901-66913981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5295c3a085ecb9_85937210',
  'variables' => 
  array (
    'site_data' => 0,
    'language' => 0,
    'alphabet' => 0,
    'current_symbol' => 0,
    'char' => 0,
    'current_sort' => 0,
    'site_url' => 0,
    'info_content' => 0,
    'info_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295c3a085ecb9_85937210')) {function content_5295c3a085ecb9_85937210($_smarty_tpl) {?>	
    <div class="content_wrapper">
        
        <h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli contact"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            
        <div class="alphabetical_search <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
        	<span><?php echo $_smarty_tpl->tpl_vars['language']->value['search_alphabtically'];?>
:</span>
            <ul><?php  $_smarty_tpl->tpl_vars['char'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['char']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alphabet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['char']->key => $_smarty_tpl->tpl_vars['char']->value){
$_smarty_tpl->tpl_vars['char']->_loop = true;
?>
            	<?php if ($_smarty_tpl->tpl_vars['current_symbol']->value==$_smarty_tpl->tpl_vars['char']->value){?>
                <li class="active">
                <?php }else{ ?>
                <li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['current_sort']->value){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=<?php echo $_smarty_tpl->tpl_vars['current_sort']->value;?>
&alpha=<?php echo $_smarty_tpl->tpl_vars['char']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['char']->value;?>
</a>
                <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?alpha=<?php echo $_smarty_tpl->tpl_vars['char']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['char']->value;?>
</a>
            	<?php }?>
                </li>
                <?php } ?>
            </ul>
		</div>
        <div class="sort_wrapper <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
            	<span><?php echo $_smarty_tpl->tpl_vars['language']->value['sort_by'];?>
:</span>
                <ul>
                <?php if ($_smarty_tpl->tpl_vars['current_symbol']->value){?>
                	<?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='name'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>                
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=name&alpha=<?php echo $_smarty_tpl->tpl_vars['current_symbol']->value;?>
">
                    	<?php echo $_smarty_tpl->tpl_vars['language']->value['firstname'];?>

                    </a>
                </li>
                	<?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='lastname'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=lastname&alpha=<?php echo $_smarty_tpl->tpl_vars['current_symbol']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['language']->value['lastname'];?>

                    </a>
                </li>
                <?php }else{ ?>
                	<?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='name'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=name"><?php echo $_smarty_tpl->tpl_vars['language']->value['firstname'];?>
</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='lastname'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=lastname"><?php echo $_smarty_tpl->tpl_vars['language']->value['lastname'];?>
</a>
                </li>
                <?php }?>
                </ul>
            </div>
			<div class="sort_wrapper <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
            	<span><?php echo $_smarty_tpl->tpl_vars['language']->value['sort_by'];?>
:</span>
                <ul>
                <?php if ($_smarty_tpl->tpl_vars['current_symbol']->value){?>
                	<?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='name'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>                
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=name&alpha=<?php echo $_smarty_tpl->tpl_vars['current_symbol']->value;?>
">
                    	<?php echo $_smarty_tpl->tpl_vars['language']->value['firstname'];?>

                    </a>
                </li>
                	<?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='lastname'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=lastname&alpha=<?php echo $_smarty_tpl->tpl_vars['current_symbol']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['language']->value['lastname'];?>

                    </a>
                </li>
                <?php }else{ ?>
                	<?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='name'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=name"><?php echo $_smarty_tpl->tpl_vars['language']->value['firstname'];?>
</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='lastname'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=lastname"><?php echo $_smarty_tpl->tpl_vars['language']->value['lastname'];?>
</a>
                </li>
                <?php }?>
                </ul>
            </div>
        <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
        <div class="post_item">
        
			<div class="post_desc list">
            	<div class="thumbnail">            	
                    <?php if ($_smarty_tpl->tpl_vars['info_item']->value->thumbnail){?>
                    <img src="images/<?php echo $_smarty_tpl->tpl_vars['info_item']->value->thumbnail;?>
" class="post_thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value->title;?>
"/>
                    <?php }else{ ?>
                    <img src="img/no_image.jpg" class="post_thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value->title;?>
"/>
                    <?php }?>
                </div>
            	<h2 class="post_title <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value->id;?>
" class="list_title">
                		<?php echo $_smarty_tpl->tpl_vars['info_item']->value->title;?>
</a>
                </h2>
                <?php echo $_smarty_tpl->tpl_vars['info_item']->value->description;?>

                
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value->id;?>
" class="read_more <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
			</div>
			
			<div class="full stroke"></div>
		</div>
        <?php } ?>
	</div>
    <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
    <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?><?php }} ?>