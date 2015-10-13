<?php /* Smarty version Smarty-3.1.19, created on 2014-09-11 11:28:23
         compiled from "Views\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134654116b375d6cf3-69273244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0ad8fa8da63db90db1e5c7627435917eecec1ba' => 
    array (
      0 => 'Views\\head.tpl',
      1 => 1410341779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134654116b375d6cf3-69273244',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54116b3771af45_14185728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54116b3771af45_14185728')) {function content_54116b3771af45_14185728($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Band Page</title>
		<link href="css/Slider.css" rel="stylesheet" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href="css/style.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
     

	</head>
     <script type="text/javascript">
  $(window).load(function() {
 $('.flexslider').flexslider();
     });
 </script>
 
 
<script type="text/javascript">
 $(window).load(function() {

   $('.flexslider').flexslider({

        animation: "slide"

        });

     });
 </script>
 
   <script type="text/javascript">
     $(window).load(function() {
     $('.flexslider').flexslider({

         animation: "slide",
         slideDirection: "vertical",

         });

     });
 </script>
    
    <script>
	$(function(){
		
	var pull = $('#pull');
		menu = $('#nav ul');
		menuHeight = menu.height();
		
	$(pull).on('click', function(e){	
		e.preventDefault();
		menu.slideToggle();
		
	});
		
		});
	$(window).resize(function(){
		var w = $(window).width();
		if(w >320 && menu.is(':hidden')){
			
		menu.removeAttr('style');	
		}
		
		
	});
	
	
	</script>
    <?php }} ?>
