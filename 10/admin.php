<?php
/**
 * Webshop admin
 */

// make sure errors are displayed
ini_set("display_errors", 1);
error_reporting(E_ALL);

define("SMARTY_DIR", "../../Smarty-3.1.21/libs/"); // edit this according to your local settings
define("PROJECT_DIR", "");

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

require("mysql.php");

require("Login.class.php");
$login = new Login($mysqli);

require("Products.class.php");
$products = new Products($mysqli);

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";

// display message from the last operation
$msg = isset($_REQUEST['msg']) ? $_REQUEST['msg'] : "";
$smarty->assign("msg", $msg);
// reset message
$msg = "";

// login
if ($page == "login") {
    $username = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
    $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
    if ($username == "" || $password == "") {
        $msg = "error_login_empty";
    } else if (!$login->login($username, $password)) {
        $msg = "error_login_invalid";
    } else {
        // successful login
    }
    // redirect to admin page and display messages if error
    header("location: admin.php?msg=" . $msg);
}

// if logged in -- admin functionality
if ($login->isLoggedIn()) {
    $smarty->assign("logged_in", 1);

    switch ($page) {
        // logout
        case "logout":
            $login->logout();
            // redirect back to login page
            header("location: admin.php");
            break;

        // product listing page
        case "products":
            // this displays only the static parts
            // content is loaded using AJAX using product_list.php
            $smarty->display("admin_products.tpl");
            break;

        // add or modify product
        case "product":
            include("product.php");
            break;

        // index page
        default:
            $smarty->display("admin_index.tpl");
            break;
    }
} // if not logged in -- login screen
else {
    $smarty->assign("logged_in", 0);
    $smarty->display("admin_login.tpl");
}

// close MySQL connection
$mysqli->close();
