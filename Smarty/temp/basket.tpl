<!DOCTYPE HTML>

<html>
<head>
    <title></title>
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
        <a href="index.html" class="logo">Massively</a>
    </header>

    {include file='menu.tpl'}

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <section>
            <h3>Ваш Заказ</h3>
            <div class="row">
                <div class="6u 12u">
                    <div class="table-wrapper">
                        <table>
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Описания</th>
                                <th>Цена</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach $items as $item}
                                <tr class="items-{$item['id']}">
                                    <td> {$item['name']}</td>
                                    <td> {$item['description']}</td>
                                    <td> {$item['price']}</td>
                                    <td><a class="icon  fa-trash-o" onclick='del({$item['id']})'><span
                                                    class="label"></span></a></td>
                                </tr>
                            {/foreach}
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="2"></td>
                                <td>{$sum}</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="6u 12u$(small)">
                    <div class="12u">
                        <input type="text" id="name" value="" placeholder="Ваше имя">
                    </div>
                    <br>
                    <div class="12u">
                        <input type="text" id="tel" value="" placeholder="Ваше телефон">
                    </div>
                    <br>
                    <div class="12u">
                        <input type="text" id="adr" value="" placeholder="Адрес доставки">
                    </div>
                    <br>
                    <div class="12u">
                        <ul class="actions vertical">
                            <li><a onclick="save()" class="button fit">Заказать</a></li>
                        </ul>
                    </div>
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

</body>
</html>