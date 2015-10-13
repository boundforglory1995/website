<html>
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
	
  