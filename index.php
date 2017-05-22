<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 14.05.2017
 * Time: 14:22
 */
if (!session_id()) {
    session_start();
}
//Подключаем Шаблони затор Smarty
require_once('Smarty/libs/Smarty.class.php');

// Адрес от BD
$host = '127.0.0.1';
//Название базы
$db = 'e-shop';
//Имя пользователя от BD
$user = 'root';
// Пороль от BD
$pass = '';
//Кодировка от BD
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    //Подключаемся к BD
    $DB = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die('Подключение к DB удалось: ' . $e->getMessage());
}

/**
 * Настраиваем Smarty
 * @link http://www.smarty.net/
 */
$smarty = new Smarty;
$smarty->template_dir = 'Smarty/temp';
$smarty->compile_dir = 'Smarty/temp_c';
$smarty->config_dir = 'Smarty/configs';
$smarty->cache_dir = 'Smarty/cache';
$smarty->caching = false;
$smarty->force_compile = true;
$smarty->compile_check = false;

//Получаем адрес страницы
$page = isset($_GET['page']) ? $_GET['page'] : 'index';

load($page, $smarty, $DB);

/**
 * Функция отписовки страниц
 * @param $p
 * @param $s
 * @param $DB
 */
function load($p, $s, $db)
{
    switch ($p) {
        case 'index': {
            index($s, $db);
            break;
        }
        case 'catalog': {
            catalog($s, $db);
            break;
        }
        case 'product': {
            product($s, $db);
            break;
        }
        case 'basket': {
            basket($s, $db);
            break;
        }
    }
}

/**
 * Меню сайта
 */
function menu($s, $db)
{

    //SQL Запрос
    $sql = 'SELECT * FROM `catalog` WHERE `p_id` = 0';
    $catalogs = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    $s->assign('catalog', $catalogs);
}

/**
 * Функция отображения главной странице
 * @param $s
 * @param $DB
 */
function index($s, $db)
{
    menu($s, $db);
    //SQL Запрос
    $sql = 'SELECT * FROM `product` WHERE `show` = 1';
    $items = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    $s->assign('items', $items);
    $s->display('index.tpl');
}

/**
 * @param $s
 * @param $db
 * Перегод в катологи и выборка по каталогом
 */
function catalog($s, $db)
{
    menu($s, $db);
    $page = isset($_GET['id']) ? $_GET['id'] : null;
    if ($page > 0) {
        //SQL Запрос
        $sql = 'SELECT * FROM `product` WHERE `parent_id` =' . $page;

        $items = $db->query($sql);
        if ($items) {
            $items = $items->fetchAll(PDO::FETCH_ASSOC);
            if (count($items) > 0) {
                $s->assign('items', $items);
                $s->display('catalogs.tpl');
            } else {
                $s->display('empty.tpl');
            }
        } else {
            $s->display('empty.tpl');
        }
    } else {
        header('Location:./');
    }
}

function product($s, $db)
{
    menu($s, $db);
    $page = isset($_GET['id']) ? $_GET['id'] : null;
    if ($page > 0) {
        //SQL Запрос
        $sql = 'SELECT * FROM `product` WHERE `id` =' . $page;

        $item = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC)[0];
        if ($item) {
            $s->assign('item', $item);
            $s->display('product.tpl');

        } else {
            $s->display('empty.tpl');
        }
    } else {
        header('Location:./');
    }
}

/**
 * Заказ клиента
 * @param $s
 * @param $db
 */
function basket($s, $db)
{
    menu($s, $db);
    $str = '';
    $l = count($_SESSION['basket']);

    $flag = $l - 1;
    if ($l > 0) {
        for ($i = 0; $i < $l; $i++) {
            if ($flag === $i) {
                $str .= $_SESSION['basket'][$i];
            } else {
                $str .= $_SESSION['basket'][$i] . ',';
            }
        }
        $sql = 'SELECT `product`.id,`product`.name,`product`.price,`product`.description FROM `product` WHERE `id` IN (' . $str . ')';
        $items = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $sum = 0;
        foreach ($items as $v) {
            $sum += $v['price'];
        }
        $s->assign('items', $items);
        $s->assign('sum', $sum);
        $s->display('basket.tpl');

    } else {
        $s->display('empty.tpl');
    }
}

//Добавить товар в корзину
if (isset($_POST['basket'])) {
    if (!is_array($_SESSION['basket'])) {
        $_SESSION['basket'] = [];
    } else {
        array_push($_SESSION['basket'], $_POST['basket']);
    }
}
//Добоавление товара в стол заказао
if (isset($_GET['save'])) {
    $l = count($_SESSION['basket']);
    $str = '';
    $flag = $l - 1;
    for ($i = 0; $i < $l; $i++) {
        if ($flag === $i) {
            $str .= $_SESSION['basket'][$i];
        } else {
            $str .= $_SESSION['basket'][$i] . ',';
        }
    }

    $sql = "INSERT INTO `Order_table` (`id`, `name`, `address`, `phone`, `price`, `id_products`) VALUES (NULL, '{$_POST['name']}', '{$_POST['adr']}', '{$_POST['tel']}', '{$_POST['sum']}', '{$str}')";
    echo $sql;
    $db->query($sql);
    $_SESSION['basket'] = [];
    echo 'Ваш заказ принят';
}