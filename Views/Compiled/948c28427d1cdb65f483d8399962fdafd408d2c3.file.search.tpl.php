<?php /* Smarty version Smarty-3.1.19, created on 2015-10-06 15:37:05
         compiled from "Views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96215613741e2e7464-98172868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '948c28427d1cdb65f483d8399962fdafd408d2c3' => 
    array (
      0 => 'Views\\search.tpl',
      1 => 1444138620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96215613741e2e7464-98172868',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5613741e378e50_17555331',
  'variables' => 
  array (
    'setSeeking' => 0,
    'seeks' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613741e378e50_17555331')) {function content_5613741e378e50_17555331($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['seeks'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seeks']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setSeeking']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seeks']->key => $_smarty_tpl->tpl_vars['seeks']->value) {
$_smarty_tpl->tpl_vars['seeks']->_loop = true;
?>


     <p><?php echo $_smarty_tpl->tpl_vars['seeks']->value['searching'];?>
<p>
  
   

<?php } ?>


	

<?php }} ?>
