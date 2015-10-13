<?php /* Smarty version Smarty-3.1.19, created on 2014-09-17 11:34:27
         compiled from "Views\get_Section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13198541955a34fa0e3-25197903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd625465c5810e40a376ab8795e83835b983cb4e5' => 
    array (
      0 => 'Views\\get_Section.tpl',
      1 => 1410946465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13198541955a34fa0e3-25197903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'secHeaders' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541955a354d737_40930072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541955a354d737_40930072')) {function content_541955a354d737_40930072($_smarty_tpl) {?> 

   



     
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secHeaders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	
	<section id="content">
	<article>
    <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['header'];?>
</h1>
	<section><?php echo $_smarty_tpl->tpl_vars['item']->value['section'];?>
</section>
    </article>
	</section>
	 
	<?php } ?>
	
	


 
<?php }} ?>
