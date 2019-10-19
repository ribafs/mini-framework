<div class="container">
    <h2 class="text-center">Products</h2>
    <!--<b>You are in the View: src/template/products/add.php (everything in this box comes from that file)</b><br>-->
    <!-- add customer form -->
    <div>
        <br>
        <form action="<?php echo URL; ?>products/add" method="POST">   
        <table class="table table-hover table-stripped">
            <tr><td><label>Description</label></td>
            <td><input class="form-control" type="text" name="description" value="" required /></td></tr>
            <td><label>Unity</label></td>
            <td><input class="form-control" type="text" name="unity" value="" required /></td></tr>
            <td><label>Date</label></td>
            <td><input class="form-control" type="date" name="date" value="" /></td></tr>
            <tr><td></td><td><input type="submit" name="submit_add_product" value="Add Product" class="btn btn-primary btn-sm"/></td></tr>
		</table>
        </form>
    </div>
</div>
