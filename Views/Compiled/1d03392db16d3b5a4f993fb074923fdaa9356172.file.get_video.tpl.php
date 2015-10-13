<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 10:26:51
         compiled from "Views/get_video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87334883556177a4bb404a4-18015217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d03392db16d3b5a4f993fb074923fdaa9356172' => 
    array (
      0 => 'Views/get_video.tpl',
      1 => 1444378467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87334883556177a4bb404a4-18015217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'setVideo' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56177a4bb90f68_21793128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56177a4bb90f68_21793128')) {function content_56177a4bb90f68_21793128($_smarty_tpl) {?>
              
    		<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setVideo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
	         
           <div class="my_container">
 		 <ul>
              
	         <li class="block">
            <iframe width="560" height="315" src="<?php echo $_smarty_tpl->tpl_vars['video']->value['video_path'];?>
" frameborder="1" allowfullscreen></iframe>
            
            </li>
        </ul>
    </div>
       
					<?php } ?>
	
             
		<?php }} ?>
