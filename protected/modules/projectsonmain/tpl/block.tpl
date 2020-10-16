{if $projects}
<div class="projects_onMain">
	<h2 class="projectsOnMain__title">Уже создали:</h2>
	<div class="projects__firstTable">
		<table>
			{foreach from=$projects item=project name=proj}
				{if $smarty.foreach.proj.iteration == 1}
				<tr>
					<td class="projectsFirstTable__first" colspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>					
				{/if}
				{if $smarty.foreach.proj.iteration == 2}
					<td class="projectsFirstTable__second">
						{include file="./proj_td_content.tpl"}	
					</td>
				{/if}
				{if $smarty.foreach.proj.iteration == 3}
					<td class="projectsFirstTable__third" rowspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>
				{/if}
				{if $smarty.foreach.proj.iteration == 4}
				<tr>
					<td class="projectsFirstTable__fourth">
						{include file="./proj_td_content.tpl"}	
					</td>
				{/if}
				{if $smarty.foreach.proj.iteration == 5}
					<td class="projectsFirstTable__fifth" colspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>	
				{/if}
			{/foreach}
		</table>
	</div>	
	<div class="projects__secondTable">
		<table>
			{foreach from=$projects item=project name=proj}
				{if $smarty.foreach.proj.iteration == 6}
				<tr>
					<td class="projectsSecondTable__first" rowspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				{/if}
				{if $smarty.foreach.proj.iteration == 7}
					<td class="projectsSecondTable__second">
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>
				{/if}
				{if $smarty.foreach.proj.iteration == 8}
				<tr>
					<td class="projectsSecondTable__third" rowspan=2>
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>
				{/if}
				{if $smarty.foreach.proj.iteration == 9}
				<tr>
					<td class="projectsSecondTable__fourth">
						{include file="./proj_td_content.tpl"}	
					</td>
				</tr>
				{/if}
				
			{/foreach}
		</table>
	</div>
	<div class="goto__allProjects">
		<a href="/proekty">Все наши проекты тут</a>
	</div>
	
</div>
{/if}