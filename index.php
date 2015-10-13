<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<?php   
include("lib/Smarty.class.php");
include("Includes/bootstrap.inc.php");
include("Includes/config.inc.php");
include("Includes/database.inc.php");

$templateParser->display("Views/Head.tpl");
$templateParser->display('Views/Nav.tpl'); 





$action = isset($_GET['action']) ? $_GET['action'] : "home";



 
switch($action){
  
  case'tour':
?>
 <script>
  $("li:nth-child(4)").css("background-color","red");
  </script>
  <?php
  include("Logic/Select_Tourdata.php");
  $templateParser->assign('secheadTour',$secheadTour);
  $templateParser->display('Views/get_tourdata.tpl');
	break;

  case'pictures':
   ?>
 <script>
  $("li:nth-child(3)").css("background-color","red");
  </script>
  <?php
 	$templateParser->assign('title','Picture Database');
	$templateParser->display("Views/picturetitle.tpl");
  include("Logic/Select_picas.php");
	$templateParser->assign('setPicca',$setPicca);
	$templateParser->display("Views/get_picca.tpl");
   break;

  case'video':
  ?>
 <script>
  $("li:nth-child(2)").css("background-color","red");
  </script>
  <?php
  include('Logic/Select_video.php');
    $templateParser->assign('setVideo',$setVideo);
    $templateParser->display("Views/get_video.tpl");
  break;

  case'contact':
  ?>
 <script>
  $("li:nth-child(5)").css("background-color","red");
  </script>
  <?php
  
  $templateParser->display('Views/contact.tpl');
  break;

  case'about':
        ?>
 <script>
  $("li:nth-child(6)").css("background-color","red");
  </script>
  <?php
    include("Logic/Select_About.php");
    $templateParser->assign('result',$secAbout);  
    $templateParser->display('Views/get_About.tpl');
    break;

  	case'home':
    
  	$page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
?>
<script>
$("li:first-child").css("background-color","red");
</script>
    <?php
  include('Views/result.php');
   
  	

  	include("Logic/Select_Pic.php");
    include("Logic/Select_Sections.php");
    

    $templateParser->assign('result',$secHeaders);
    $templateParser->assign('total',$total);
    $templateParser->assign('page_nr',$page_nr);
    $templateParser->display('Views/get_Section.tpl');
    break;




}






?>
</body>
</html>








