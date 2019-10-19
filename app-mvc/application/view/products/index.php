<div class="container">
    <h1>Products</h1>
    <h2>You are in the View: application/view/products/index.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div class="box">
        <h3>Add a product</h3>
        <form action="<?php echo URL; ?>products/add" method="POST">
            <label>Description</label>
            <input type="text" name="description" value="" required />
            <label>Unity</label>
            <input type="text" name="unity" value="" required />
            <label>Date</label>
            <input type="date" name="date" value="" />
            <input type="submit" name="submit_add_product" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of products: <?php echo $amount_of_products; ?></h3>
        <h3>List of products (data from model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Description</td>
                <td>Unity</td>
                <td>Date</td>
                <td>DELETE</td>
                <td>EDIT</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php if (isset($product->id)) echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($product->description)) echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($product->unity)) echo htmlspecialchars($product->unity, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($product->date)) echo htmlspecialchars($product->date, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a href="<?php echo URL . 'products/delete/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'products/edit/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
