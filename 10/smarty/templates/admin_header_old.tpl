<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webshop Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container">
  <div class="row">
    <header class="col-md-12 bg-dark-gray">

      <a href="admin.php" class="col-md-10 text-left">Admin home</a>

      {* navbar only when the admin is logged in *}
      {if $logged_in}
          {include file="admin_navbar.tpl"}
      {/if}

    </header>
  </div>

  <div class="row">
    <div class="col-md-12">
      {* success/error messages *}
      {if $msg != ""}
      <p class="alert alert-danger" role="alert">
          {if $msg == "error_login_empty"}Missing username or password{/if}
          {if $msg == "error_login_invalid"}Invalid username or password{/if}
          {if $msg == "error_product_form"}The form contains errors{/if}
          {if $msg == "success_product_mod"}Modifications successfully saved{/if}
          {if $msg == "success_product_add"}New product successfully added{/if}
      </p>
      {/if}
    </div>
  </div>
