{include file="admin_header.tpl"}

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

{include file="admin_footer.tpl"}
