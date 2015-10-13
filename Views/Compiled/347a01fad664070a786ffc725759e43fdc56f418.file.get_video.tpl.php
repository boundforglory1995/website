<?php /* Smarty version Smarty-3.1.19, created on 2015-10-07 19:35:07
         compiled from "Views\get_video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2247455f7d4eab79421-65171507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '347a01fad664070a786ffc725759e43fdc56f418' => 
    array (
      0 => 'Views\\get_video.tpl',
      1 => 1444239301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2247455f7d4eab79421-65171507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f7d4eabf2bf2_23624511',
  'variables' => 
  array (
    'setVideo' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7d4eabf2bf2_23624511')) {function content_55f7d4eabf2bf2_23624511($_smarty_tpl) {?>
              
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
