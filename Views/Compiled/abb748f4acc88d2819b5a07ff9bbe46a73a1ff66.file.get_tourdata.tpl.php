<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 10:26:40
         compiled from "Views/get_tourdata.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45559281356177a40b67551-50335912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abb748f4acc88d2819b5a07ff9bbe46a73a1ff66' => 
    array (
      0 => 'Views/get_tourdata.tpl',
      1 => 1444378467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45559281356177a40b67551-50335912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'secheadTour' => 0,
    'tourdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56177a40bdfec6_09123465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56177a40bdfec6_09123465')) {function content_56177a40bdfec6_09123465($_smarty_tpl) {?>
   <div class="banner_tour"></div>
    
   

     <h2 id="title">Sleeping With Sirens Tour Dates</h2>
    <?php  $_smarty_tpl->tpl_vars['tourdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tourdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secheadTour']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tourdata']->key => $_smarty_tpl->tpl_vars['tourdata']->value) {
$_smarty_tpl->tpl_vars['tourdata']->_loop = true;
?>


    
	
    <table>
 
  <tr>
    <td id="info"><?php echo $_smarty_tpl->tpl_vars['tourdata']->value['section'];?>
</td>
    <td id="city">Orlando</td> 
    <td><input type="button" id="tickets" value="Tickets" title="Tickets"></td>
  </tr>
</table>
 </div>
  
  
   

  
	 
	<?php } ?>
	


<?php }} ?>
