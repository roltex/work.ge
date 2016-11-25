<?php /* Smarty version Smarty-3.1.13, created on 2016-11-14 19:00:51
         compiled from "C:\xampp\htdocs\works.ge\html\themes\default\templates\contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39545829e5250c2e69-17843160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9ff36571f590631d26d5d2fc033a5606df6aa27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\works.ge\\html\\themes\\default\\templates\\contact_page.tpl',
      1 => 1479146429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39545829e5250c2e69-17843160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5829e5251efb31_43852280',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'info_content' => 0,
    'notification' => 0,
    'error' => 0,
    'language' => 0,
    'phone' => 0,
    'email' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5829e5251efb31_43852280')) {function content_5829e5251efb31_43852280($_smarty_tpl) {?><div class="row">
    <div class="content clearfix">
        <h2 class="font-title"><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h2>
        <p class="txt-block"><?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>
</p>
        
        <div class="contact-wrap clearfix">
        <!--Form block (left bar)-->
            <div class=" col-md-6 left np">
                <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
                <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
                <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                <?php }?>
                <div class="form-wrap">
                    <form action="">
                        <input type="text" name="name" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
" />
                        <input type="text" name="email" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
" />
                        <input type="text" name="phone" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['phone'];?>
" />
                        <textarea name="message" id="" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['message'];?>
"></textarea>
                    </form>
                    
                    <a href="#" class="font-title send-btn"><?php echo $_smarty_tpl->tpl_vars['language']->value['send'];?>
</a>
        
                </div>
            </div>
            
            
            <!--Info wrap (right bar)-->
            <div class="info-wrap col-md-6 right np clearfix">
                <h3 class="font-title"><?php echo $_smarty_tpl->tpl_vars['language']->value['contact_information'];?>
</h3>
                <ul>
                    <li class="clearfix">
                        <span><i class="icon-menu_41"></i></span>
                        <div class="info"><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</div>
                    </li>
                    <li class="clearfix">
                        <span><i class="icon-menu_24"></i></span>
                        <div class="info"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</div>
                    </li>
                    <li class="clearfix">
                        <span><i class="icon-menu_34"></i></span>
                        <div class="info"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div><?php }} ?>