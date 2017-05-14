<?php
/* Smarty version 3.1.32-dev-1, created on 2017-05-14 22:03:32
  from "C:\xampp\htdocs\Smarty\temp\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_5918b814836fd8_32553842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fad23b9df192dd2e1a06952b2d206b888c7082b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Smarty\\temp\\index.tpl',
      1 => 1494787211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5918b814836fd8_32553842 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <!-- Main -->
    <div id="main">

        <!-- Posts -->
        <section class="posts">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <article>
                    <header>
                        <h2><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt=""/></a>
                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
<br>
                        <strong>Цена : <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 грн</strong>
                    </p>
                    <ul class="actions">
                        <li><a href="#" class="button">Просмотр</a></li>
                        <li><a onclick="send(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)" class="button">Купить</a></li>
                    </ul>
                </article>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </section>
    </div>

    <!-- Copyright -->
    <div id="copyright">
    </div>

</div>

<!-- Scripts -->
<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/snackbar.min.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
