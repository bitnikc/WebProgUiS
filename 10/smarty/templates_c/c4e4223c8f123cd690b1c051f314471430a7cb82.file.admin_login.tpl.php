<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-14 13:41:08
         compiled from "smarty\templates\admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7208552b8f2edfa7f4-33694213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4e4223c8f123cd690b1c051f314471430a7cb82' => 
    array (
      0 => 'smarty\\templates\\admin_login.tpl',
      1 => 1429010687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7208552b8f2edfa7f4-33694213',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552b8f2ef1d008_19430867',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8f2ef1d008_19430867')) {function content_552b8f2ef1d008_19430867($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1>Login</h1>
  <form action="admin.php" method="POST" class="form-horizontal">
    <div class="form-group">
      <label for="name_box" class="col-sm-2 control-label">Username</label>
      <div class="col-sm-2">
        <input type="text" name="username" id="name_box" class="form-control" />
      </div>
    </div>
    <div class="form-group">
      <label for="password_box" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-2">
        <input type="password" name="password" id="password_box" class="form-control" />
      </div>
    </div>
      <input type="hidden" name="page" value="login" />
    <div class="form-group">
      <div class="col-sm-offset-0 col-sm-10">
        <input type="submit" value="Login" class="btn btn-primary" />
      </div>
    </div>
  </form>

<?php echo $_smarty_tpl->getSubTemplate ("admin_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
