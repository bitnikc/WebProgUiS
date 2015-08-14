<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webshop Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Bootstrap style -->
    <script src="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css">


    <script>
      $(document).ready(function() {
        $('#productsdb').dataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "product_list.php"
    } );
    } );
    </script>
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
                {* navbar only when the admin is logged in *}
                {if $logged_in}
                    {include file="admin_navbar.tpl"}
                {/if}
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container" role="main">

    {* success/error messages *}
    {if $page_errors}
        <div class="alert alert-danger" role="alert">
            {foreach $page_errors as $error}
                <p>{$error}</p>
            {/foreach}
        </div>
    {/if}
