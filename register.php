<?php include("includes/header.php"); ?>

<div class="section">
<h2>Contractor Registration</h2>

<?php
if(isset($_POST['register'])){
$name=$_POST['name'];
$email=$_POST['email'];
$company=$_POST['company'];

$data="Name: $name | Email: $email | Company: $company \n";
file_put_contents("data/contractors.txt",$data,FILE_APPEND);

echo "<p>Registration Successful.</p>";
}
?>

<form method="POST">
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email Address" required>
<input type="text" name="company" placeholder="Company Name" required>
<button type="submit" name="register" class="btn">Register</button>
</form>

</div>

<?php include("includes/footer.php"); ?>