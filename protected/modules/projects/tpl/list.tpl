<h1>Проекты</h1>
<div class="projects2018">
	<div class="prjectGroup__title">
		<h2>2018</h2>
	</div>
	<div class="projects">
		<table>
			{foreach from=$projects2018 item=project name=proj2018}
				{if $smarty.foreach.proj2018.iteration == 1}
				<tr>
					<td class="projectsTable__first" rowspan=2>
						{include file="./proj_td_content.tpl"}						
					</td>
				{/if}
				{if $smarty.foreach.proj2018.iteration == 2}
					<td class="projectsTable__second">
						{include file="./proj_td_content.tpl"}	
					</td>
				{/if}
				{if $smarty.foreach.proj2018.iteration == 3}				
					<td class="projectsTable__third">
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>
				{/if}
				{if $smarty.foreach.proj2018.iteration == 4}
				<tr>
					<td class="projectsTable__fourth" rowspan=2 colspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>
				{/if}
				{if $smarty.foreach.proj2018.iteration == 5}
				<tr>
					<td class="projectsTable__fifth">
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>
				{/if}				
			{/foreach}
		</table>
	</div>
</div>

<div class="projects2017">
	<div class="prjectGroup__title">
		<h2>2017</h2>
	</div>
	<div class="projects">
		<table>
			{foreach from=$projects2017 item=project name=proj2017}
				{if $smarty.foreach.proj2017.iteration == 1}
				<tr>
					<td class="projectsTable__first">
						{include file="./proj_td_content.tpl"}	
					</td>
				{/if}
				{if $smarty.foreach.proj2017.iteration == 2}
					<td class="projectsTable__second" rowspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				{/if}
				{if $smarty.foreach.proj2017.iteration == 3}				
					<td class="projectsTable__third"  rowspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>
				{/if}
				{if $smarty.foreach.proj2017.iteration == 4}
				<tr>
					<td class="projectsTable__fourth" rowspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>				
				{/if}
				{if $smarty.foreach.proj2017.iteration == 5}
				<tr>				
					<td class="projectsTable__fifth" colspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>
				{/if}							
			{/foreach}
		</table>
		<table>
			{foreach from=$projects2017 item=project name=proj2017}
				{if $smarty.foreach.proj2017.iteration == 6}
				<tr>				
					<td class="projectsTable__sixth">
						{include file="./proj_td_content.tpl"}	
					</td>				
				{/if}
				{if $smarty.foreach.proj2017.iteration == 7}								
					<td class="projectsTable__seventh" colspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>	
				{/if}
				{if $smarty.foreach.proj2017.iteration == 8}								
					<td class="projectsTable__eight" rowspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>				
				{/if}
				{if $smarty.foreach.proj2017.iteration == 9}
				<tr>								
					<td class="projectsTable__nineth" colspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>				
				{/if}
				{if $smarty.foreach.proj2017.iteration == 10}								
					<td class="projectsTable__tenth">
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>				
				{/if}				
			{/foreach}		
		</table>
	</div>
</div>

