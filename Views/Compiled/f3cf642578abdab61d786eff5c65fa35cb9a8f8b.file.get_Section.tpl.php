<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 10:16:00
         compiled from "Views/get_Section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1600735602561777c0a65427-69775956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3cf642578abdab61d786eff5c65fa35cb9a8f8b' => 
    array (
      0 => 'Views/get_Section.tpl',
      1 => 1444378467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1600735602561777c0a65427-69775956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561777c0a95440_93515646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561777c0a95440_93515646')) {function content_561777c0a95440_93515646($_smarty_tpl) {?> 

   
<div id="banner">
		<div class="container">
			<div class="title">
				<h2><span id="sleeping">Sleeping<span></h2> <h2 id="sirens">With Sirens</h2>

				 </div>


		</div>
	</div>



    <?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
?>
	

   
	  <div id="page" class="container">
	  	<div class="title">
	  <h2><?php echo $_smarty_tpl->tpl_vars['x']->value['header'];?>
</h2>
	  <span class="byline"><?php echo $_smarty_tpl->tpl_vars['x']->value['section'];?>
</p>

		
  </div>
</div>

  
	<?php } ?>
	<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	  <img src="./Images/img8.jpg" alt="" height="100" width="100" id="picture">
	
<footer><p>SchoolProject Made By Gianni Punt MD2A</p></footer>









<?php }} ?>
