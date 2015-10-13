<?php /* Smarty version Smarty-3.1.19, created on 2014-09-18 12:04:57
         compiled from "Views\Slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14521541aa05d0216b9-28615076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e23729402c35e118b2c7879a760889da697a41cf' => 
    array (
      0 => 'Views\\Slider.tpl',
      1 => 1411034692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14521541aa05d0216b9-28615076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541aa05d188d39_23427593',
  'variables' => 
  array (
    'setPictures' => 0,
    'pictures' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541aa05d188d39_23427593')) {function content_541aa05d188d39_23427593($_smarty_tpl) {?>
 <section id="wrapper">
       

	
		
		
	
              
    		<?php  $_smarty_tpl->tpl_vars['pictures'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pictures']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setPictures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pictures']->key => $_smarty_tpl->tpl_vars['pictures']->value) {
$_smarty_tpl->tpl_vars['pictures']->_loop = true;
?>
	
               </li>
   				<img src="Images/<?php echo $_smarty_tpl->tpl_vars['pictures']->value['path'];?>
" />

    
	            </li>
					<?php } ?>
	
             
		
	
              
       
		 
        </section>
       <?php }} ?>
