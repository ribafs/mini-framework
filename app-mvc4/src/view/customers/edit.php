<div class="container">
    <h2 class="text-center">Customers</h2>
    <!--<h5>You are in the View: application/view/customers/edit.php (everything in this box comes from that file)</h5>-->
    <!-- add customer form -->
    <div>
		<br>		<br>
        <form class="form-inline" action="<?php echo URL; ?>customers/update" method="POST">
            <label>Name&nbsp;&nbsp;</label>
            <input autofocus class="form-control" type="text" name="name" value="<?php echo htmlspecialchars($customer->name, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>&nbsp;&nbsp;E-mail</label>
            <input class="form-control" type="email" name="email" value="<?php echo htmlspecialchars($customer->email, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>&nbsp;&nbsp;Birthday</label>
            <input class="form-control" type="date" name="birthday" value="<?php echo htmlspecialchars($customer->birthday, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="customer_id" value="<?php echo htmlspecialchars($customer->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input class="btn btn-primary btn-sm" type="submit" name="submit_update_customer" value="Update Customer" />
        </form>
    </div>
</div>
<br><br><br>
