{include file="header.tpl"}

<main>

<section id="product_box">
    <div id="product_picture">
        <img src="img/{$product.photo}" />
        <div class="discount_box discount">
            -33%
        </div>
    </div>
    <div id="product_description">
        <h3>{$product.name}</h3>
        <p>{$product.description}</p>
        <form action="index.php" method="POST">
            <input type="hidden" name="page" value="add_to_cart" />
            <input type="hidden" name="product_id" value="{$product.product_id}" />
            <input type="hidden" name="qt" value="1" />
            <input type="submit" value="Add to cart" />
        </form>
        <div class="price">
            <span class="strike">&euro;{$product.price}</span>
            <span class="discount">&euro;{$product.bonus_price}</span>
        </div>
    </div>


</section>

</main>

{include file="footer.tpl"}
