<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 10:16:00
         compiled from "Views/Nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1956274662561777c0a4b276-79994029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85aa8dce2dffe915ef7b7bfb81934a0887ad4999' => 
    array (
      0 => 'Views/Nav.tpl',
      1 => 1444378467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1956274662561777c0a4b276-79994029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561777c0a4df24_07880044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561777c0a4df24_07880044')) {function content_561777c0a4df24_07880044($_smarty_tpl) {?>	

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
