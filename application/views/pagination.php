<form method="post" action="http://localhost/CodeIgniter/index.php/pagination_ctrl/find_products">

    <!-- repeat for all product types -->
    <fieldset>
        <input type="checkbox" name="products[tshirt][active]" value="1" /> Tshirt

        <fieldset>
            <input type="checkbox" name="products[tshirt][size]" value="s" /> S
            <input type="checkbox" name="products[tshirt][size]" value="m" /> M
            <input type="checkbox" name="products[tshirt][size]" value="l" /> L
        </fieldset>
    </fieldset>
    <!-- end repeat -->

</form>