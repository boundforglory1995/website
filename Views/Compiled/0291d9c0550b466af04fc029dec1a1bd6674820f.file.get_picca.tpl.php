<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 10:26:54
         compiled from "Views/get_picca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183084743756177a4e950eb5-39222168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0291d9c0550b466af04fc029dec1a1bd6674820f' => 
    array (
      0 => 'Views/get_picca.tpl',
      1 => 1444378467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183084743756177a4e950eb5-39222168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'setPicca' => 0,
    'pica' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56177a4e96ac47_88615748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56177a4e96ac47_88615748')) {function content_56177a4e96ac47_88615748($_smarty_tpl) {?>
       

	    
	
		
	
              
    		<?php  $_smarty_tpl->tpl_vars['pica'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pica']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setPicca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pica']->key => $_smarty_tpl->tpl_vars['pica']->value) {
$_smarty_tpl->tpl_vars['pica']->_loop = true;
?>
	         
           <div class="my_container">
 		 <ul>
              
	         <li class="block">
            <a href="#"><img src="Images/<?php echo $_smarty_tpl->tpl_vars['pica']->value['path_picas'];?>
" />
            <span><?php echo $_smarty_tpl->tpl_vars['pica']->value['span'];?>
</span></a>
            </li>
        </ul>
    </div>
       
					<?php } ?>
	
             
		
	
              
       
		 
       <?php }} ?>
