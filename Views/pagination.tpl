	
<ul class="paginate pag1 clearfix">
{if $page_nr gt 1}


<li><a href='?home&page_nr={$page_nr-1}' >PREVIOUS</a></li>
{/if}
{if $page_nr neq $total}

<li><a href='?home&page_nr={$page_nr+1}'>NEXT</a></li>
{/if}



		
{for $i=1 to $total  }

{if $i eq $page_nr}
 <li class="current"><a>{$i}</a></li>

{else} <li><a href='?home&page_nr={$i}'class='page '>{$i}</a></li>	
{/if}
{/for}
</ul>


