<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 14:50:41
         compiled from "Views\get_picca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22406541c0447d12fd3-79589446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93e739c1ba650a45912f7ca9039df4a820811c7c' => 
    array (
      0 => 'Views\\get_picca.tpl',
      1 => 1411131038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22406541c0447d12fd3-79589446',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c0447e5b528_27773924',
  'variables' => 
  array (
    'setPicca' => 0,
    'pica' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c0447e5b528_27773924')) {function content_541c0447e5b528_27773924($_smarty_tpl) {?><style>

body{
background-color:black;	
	
}


#img1{
float:left;
margin : 20px 19px -29px 50px;
text-align:center;
border: solid #000;
}

</style>

 
       

	    
	
		
	
              
    		<?php  $_smarty_tpl->tpl_vars['pica'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pica']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setPicca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pica']->key => $_smarty_tpl->tpl_vars['pica']->value) {
$_smarty_tpl->tpl_vars['pica']->_loop = true;
?>
	         
               </li>
               

   				<img id="img1" height="300" width="300"   src="Images/<?php echo $_smarty_tpl->tpl_vars['pica']->value['path_picas'];?>
" />
                
                 
               
              
	            </li>
               
					<?php } ?>
	
             
		
	
              
       
		 
       <?php }} ?>