<div class="projects2016">
	<div class="prjectGroup__title">
		<h2>2016</h2>
	</div>
	<div class="projects">
		<table>
			{foreach from=$projects2016 item=project name=proj2016}
				{if $smarty.foreach.proj2016.iteration == 1}
				<tr>
					<td class="projectsTable__first" colspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				{/if}
				{if $smarty.foreach.proj2016.iteration == 2}
					<td class="projectsTable__second">
						{include file="./proj_td_content.tpl"}	
					</td>
				{/if}
				{if $smarty.foreach.proj2016.iteration == 3}				
					<td class="projectsTable__third"  rowspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>
				{/if}
				{if $smarty.foreach.proj2016.iteration == 4}
				<tr>
					<td class="projectsTable__fourth">
						{include file="./proj_td_content.tpl"}	
					</td>								
				{/if}
				{if $smarty.foreach.proj2016.iteration == 5}								
					<td class="projectsTable__fifth" rowspan=2 colspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>
				{/if}
				{if $smarty.foreach.proj2016.iteration == 6}
				<tr>
					<td class="projectsTable__sixth" rowspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>								
				{/if}	
				{if $smarty.foreach.proj2016.iteration == 7}				
					<td class="projectsTable__seventh">
						{include file="./proj_td_content.tpl"}							
					</td>
				</tr>								
				{/if}	
				{if $smarty.foreach.proj2016.iteration == 8}
				<tr>
					<td class="projectsTable__eight">
						{include file="./proj_td_content.tpl"}
					</td>								
				{/if}
				{if $smarty.foreach.proj2016.iteration == 9}				
					<td class="projectsTable__nineth" colspan=2>
						{include file="./proj_td_content.tpl"}							
					</td>
				</tr>								
				{/if}	
				{if $smarty.foreach.proj2016.iteration == 10}
				<tr>
					<td class="projectsTable__tenth" colspan=2>
						{include file="./proj_td_content.tpl"}
					</td>								
				{/if}	
				{if $smarty.foreach.proj2016.iteration == 11}				
					<td class="projectsTable__eleventh" rowspan=2>
						{include file="./proj_td_content.tpl"}
					</td>								
				{/if}	
				{if $smarty.foreach.proj2016.iteration == 12}				
					<td class="projectsTable__twelfth">
						{include file="./proj_td_content.tpl"}
					</td>
				</tr>								
				{/if}	
				{if $smarty.foreach.proj2016.iteration == 13}
				<tr>				
					<td class="projectsTable__thirteenth">
						{include file="./proj_td_content.tpl"}
					</td>												
				{/if}	
				{if $smarty.foreach.proj2016.iteration == 14}				
					<td class="projectsTable__fourteenth">
						{include file="./proj_td_content.tpl"}
					</td>												
				{/if}	
				{if $smarty.foreach.proj2016.iteration == 15}				
					<td class="projectsTable__fifteenth">
						{include file="./proj_td_content.tpl"}
					</td>	
				</tr>											
				{/if}		
			{/foreach}
		</table>		
	</div>
</div>

<div class="projects_before2015">
	<div class="prjectGroup__title">
		<h2>Проекты до 2015 года</h2>
	</div>
	<div class="projects">
		<table>
			{foreach from=$projectsbefore2015 item=project name=projbefore2015}
				{if $smarty.foreach.projbefore2015.iteration == 1}
				<tr>
					<td class="projectsTable__first">
						{include file="./proj_td_content.tpl"}
					</td>
				{/if}
				{if $smarty.foreach.projbefore2015.iteration == 2}
					<td class="projectsTable__second">
						{include file="./proj_td_content.tpl"}
					</td>
				{/if}
				{if $smarty.foreach.projbefore2015.iteration == 3}				
					<td class="projectsTable__third">
						{include file="./proj_td_content.tpl"}
					</td>				
				{/if}
				{if $smarty.foreach.projbefore2015.iteration == 4}				
					<td class="projectsTable__fourth">
						{include file="./proj_td_content.tpl"}
					</td>	
				</tr>							
				{/if}
				{if $smarty.foreach.projbefore2015.iteration == 5}	
				<tr>							
					<td class="projectsTable__fifth">
						{include file="./proj_td_content.tpl"}
					</td>				
				{/if}
				{if $smarty.foreach.projbefore2015.iteration == 6}
					<td class="projectsTable__sixth">
						{include file="./proj_td_content.tpl"}
					</td>								
				{/if}	
				{if $smarty.foreach.projbefore2015.iteration == 7}				
					<td class="projectsTable__seventh">
						{include file="./proj_td_content.tpl"}
					</td>											
				{/if}	
				{if $smarty.foreach.projbefore2015.iteration == 8}
					<td class="projectsTable__eight">
						{include file="./proj_td_content.tpl"}
					</td>
				</tr>								
				{/if}
				{if $smarty.foreach.projbefore2015.iteration == 9}
				<tr>				
					<td class="projectsTable__nineth">
						{include file="./proj_td_content.tpl"}
					</td>
				</tr>								
				{/if}					
			{/foreach}
		</table>		
	</div>
</div>