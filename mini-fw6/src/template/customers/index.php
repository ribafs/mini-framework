<div class="container">
    <h2 class="text-center">Customers</h2>
    <!--<b>You are in the View: src/template/customers/index.php (everything in this box comes from that file)</b><br>-->
    <!-- main content output -->

	<a class="btn btn-primary btn-sm" href="<?=URL . 'customers/add'; ?>">Add Customer</a>

    <div>
        <br>        
        <b>List of customers (data from model)</b><div class="text-right"><b>Amount of customers: <?php echo $amount_of_customers; ?></b></div>
        <table class="table table-hover table-stripped">
            <thead>
            <tr class="bg-gray">
                <td><b>ID</b></td>
                <td><b>Name</b></td>
                <td><b>E-mail</b></td>
                <td><b>Birthday</b></td>
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
