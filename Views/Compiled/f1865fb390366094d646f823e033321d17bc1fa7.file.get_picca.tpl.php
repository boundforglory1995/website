<?php /* Smarty version Smarty-3.1.19, created on 2015-09-30 09:07:40
         compiled from "Views\get_picca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1167755f7c3991b9217-29332525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1865fb390366094d646f823e033321d17bc1fa7' => 
    array (
      0 => 'Views\\get_picca.tpl',
      1 => 1443596803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1167755f7c3991b9217-29332525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f7c3991c5790_61161200',
  'variables' => 
  array (
    'setPicca' => 0,
    'pica' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7c3991c5790_61161200')) {function content_55f7c3991c5790_61161200($_smarty_tpl) {?>
       

	    
	
		
	
              
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
