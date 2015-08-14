<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 13:57:18
         compiled from "./smarty/templates/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17050508755115f2ef20aa2-62353012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e9c29b17337e72004cf5f53e2c5fcb421c099f5' => 
    array (
      0 => './smarty/templates/product.tpl',
      1 => 1427187649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17050508755115f2ef20aa2-62353012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55115f2f0960f5_13070966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55115f2f0960f5_13070966')) {function content_55115f2f0960f5_13070966($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


Name: <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
 <br />
Description: <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
 <br />
Price: <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 <br />
Bonus price: <?php echo $_smarty_tpl->tpl_vars['product']->value['bonus_price'];?>
 <br />

<form action="index.php" method="POST">
    <input type="hidden" name="page" value="add_to_cart" />
    <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
" />
    <input type="hidden" name="qt" value="1" />
    <input type="submit" value="Add to shopping cart" />
</form>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
