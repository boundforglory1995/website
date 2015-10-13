<?php /* Smarty version Smarty-3.1.19, created on 2015-10-07 17:49:19
         compiled from "Views\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2490256092d459b1952-89441462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf00e548f9c2da36f984bffc48aa2f52852ce3cf' => 
    array (
      0 => 'Views\\pagination.tpl',
      1 => 1444232953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2490256092d459b1952-89441462',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56092d459b48e3_50777820',
  'variables' => 
  array (
    'page_nr' => 0,
    'total' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56092d459b48e3_50777820')) {function content_56092d459b48e3_50777820($_smarty_tpl) {?>	
<ul class="paginate pag1 clearfix">
<?php if ($_smarty_tpl->tpl_vars['page_nr']->value>1) {?>


<li><a href='?home&page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value-1;?>
' >PREVIOUS</a></li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page_nr']->value!=$_smarty_tpl->tpl_vars['total']->value) {?>

<li><a href='?home&page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value+1;?>
'>NEXT</a></li>
<?php }?>



		
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>

<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['page_nr']->value) {?>
 <li class="current"><a><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>

<?php } else { ?> <li><a href='?home&page_nr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
'class='page '><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>	
<?php }?>
<?php }} ?>
</ul>


<?php }} ?>
