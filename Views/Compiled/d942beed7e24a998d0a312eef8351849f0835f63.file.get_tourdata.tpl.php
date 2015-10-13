<?php /* Smarty version Smarty-3.1.19, created on 2015-10-08 20:12:17
         compiled from "Views\get_tourdata.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1584355f7c39eb8fac6-67821413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd942beed7e24a998d0a312eef8351849f0835f63' => 
    array (
      0 => 'Views\\get_tourdata.tpl',
      1 => 1444327904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1584355f7c39eb8fac6-67821413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f7c39eba3132_91889962',
  'variables' => 
  array (
    'secheadTour' => 0,
    'tourdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7c39eba3132_91889962')) {function content_55f7c39eba3132_91889962($_smarty_tpl) {?>
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
