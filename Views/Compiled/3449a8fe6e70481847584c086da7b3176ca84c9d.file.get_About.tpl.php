<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 10:18:34
         compiled from "Views/get_About.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7004310535617785a6170d2-44465926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3449a8fe6e70481847584c086da7b3176ca84c9d' => 
    array (
      0 => 'Views/get_About.tpl',
      1 => 1444378467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7004310535617785a6170d2-44465926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5617785a7002d8_33233426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5617785a7002d8_33233426')) {function content_5617785a7002d8_33233426($_smarty_tpl) {?>
      <div class="banner_about"></div>

				<div id='cssmenu'>
<ul>
   <li class='active'><a href='#'><span>Alone</span></a></li>
   <li class='has-sub'><a href='#'><span>Feel</span></a>
      
   </li>
   <li class='has-sub'><a href='#'><span>More</span></a>
      
   </li>
  
</ul>
</div>
       <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
	
   


 
   
	  
	  <h2 class="headerh2"><?php echo $_smarty_tpl->tpl_vars['j']->value['headerAbout'];?>
</h2>
	  <p class="headerP"><?php echo $_smarty_tpl->tpl_vars['j']->value['sectionAbout'];?>
</p>
		<?php } ?>




  
	



<?php }} ?>
