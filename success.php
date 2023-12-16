<?php 
$title= 'Success';
require_once 'includes/header.php'; 
require_once 'db/conn.php'; 

if(isset($_POST['submit'])){
  $fname=$_POST['firstname'];
  $lname=$_POST['lname'];
  $dob=$_POST['dob'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $issuccess= $crud->insertattendees($fname, $lname, $dob, $email, $contact, $specialty);

  if($issuccess){
    echo <h1 class= "text-center text-success"> You have been successfully registered! </h1>

  }
  else{
    echo <h1 class= "text-center text-danger"> There was an error processing your registeration! </h1>

  }
}
?>





<div class="card" style="width: 18rem;">
 <div class="card-body">
    <h5 class="card-title">
    <?php echo $_POST['firstname'] . ' ' . $_POST ['lastname']; ?>
        </h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">
    <?php echo $_POST ['specialty']; ?>
    </h6>
    <p class="card-text">
     Date of Birth <?php echo $_POST ['dob']; ?>
    </p>

    <p class="card-text">
    Email address <?php echo $_POST ['email']; ?>
    </p>

    <p class="card-text">
    Contact Number <?php echo $_POST['phone']; ?>
    </p>

    
  </div>
</div> 

<?php
echo $_POST['firstname']; 
echo $_POST['lastname']; 
echo $_POST['dob'];
echo $_POST['specialty'];
echo $_POST['email'];
echo $_POST['phone'];
?>

<br><br><br><br><?php require_once 'includes/footer.php'; ?>
 