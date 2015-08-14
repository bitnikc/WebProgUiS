<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-15 01:10:28
         compiled from "smarty\templates\admin_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3197552b8f3d1ef331-36560334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3ff1e81b78a1edcb3db9c42cb6cffadd5864040' => 
    array (
      0 => 'smarty\\templates\\admin_products.tpl',
      1 => 1429051685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3197552b8f3d1ef331-36560334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552b8f3d2233d4_42058608',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8f3d2233d4_42058608')) {function content_552b8f3d2233d4_42058608($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1>Product list</h1>

<p>Here comes a DataTable with products. <a href="admin.php?page=product&product_id=1">This is the link for editing an existing product</a></p>

<table id="productsdb" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Bonus Price</th>
                <th>Photo</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Bonus Price</th>
                <th>Photo</th>
            </tr>
        </tfoot>
    </table>


<a href="admin.php?page=product"><button type="button" class="btn btn-primary">Add new product</button></a>

<?php echo $_smarty_tpl->getSubTemplate ("admin_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
