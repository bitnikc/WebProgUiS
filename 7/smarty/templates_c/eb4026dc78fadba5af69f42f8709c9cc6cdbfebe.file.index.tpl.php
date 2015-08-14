<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 13:21:17
         compiled from ".\smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120925506cabd34abf5-19361708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb4026dc78fadba5af69f42f8709c9cc6cdbfebe' => 
    array (
      0 => '.\\smarty\\templates\\index.tpl',
      1 => 1426507692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120925506cabd34abf5-19361708',
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
  'unifunc' => 'content_5506cabd3abc82_18723100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5506cabd3abc82_18723100')) {function content_5506cabd3abc82_18723100($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
