<?php
/**
 * Admin add or modify product
 */

$product_id = isset($_REQUEST['product_id']) ? $_REQUEST['product_id'] : 0;
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
$errors = array();

// form is submitted
if ($action == "do") {
    // load input
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
    $desc = isset($_REQUEST['desc']) ? $_REQUEST['desc'] : "";
    $price = isset($_REQUEST['price']) ? $_REQUEST['price'] : 0;
    $bonus_price = isset($_REQUEST['bonus_price']) ? $_REQUEST['bonus_price'] : 0;
    $photo = isset($_REQUEST['photo']) ? $_REQUEST['photo'] : "";

    // TODO perform input checking
    if ($price == 0) {
        $errors['price'] = "Price cannot be empty!";
    }

    // no error
    if (count($errors) == 0) {
        // modify product
        if ($product_id > 0) {
            // TODO save modifications to DB

            $msg = "success_product_mod";
        } // add new product
        else {
            // TODO add product to DB

            // TODO set product_id to the id of the newly added product
            $product_id = 1;

            $msg = "success_product_add";
        }
    }
    else {
        $msg = "error_product_form";
    }

}
// form is displayed for the first time (not submitted)
else {
    // the loadProduct function is changed such that it returns the array with all the fields,
    // but with empty values, if the product is not in the database (like when product_id=0)
    $product = $products->loadProduct($product_id);
    $name = $product['name'];
    $desc = $product['description'];
    $price = $product['price'];
    $bonus_price = $product['bonus_price'];
    $photo = $product['photo'];
}

// displaying the form
$smarty->assign(array(
    "msg" => $msg,
    "errors" => $errors,
    "product_id" => $product_id,
    "name" => $name,
    "desc" => $desc,
    "price" => $price,
    "bonus_price" => $bonus_price,
    "photo" => $photo
));
$smarty->display("admin_product.tpl");
