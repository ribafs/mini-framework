<div class="container">
    <h2>You are in the View: application/view/products/edit.php (everything in this box comes from that file)</h2>
    <!-- add customer form -->
    <div>
        <h3>Edit a product</h3>
        <form action="<?php echo URL; ?>products/update" method="POST">
            <label>Description</label>
            <input autofocus type="text" name="description" value="<?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Unity</label>
            <input type="text" name="unity" value="<?php echo htmlspecialchars($product->unity, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Date</label>
            <input type="date" name="date" value="<?php echo htmlspecialchars($product->date, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_product" value="Update" />
        </form>
    </div>
</div>

