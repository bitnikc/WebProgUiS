<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-15 00:45:00
         compiled from "smarty\templates\admin_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23873552b8f2f01abf8-06263554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a2b3ab4f3fd84f9e68ab1582d856d7eb7f1a6b8' => 
    array (
      0 => 'smarty\\templates\\admin_header.tpl',
      1 => 1429051383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23873552b8f2f01abf8-06263554',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552b8f2f0ac994_84942060',
  'variables' => 
  array (
    'logged_in' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8f2f0ac994_84942060')) {function content_552b8f2f0ac994_84942060($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Webshop Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- jQuery -->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="http://code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <!-- DataTables Bootstrap style -->
    <?php echo '<script'; ?>
 src="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="http://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css">


    <?php echo '<script'; ?>
>
      $(document).ready(function() {
        $('#productsdb').dataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "product_list.php"
    } );
    } );
    <?php echo '</script'; ?>
>
</head>
<body role="document">

  <!-- Fixed navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="admin.php">Webshop admin</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
                
                <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("admin_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container" role="main">

    
    <?php if ($_smarty_tpl->tpl_vars['msg']->value!='') {?>

    <div class="alert alert-<?php if (substr($_smarty_tpl->tpl_vars['msg']->value,0,1)=='e') {?>danger<?php } else { ?>success<?php }?>" role="alert">
        <?php if ($_smarty_tpl->tpl_vars['msg']->value=="error_login_empty") {?>Missing username or password<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['msg']->value=="error_login_invalid") {?>Invalid username or password<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['msg']->value=="error_product_form") {?>The form contains errors<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['msg']->value=="success_product_mod") {?>Modifications successfully saved<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['msg']->value=="success_product_add") {?>New product successfully added<?php }?>
    </div>
    <?php }?>
<?php }} ?>
