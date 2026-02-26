<?php include("includes/header.php"); ?>

<div class="section">
<h2>Submit Bid Proposal</h2>

<?php
if(isset($_POST['submit'])){
$bidder=$_POST['bidder'];

$targetDir="uploads/";
$fileName=basename($_FILES["document"]["name"]);
$targetFile=$targetDir.$fileName;

if(move_uploaded_file($_FILES["document"]["tmp_name"],$targetFile)){
$data="Bidder: $bidder | File: $fileName \n";
file_put_contents("data/bids.txt",$data,FILE_APPEND);
echo "<p>Bid submitted successfully.</p>";
}else{
echo "<p>File upload failed.</p>";
}
}
?>

<form method="POST" enctype="multipart/form-data">
<input type="text" name="bidder" placeholder="Company Name" required>
<input type="file" name="document" required>
<button type="submit" name="submit" class="btn">Submit Bid</button>
</form>

</div>

<?php include("includes/footer.php"); ?>