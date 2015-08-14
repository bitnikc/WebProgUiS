<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-14 12:12:55
         compiled from "smarty\templates\admin_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28711552b8f36b93b27-40010027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98ce4b5121b9ed00f6b5821f706e4c46f242a95e' => 
    array (
      0 => 'smarty\\templates\\admin_index.tpl',
      1 => 1429006373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28711552b8f36b93b27-40010027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552b8f36be3182_54171425',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b8f36be3182_54171425')) {function content_552b8f36be3182_54171425($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



  <div class="jumbotron">
    <h1>Admin main page</h1>
    <p>Navigate the admin page with the top menu.</p>
  </div>

<?php echo $_smarty_tpl->getSubTemplate ("admin_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
