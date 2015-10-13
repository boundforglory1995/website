<?php /* Smarty version Smarty-3.1.19, created on 2015-09-23 09:42:28
         compiled from "Views\Slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:910855f7c28606c8b5-20463564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd381d1de32221a4e1687b23fa46d383b4fcf2473' => 
    array (
      0 => 'Views\\Slider.tpl',
      1 => 1442994145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '910855f7c28606c8b5-20463564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f7c2860751c7_21704488',
  'variables' => 
  array (
    'setPictures' => 0,
    'pictures' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7c2860751c7_21704488')) {function content_55f7c2860751c7_21704488($_smarty_tpl) {?>

       

	
		
		
	
              
    		<?php  $_smarty_tpl->tpl_vars['pictures'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pictures']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setPictures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pictures']->key => $_smarty_tpl->tpl_vars['pictures']->value) {
$_smarty_tpl->tpl_vars['pictures']->_loop = true;
?>
	
              
   				<img src="Images/<?php echo $_smarty_tpl->tpl_vars['pictures']->value['path'];?>
" />

    
	         
					<?php } ?>
	
             
		
	
              
       
<?php }} ?>
