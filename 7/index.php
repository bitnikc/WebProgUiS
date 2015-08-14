<?php
/**
 * Webshop
 */

// make sure errors are displayed
ini_set("display_errors", 1);
error_reporting(E_ALL);

// edit these two lines according to your local settings
define("SMARTY_DIR", "/home/stud/nicolas/public_html/Smarty-3.1.21/libs/");
define("PROJECT_DIR", "./");

// init Smarty
require(SMARTY_DIR . "Smarty.class.php");
$smarty = new Smarty();
$smarty->setTemplateDir(PROJECT_DIR . "smarty/templates");
$smarty->setCompileDir(PROJECT_DIR . "smarty/templates_c");
$smarty->setCacheDir(PROJECT_DIR . "smarty/cache");
$smarty->setConfigDir(PROJECT_DIR . "smarty/config");
//$smarty->testInstall();



// init session
session_start();

require("ShoppingCart.class.php");
$shopping_cart = new ShoppingCart();

require("Products.class.php");
$products = new Products();

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";

switch ($page) {
    // product page
    case "product":
        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "";
        $product_data = $products->loadProduct($product_id);
        if (empty($product_data)) {
            die("Invalid product ID!");
        }
        $smarty->assign("product", $product_data);
        $smarty->display("product.tpl");
        break;

    // add to shopping cart
    case "add_to_cart":
        if (isset($_POST['product_id'])) {
            // we always add one piece for now
            $qt = isset($_POST['qt']) ? $_POST['qt'] : 1;
            $shopping_cart->addProduct($_POST['product_id'], $qt);
        }
        // we don't have the break here on purpose so that the code continues
        // with displaying the contents of the shopping cart
        //break;

    // shopping cart
    case "show_cart":
        $product_list = $shopping_cart->getContents();
        $smarty->assign("products", $product_list);
        $smarty->assign("items", $products->listProducts());
        $smarty->display("cart.tpl");
        break;

    // index page
    default:
        $product_list = $products->listProducts();
        $smarty->assign("products", $product_list);
        $smarty->display("index.tpl");
        break;
}
