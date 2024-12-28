<?php

use Tygh\Registry;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($mode === 'update') {
        $product_id = isset($_REQUEST['product_id']) ? (int) $_REQUEST['product_id'] : 0;
        $second_description = isset($_REQUEST['product_data']['product_second_description']) ? trim($_REQUEST['product_data']['product_second_description']) : '';
        if ($product_id) {
            db_query('UPDATE ?:product_descriptions SET second_description = ?s WHERE product_id = ?i', $second_description, $product_id);
        }
    }
}

if ($mode === 'update') {
    $product_id = isset($_REQUEST['product_id']) ? (int) $_REQUEST['product_id'] : 0;

    if ($product_id) {
        $second_description = db_get_field('SELECT second_description FROM ?:product_descriptions WHERE product_id = ?i', $product_id);
        Tygh::$app['view']->assign('product_data.second_description', $second_description);
    }
}
