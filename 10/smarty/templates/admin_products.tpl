{include file="admin_header.tpl"}

<h1>Product list</h1>

<p>Here comes a DataTable with products. <a href="admin.php?page=product&product_id=1">This is the link for editing an existing product</a></p>

<table id="productsdb" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Bonus Price</th>
                <th>Photo</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Bonus Price</th>
                <th>Photo</th>
            </tr>
        </tfoot>
    </table>


<a href="admin.php?page=product"><button type="button" class="btn btn-primary">Add new product</button></a>

{include file="admin_footer.tpl"}
