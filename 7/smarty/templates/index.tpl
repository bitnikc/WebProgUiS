{include file="header.tpl"}


<main>
<!--
Listing products:
<ul>
   {foreach $products as $product}
      <li>[ID: <a href="index.php?page=product&product_id={$product.product_id}">{$product.product_id}</a>] {$product.name} ({$product.price})</li>
   {/foreach}
</ul>
-->

  {foreach $products as $product}
    <a href="index.php?page=product&product_id={$product.product_id}">
        <article class="shop-window">
            <img src="img/{$product.photo}"/>
            <h3>{$product.name}</h3>
            <div class="price">&euro;{$product.price}</div>
        </article>
    </a>
  {/foreach}

</main>

{include file="footer.tpl"}
