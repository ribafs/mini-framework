<div class="container">
    <h2>You are in the View: application/view/customers/edit.php (everything in this box comes from that file)</h2>
    <!-- add customer form -->
    <div>
        <h3>Edit a customer</h3>
        <form action="<?php echo URL; ?>customers/update" method="POST">
            <label>Name</label>
            <input autofocus type="text" name="name" value="<?php echo htmlspecialchars($customer->name, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>E-mail</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($customer->email, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Birthday</label>
            <input type="date" name="birthday" value="<?php echo htmlspecialchars($customer->birthday, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="customer_id" value="<?php echo htmlspecialchars($customer->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_customer" value="Update" />
        </form>
    </div>
</div>

