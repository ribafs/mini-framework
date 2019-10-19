<div class="container">
    <h2 class="text-center">Customers</h2>
    <!--<b>You are in the View: application/view/customers/index.php (everything in this box comes from that file)</b><br>-->
    <!-- add customer form -->

    <div class="box">
        <br>
        <form class="form-inline" action="<?php echo URL; ?>customers/add" method="POST">   
        <table class="table table-hover table-stripped">
            <tr><td><label>Name</label></td>
            <td><input class="form-control" type="text" name="name" value="" required /></td>
            <td><label>E-mail</label></td>
            <td><input class="form-control" type="email" name="email" value="" required /></td>
            <td><label>Birthday</label></td>
            <td><input class="form-control" type="date" name="birthday" value="" /></td>
            <td><input type="submit" name="submit_add_customer" value="Add Customer" class="btn btn-primary btn-sm"/></td></tr>
		</table>
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <br>
        
        <b>List of customers (data from model)</b><div class="text-right"><b>Amount of customers: <?php echo $amount_of_customers; ?></b></div>
        <table class="table table-hover table-stripped">
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>E-mail</td>
                <td>Birthday</td>
                <td colspan="2" align="center">ACTIONS</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($customers as $customer) { ?>
                <tr>
                    <td><?php if (isset($customer->id)) echo htmlspecialchars($customer->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($customer->name)) echo htmlspecialchars($customer->name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($customer->email)) echo htmlspecialchars($customer->email, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($customer->birthday)) echo htmlspecialchars($customer->birthday, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a href="<?php echo URL . 'customers/delete/' . htmlspecialchars($customer->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'customers/edit/' . htmlspecialchars($customer->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
