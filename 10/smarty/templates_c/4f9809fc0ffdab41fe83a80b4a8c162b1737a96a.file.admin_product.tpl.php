<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-14 13:40:45
         compiled from "smarty\templates\admin_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6002552b8f4dceec60-97271070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f9809fc0ffdab41fe83a80b4a8c162b1737a96a' => 
    array (
      0 => 'smarty\\templates\\admin_product.tpl',
      1 => 1429011641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6002552b8f4dceec60-97271070',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552b8f4dd9ab50_19156622',
  'variables' => 
  array (
    'product_id' => 0,
    'name' => 0,
    'desc' => 0,
    'price' => 0,
    'bonus_price' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8f4dd9ab50_19156622')) {function content_552b8f4dd9ab50_19156622($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1><?php if ($_smarty_tpl->tpl_vars['product_id']->value>0) {?>Modify<?php } else { ?>Add new<?php }?> product</h1>

<form action="admin.php" method="POST" class="form-horizontal">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="name" placeholder="New product" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    </div>
  </div>
  <div class="form-group">
    <label for="desc" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-4">
      <textarea name="desc" rows="4" class="form-control" id="desc" placeholder="This is amazing"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
">
    </div>
  </div>
  <div class="form-group">
    <label for="bonus_price" class="col-sm-2 control-label">Bonus price</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="bonus_price" value="<?php echo $_smarty_tpl->tpl_vars['bonus_price']->value;?>
">
    </div>
  </div>
  <div class="form-group">
    <label for="photo" class="col-sm-2 control-label">Photo</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="photo" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" placeholder="newproduct.png"">
    </div>
  </div>
  <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" />
  <input type="hidden" name="page" value="product" />
  <input type="hidden" name="action" value="do" />
  <div class="form-group">
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary"><?php if ($_smarty_tpl->tpl_vars['product_id']->value>0) {?>Modify<?php } else { ?>Add new<?php }?> product</button>
    </div>
  </div>
</form>

<?php echo $_smarty_tpl->getSubTemplate ("admin_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
