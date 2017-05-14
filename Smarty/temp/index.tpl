<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>TELEPHONILKA</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/snackbar.min.css"/>
    <link rel="stylesheet" href="assets/css/material.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>
<body class="is-loading">

<!-- Wrapper -->
<div id="wrapper" class="fade-in">

    <!-- Intro -->
    <div id="intro">
        <h1>Telephonilka</h1>
        <p>Сайт создан студентами <a href="https://vk.com/andriy_gonharenko">@Гончаренко</a> <a
                    href="https://vk.com/bumpua">@Харченко</a> <a href="https://vk.com/id267849887">@Беседин</a></p>
        <ul class="actions">
            <li><a href="#nav" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
        </ul>
    </div>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="index.html">Главная</a></li>
            <li><a href="#">Телефоны</a></li>
            <li><a href="#">Планшеты</a></li>
            <li><a href="#">Ноутбуки</a></li>
        </ul>
        <ul class="icons">
            <li><a href="#" class="icon fa-shopping-basket"><span class="label">Корзина</span></a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Posts -->
        <section class="posts">
            {foreach $items as $item}
                <article>
                    <header>
                        <h2><a href="#">{$item['name']}</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="{$item['img']}" alt=""/></a>
                    <p>{$item['description']}<br>
                        <strong>Цена : {$item['price']} грн</strong>
                    </p>
                    <ul class="actions">
                        <li><a href="#" class="button">Просмотр</a></li>
                        <li><a onclick="send({$item['id']})" class="button">Купить</a></li>
                    </ul>
                </article>
            {/foreach}
        </section>
    </div>

    <!-- Copyright -->
    <div id="copyright">
    </div>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/snackbar.min.js"></script>

</body>
</html>