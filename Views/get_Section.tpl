 

   
<div id="banner">
		<div class="container">
			<div class="title">
				<h2><span id="sleeping">Sleeping<span></h2> <h2 id="sirens">With Sirens</h2>

				 </div>


		</div>
	</div>



    {foreach from=$result item=x}
	

   
	  <div id="page" class="container">
	  	<div class="title">
	  <h2>{$x.header}</h2>
	  <span class="byline">{$x.section}</p>

		
  </div>
</div>

  
	{/foreach}
	{include file='pagination.tpl'}
	  <img src="./Images/img8.jpg" alt="" height="100" width="100" id="picture">
	
<footer><p>SchoolProject Made By Gianni Punt MD2A</p></footer>









