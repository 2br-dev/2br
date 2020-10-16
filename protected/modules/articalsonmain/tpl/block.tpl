{if $articals}
<div class="articals__onMain">
	<h2>Нам есть, что сказать</h2>
	{foreach from=$articals item=artical}
	<div class="articalOnMain__item w50">
		<div class="articalOnMain__image">
			<img src="{$artical.file_replaced}" alt="{$artical.title}" title="{$artical.title}">
		</div>
		<div class="articalOnMain__text">
			<div class="articalOnMain__title"><a href="/stati/{$artical.link}">{$artical.title}</a></div>
			<div class="articalOnMain__anons">
				{$artical.anons}
			</div>
			<div class="articalOnMain__date">
				<p>{$artical.date}</p>
			</div>
		</div>
	</div>
	{/foreach}	
</div>
{/if}