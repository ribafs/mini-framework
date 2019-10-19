<div class="container">
    <h2 class="text-center">Customers</h2>
    <!--<h5>You are in the View: src/tempalte/customers/edit.php (everything in this box comes from that file)</h5>-->
    <!-- add customer form -->
    <div>
		<br><br>

        <form action="<?php echo URL; ?>customers/update" method="POST">   
        <table class="table table-hover table-stripped">
            <tr><td><label>Name</label></td>
            <td><input class="form-control" type="text" name="name" value="<?php echo htmlspecialchars($customer->name, ENT_QUOTES, 'UTF-8'); ?>" required autofocus/></td></tr>
            <td><label>E-mail</label></td>
            <td><input class="form-control" type="email" name="email" value="<?php echo htmlspecialchars($customer->email, ENT_QUOTES, 'UTF-8'); ?>" required /></td></tr>
            <td><label>Birthday</label></td>
            <td><input class="form-control" type="date" name="birthday" value="<?php echo htmlspecialchars($customer->birthday, ENT_QUOTES, 'UTF-8'); ?>" /></td></tr>
            <input type="hidden" name="customer_id" value="<?php echo htmlspecialchars($customer->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <tr><td></td><td><input type="submit" name="submit_update_customer" value="Update Customer" class="btn btn-primary btn-sm"/></td></tr>
		</table>
        </form>
    </div>
</div>
<br><br><br>
