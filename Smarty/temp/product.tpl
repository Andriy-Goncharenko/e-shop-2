<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Generic Page - Massively by HTML5 UP</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>
<body class="is-loading">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <a href="#" class="logo">Telephonilka</a>
    </header>

    {include file='menu.tpl'}

    <!-- Main -->
    <div id="main">


        <!-- Post -->
        <section>
                <h3>{$item['name']}</h3>
            <div class="row">
                <div class="6u 12u">
                    <div class="image main"><img src="{$item['img']}" alt=""/></div>
                </div>
                <div class="6u 12u">
                    <p>{$item['description']}</p>
                    <p>Цена : {$item['price']} руб</p>
                    <ul class="actions">
                        <li><a onclick="send({$item['id']})" class="button">Купить</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Copyright -->
<div id="copyright">
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