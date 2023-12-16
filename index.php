
<?php 
$title= 'Index';
require_once'includes/header.php'; 
require_once 'db/conn.php';

$results = $crud->getSpecialties();
?>


    <h1  class="text-center"> Registration for IT Conference </h1>

<form method="post" action="success.php">
    <div class="form-group">
      <label for="firstname"> Firstname </label>
      <input type="text" class="form-control" id="firstname" name="firstname">
       </div>
       
<div class="form-group">
       <label for="lastname"> Lastname </label>
      <input type="text" class="form-control" id="Lastname" name="lastname">
    </div>

    <div class="form-group">
      <label for="Date of Birth"> Date of Birth </label>
      <input type="text" class="form-control" id="dob" name="dob">
    </div>

<div class="form-group">
  <label for="Specialty"> Area of Expertise </label>
  <select class="form control" id="exampleformcontrolselect" name="specialty">
  <?php while($r =$results->fetch(PDO::FETCH_ASSOC)) { ?>
    <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option> 

  <?php }?>
</div>

<div class="form-group">
       <label for="Email Address"> Email Address </label>
      <input type="text" class="form-control" id="email" name="email">
      <small id="emailhelp" class="form-text text-muted"> We will 
        never share your email with anyone else.</small>
    </div>

    <div class="form-group">
       <label for="Phone"> Contact Number </label>
      <input type="text" class="form-control" id="phone" name="phone">
      <small id="phonehelp" class="form-text text-muted"> We will 
        never share your contact information with anyone else.</small>
    </div>

<button type="submit" name="button"class ="btn btn-primary"> Submit </button>
</form>

<br>
<br>
<br>
<br>
<?php require_once'includes/footer.php'; ?>
    