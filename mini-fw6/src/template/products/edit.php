<div class="container">
    <h2 class="text-center">Product</h2>
    <!--<h5>You are in the View: src/template/products/edit.php (everything in this box comes from that file)</h5>-->
    <!-- add customer form -->
    <div>
		<br><br>

        <form action="<?php echo URL; ?>products/update" method="POST">   
        <table class="table table-hover table-stripped">
            <tr><td><label>Description</label></td>
            <td><input class="form-control" type="text" name="description" value="<?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>" required autofocus/></td></tr>
            <td><label>Unity</label></td>
            <td><input class="form-control" type="text" name="unity" value="<?php echo htmlspecialchars($product->unity, ENT_QUOTES, 'UTF-8'); ?>" required /></td></tr>
            <td><label>Date</label></td>
            <td><input class="form-control" type="date" name="date" value="<?php echo htmlspecialchars($product->date, ENT_QUOTES, 'UTF-8'); ?>" /></td></tr>
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <tr><td></td><td><input type="submit" name="submit_update_product" value="Update Product" class="btn btn-primary btn-sm"/></td></tr>
		</table>
        </form>
    </div>
</div>
<br><br><br>
