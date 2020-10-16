{strip}
{include file="./components/meta.tpl"}
<!--  -->
<!--  -->
<!--  -->
<!-- определение цвета темы -->
{assign var="theme" value="dark"}
{if $uri[0] == '1'}
    {assign var="theme" value="light"}
{/if}
<!--  -->
<div class="loader" id="loader"></div>
<!--  -->
{include file="./components/drop_down_contacts.tpl"}
<!--  -->
<!--  -->
<main class="app app__{$theme}">
    <!--  -->
    <!-- header -->
    {include file="./components/header.tpl"}
    <!-- /header -->		
    <!--  -->
    <!-- content -->
    {$_page.content}
    <!-- /content -->
    <!--  -->
    <!-- footer -->
    {include file="./components/footer.tpl"}
    <!-- /footer -->
    <!--  -->
</main>
{include file="./components/auth_panel.tpl"}
{include file="./components/brif.tpl"}
{include file="./components/scripts.tpl"}
{/strip}