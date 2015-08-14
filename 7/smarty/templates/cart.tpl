<<<<<<< HEAD
{include file="header.tpl"}

<!--###############  SHOPPING CART  ##############-->

<main id="cart">
    <h2>
        Shopping Cart
    </h2>
    {$sum = 0}

    <table>
        <thead>
            <tr>
                <th colspan="2">Item</th>
                <th>Item price</th>
                <th>Quanitity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
          {foreach $products as $key => $qty}
            {foreach $items as $item}
              {if $item.product_id eq $key}
                {$prod = $item}
              {/if}
            {/foreach}
            {$sum = $sum + $qty*$prod.price}
            <tr>
                <td>
                    <img src="img/{$prod.photo}" />
                </td>
                <td>{$prod.name}</td>
                <td>&euro;{$prod.price}</td>
                <td>
                    {$qty}&nbsp;
                    <a href="#edit_amount"><i class="fa fa-pencil"></i></a>
                    <a href="#delete"><i class="fa fa-trash-o"></i></a>
                </td>
                <td>&euro;{$prod.price*$qty}</td>
            </tr>
          {/foreach}
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    Total
                </td>
                <td>
                    &euro;{$sum}
                </td>
            </tr>
        </tfoot>
    </table>

    <section id="checkout_section">
    <p>Click here to proceed to the checkout step.</p>
        <div id="checkout_button">
            <i class="fa fa-truck"></i>
            &nbsp;Checkout
        </div>
    </section>

</main>

{include file="footer.tpl"}
=======
{include file="header.tpl"}

<!--###############  SHOPPING CART  ##############-->

<main id="cart">
    <h2>
        Shopping Cart
    </h2>

    <table>
        <thead>
            <tr>
                <th colspan="2">Item</th>
                <th>Item price</th>
                <th>Quanitity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src="img/macagra.jpg" />
                </td>
                <td>Dead Autumn Essence</td>
                <td>&euro;19.99</td>
                <td>
                    1&nbsp;
                    <a href="#edit_amount"><i class="fa fa-pencil"></i></a>
                    <a href="#delete"><i class="fa fa-trash-o"></i></a>
                </td>
                <td>&euro;19.99</td>
            </tr>
            <tr>
                <td>
                    <img src="img/bottledpoe.jpg" />
                </td>
                <td>Bottled Poe Soul</td>
                <td>&euro;299.00</td>
                <td>
                    1&nbsp;
                    <a href="#edit_amount"><i class="fa fa-pencil"></i></a>
                    <a href="#delete"><i class="fa fa-trash-o"></i></a>
                </td>
                <td>&euro;19.99</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    Total
                </td>
                <td>
                    &euro;318.99
                </td>
            </tr>
        </tfoot>
    </table>

    <section id="checkout_section">
    <p>Click here to proceed to the checkout step.</p>
        <div id="checkout_button">
            <i class="fa fa-truck"></i>
            &nbsp;Checkout
        </div>
    </section>

</main>

{include file="footer.tpl"}
>>>>>>> aa71c5b36940040d9430822eca34c1e616676a97
