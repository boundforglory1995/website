<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 10:16:00
         compiled from "Views/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281957988561777c0a9e544-07870725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb4c71d5abcece62afb9d25fb8e475dea44d999' => 
    array (
      0 => 'Views/pagination.tpl',
      1 => 1444378467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281957988561777c0a9e544-07870725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_nr' => 0,
    'total' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561777c0af3446_25608566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561777c0af3446_25608566')) {function content_561777c0af3446_25608566($_smarty_tpl) {?>	
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
