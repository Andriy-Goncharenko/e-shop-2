<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 14.05.2017
 * Time: 14:22
 */

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
    }
}

/**
 * Функция отображения главной странице
 * @param $s
 * @param $DB
 */
function index($s, $db)
{
    //SQL Запрос
    $sql = 'SELECT * FROM `product` WHERE `show` = 1';
    $items = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    $s->assign('items', $items);
    $s->display('index.tpl');
}