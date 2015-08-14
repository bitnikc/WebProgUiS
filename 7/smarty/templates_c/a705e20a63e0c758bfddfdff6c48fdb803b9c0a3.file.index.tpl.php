<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 13:49:46
         compiled from "./smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41186907455115d6a0acfd0-17237657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a705e20a63e0c758bfddfdff6c48fdb803b9c0a3' => 
    array (
      0 => './smarty/templates/index.tpl',
      1 => 1427187649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41186907455115d6a0acfd0-17237657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55115d6a1147a4_17537141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55115d6a1147a4_17537141')) {function content_55115d6a1147a4_17537141($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


Listing products:
<ul>
   <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
      <li>[ID: <a href="index.php?page=product&product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
</a>] <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
)</li>
   <?php } ?>
</ul>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
