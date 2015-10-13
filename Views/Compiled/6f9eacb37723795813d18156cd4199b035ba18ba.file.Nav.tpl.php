<?php /* Smarty version Smarty-3.1.19, created on 2015-10-08 19:47:35
         compiled from "Views\Nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28973561687f69e0de5-17864073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f9eacb37723795813d18156cd4199b035ba18ba' => 
    array (
      0 => 'Views\\Nav.tpl',
      1 => 1444326445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28973561687f69e0de5-17864073',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561687f6a337e2_72390826',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561687f6a337e2_72390826')) {function content_561687f6a337e2_72390826($_smarty_tpl) {?>	

		<nav class="clearfix">

				<ul class="clearfix">

                <li><a href="?action=home">Home</a></li>
				<li><a href="?action=video">Music/Videos</a></li>	
				<li><a href="?action=pictures">Pictures</a></li>
				<li><a href="?action=tour">Tours</a></li>
				<li><a href="?action=contact">Contact Me</a></li>
				<li><a href="?action=about">About Us</a></li>
                <li><a href="https://www.facebook.com/sleepingwithsirensband">Facebook</a></li>
                <li><a><img id="logo" src="./Images/logo.png" alt="logo"></a></li>
                 <div id="search_box">
	    
	     
	       <form method='post' action='Views/result.php'>
	       <input type="text" name="get_val" id="find" placeholder="Enter Your Text Here">
	       <input type="submit" name="search" id="search" value="Search">
	       </form>

	       <div id="search_items">
	       </div>
	    
	  </div>
			</ul>

           <a href="#" id="pull">Menu</a>
		</nav>



<?php }} ?>
