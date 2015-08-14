{include file="admin_header.tpl"}

<h1>{if $product_id > 0}Modify{else}Add new{/if} product</h1>

<form action="admin.php" method="POST" class="form-horizontal">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="name" placeholder="New product" value="{$name}">
    </div>
  </div>
  <div class="form-group">
    <label for="desc" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-4">
      <textarea name="desc" rows="4" class="form-control" id="desc" placeholder="This is amazing">{$desc}</textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="price" value="{$price}">
    </div>
  </div>
  <div class="form-group">
    <label for="bonus_price" class="col-sm-2 control-label">Bonus price</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="bonus_price" value="{$bonus_price}">
    </div>
  </div>
  <div class="form-group">
    <label for="photo" class="col-sm-2 control-label">Photo</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="photo" value="{$photo}" placeholder="newproduct.png"">
    </div>
  </div>
  <input type="hidden" name="product_id" value="{$product_id}" />
  <input type="hidden" name="page" value="product" />
  <input type="hidden" name="action" value="do" />
  <div class="form-group">
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary">{if $product_id > 0}Modify{else}Add new{/if} product</button>
    </div>
  </div>
</form>

{include file="admin_footer.tpl"}
