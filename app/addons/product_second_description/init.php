<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }
// Hook to add custom field on the product update page
fn_register_hooks(
    'product_update_fields'
);