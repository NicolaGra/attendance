<?php 
$title= 'View Records';

require_once'includes/header.php'; 
require_once 'db/conn.php';

$results = $crud->getAttendees();
?>

<table class="table">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Email Address</th>
            <th>Contact Number</th>
            <th>Specialty</th>
            <th>Actions</th>
        </tr>
        <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
                <td><?php echo $r['attendee_id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <td><?php echo $r['dateofbirth'] ?></td>
                <td><?php echo $r['emailaddress'] ?></td>
                <td><?php echo $r['contactnumber'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td><a href="view.php" class="btn-primary">View</a></td>
        </tr>
        <?php }?>
</table>


<br>
<br>
<br>
<br>
<?php require_once'includes/footer.php'; ?>