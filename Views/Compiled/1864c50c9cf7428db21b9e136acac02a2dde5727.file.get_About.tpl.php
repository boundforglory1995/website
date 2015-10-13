<?php /* Smarty version Smarty-3.1.19, created on 2015-10-08 17:10:23
         compiled from "Views\get_About.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1671656126ff8bd0952-30725253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1864c50c9cf7428db21b9e136acac02a2dde5727' => 
    array (
      0 => 'Views\\get_About.tpl',
      1 => 1444317020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1671656126ff8bd0952-30725253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56126ff8c7db05_15271586',
  'variables' => 
  array (
    'result' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56126ff8c7db05_15271586')) {function content_56126ff8c7db05_15271586($_smarty_tpl) {?>
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
