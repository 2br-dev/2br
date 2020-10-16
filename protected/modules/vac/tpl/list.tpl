{strip}
{foreach from=$vac item=v}
  <div class="vac-content">
    <h2 class="vac-header">{$v.title}</h2>
    {$v.desc}
  </div>
{/foreach}
{/strip}
