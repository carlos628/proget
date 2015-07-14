<?php

function getBodyContent() {
    switch (@$_GET['p']) {
        case 'produtos':
            include './_product-list.php';
            break;
        case 'especial':
            include './especial.php';
            break;
        case 'contato':
            include './contato.php';
            break;
        case 'user-form':
            include './_user-form.php';
            break;
        case 'user-welcome':
            include './index.php';
            break;
        case 'product-form':
            include './_product-form.php';
            break;
        default:
//            include 'product.php';
    }
}

function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    exit;
}

function newDbConnection() {
    return new mysqli('127.0.0.1', 'root', '', 'camisetas');
//    return new mysqli('192.168.33.11', 'root', 'root', 'exemplo-senac');
}
