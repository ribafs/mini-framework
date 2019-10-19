<div class="container">
    <h1>Customers</h1>
    <h2>You are in the View: application/view/customers/index.php (everything in this box comes from that file)</h2>
    <!-- add customer form -->

    <div class="box">
        <h3>Add a customer</h3>
        <form action="<?php echo URL; ?>customers/add" method="POST">
            <label>Name</label>
            <input type="text" name="name" value="" required />
            <label>E-mail</label>
            <input type="email" name="email" value="" required />
            <label>Birthday</label>
            <input type="date" name="birthday" value="" />
            <input type="submit" name="submit_add_customer" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of customers: <?php echo $amount_of_customers; ?></h3>
        <h3>List of customers (data from model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>E-mail</td>
                <td>Birthday</td>
                <td>DELETE</td>
                <td>EDIT</td>
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
