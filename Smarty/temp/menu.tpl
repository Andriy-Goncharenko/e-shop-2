<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="./">Главная</a></li>
        {foreach $catalog as $item}
            <li><a href="./?page=catalog&id={$item['id']}">{$item['name']}</a></li>
        {/foreach}
    </ul>
    <ul class="icons">
        <li><a href="./?page=basket" class="icon fa-shopping-basket"><span class="label">Корзина</span></a></li>
    </ul>
</nav>