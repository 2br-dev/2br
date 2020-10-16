<h1>{$project.title}</h1>
<div class="project__item">
	<div class="projectItem__header">
		<div class="content1000">
			<div class="w50">
				<p><strong>Для кого: </strong>{$project.client}</p>
			</div>
			<div class="w50">
				<p><strong>Что было сделано: </strong>{$project.done}</p>
			</div>
		</div>
	</div>
	<div class="projectItem__body">
		{$project.text}	
	</div>	
</div>