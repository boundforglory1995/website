<?php /* Smarty version Smarty-3.1.19, created on 2014-09-18 20:52:34
         compiled from "Views\get_tourdata.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7852541ad90cc6f8a0-60784311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7357ebc1ad5d6169e486acf320d6ceda1e91f3b' => 
    array (
      0 => 'Views\\get_tourdata.tpl',
      1 => 1411066352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7852541ad90cc6f8a0-60784311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541ad90ccbb040_03117677',
  'variables' => 
  array (
    'secheadTour' => 0,
    'tourdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541ad90ccbb040_03117677')) {function content_541ad90ccbb040_03117677($_smarty_tpl) {?><style>
body{
background-color:#2c3e50;		

	
}
#sectiontour{
color: white;
text-align: center;
width: 304px;
height: auto 0;
margin: auto;
padding: 0 auto;
font-size:15px;
border:30px solid transparent;
border-image:url("Images/border.png") 35 35 round;
  
	
	-webkit-animation-name: sectiontour;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-duration: 4s;

    animation-name:sectiontour ;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-duration: 4s;

    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;
 

  
  }

 /* WebKit and Opera browsers */
  @-webkit-keyframes sectiontour {
    from { -webkit-transform: rotateY(10deg);    }
    to   { -webkit-transform: rotateY(-160deg); }
  }

  /* all other browsers */
  @keyframes sectiontour {
    from {
      -moz-transform: rotateY(50deg);
      -ms-transform: rotateY(50deg);
      transform: rotateY(50deg);
    }
    to {
      -moz-transform: rotateY(-120deg);
      -ms-transform: rotateY(-120deg);
      transform: rotateY(-120deg);
    }
  }
	
	
	
}



   
  }
#sectiontour:hover {
    -webkit-animation-play-state: paused;
    animation-play-state: paused;
}
</style>
     
    <?php  $_smarty_tpl->tpl_vars['tourdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tourdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secheadTour']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tourdata']->key => $_smarty_tpl->tpl_vars['tourdata']->value) {
$_smarty_tpl->tpl_vars['tourdata']->_loop = true;
?>
	
	<section id="content">
	<article>
    <h1><?php echo $_smarty_tpl->tpl_vars['tourdata']->value['header'];?>
</h1>
	<section id="sectiontour"><?php echo $_smarty_tpl->tpl_vars['tourdata']->value['section'];?>
</section>
    </article>
	</section>
	 
	<?php } ?>
	
	

<?php }} ?>
