<?php
// app/addons/product_second_description/func.php

function fn_product_second_description_update_product($product_data, $product_id, $lang_code): void
{
    if (!empty($product_data['product_second_description'])) {
        db_query("REPLACE INTO ?:product_descriptions ?e", [
            'product_id' => $product_id,
            'lang_code' => $lang_code,
            'product_second_description' => $product_data['product_second_description']
        ]);
    }
}

function fn_product_second_description_get_product($product_id, $lang_code): string
{
    return db_get_field("SELECT product_second_description FROM ?:product_descriptions WHERE product_id = ?i AND lang_code = ?s", $product_id, $lang_code);
}

function fn_product_second_description_product_tabs($tabs, $product, $auth) {
    $second_description = fn_product_second_description_get_product($product['product_id'], CART_LANGUAGE);

    if ($second_description) {
        $tabs['product_second_description'] = array(
            'title' => __('product_second_description'),
            'content' => $second_description,
        );
    }

    return $tabs;
}

function fn_product_second_description_product_update_fields($fields, $product_data, $product_id, $lang_code) {
    $fields['product_second_description'] = array(
        'name' => 'product_second_description',
        'value' => !empty($product_data['product_second_description']) ? $product_data['product_second_description'] : '',
        'type' => 'textarea',
        'label' => __('product_second_description'),
        'extra' => 'class="span12" rows="4"',  // Optional, to set the textarea size
    );
    return $fields;
}
