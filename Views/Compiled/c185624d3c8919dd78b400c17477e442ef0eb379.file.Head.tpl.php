<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 10:16:00
         compiled from "Views/Head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:919290250561777c09c8a70-62197943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c185624d3c8919dd78b400c17477e442ef0eb379' => 
    array (
      0 => 'Views/Head.tpl',
      1 => 1444378467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '919290250561777c09c8a70-62197943',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561777c0a3e773_22818864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561777c0a3e773_22818864')) {function content_561777c0a3e773_22818864($_smarty_tpl) {?><html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <title>Band Page</title>
		
    
		<link href="css/style.css" rel="stylesheet"/>


          
  
   <script>

window.addEventListener('load',function(){
     $(document).ready(function(){
      $( "#find" ).keyup(function(){
         fetch();
      });
   });
     $('#logo').click(function(e) {
    e.preventDefault();
    //do other stuff when a click happens
});

   function fetch()
   {
  
      
      
      var val = document.getElementById( "find" ).value;
      if(val !=""){
      
      
      
      $.ajax({
         type: 'post',
         url: 'Views/result.php',
         data: {
            get_val:val
         },
         success: function (response) {
            document.getElementById( "search_items" ).innerHTML = response; 
         }
      });
    }

   }
  
   $(function() {
    var pull        = $('#pull');
        menu        = $('nav ul');
        menuHeight  = menu.height();
 
    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });

       });


   $(window).resize(function(){
    var w = $(window).width();
    if(w > 320 && menu.is(':hidden')) {

        menu.removeAttr('style');
    }
}); 

});
   </script>
	</head>
	<body>
	
  <?php }} ?>
