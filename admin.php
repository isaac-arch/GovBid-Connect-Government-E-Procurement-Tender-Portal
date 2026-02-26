<?php include("includes/header.php"); ?>

<div class="section">
<h2>Admin - Publish Tender</h2>

<?php
if(isset($_POST['publish'])){
$title=$_POST['title'];
$description=$_POST['description'];

$data="<strong>$title</strong><br>$description<br><hr>";
file_put_contents("data/tenders.txt",$data,FILE_APPEND);

echo "<p>Tender Published Successfully.</p>";
}
?>

<form method="POST">
<input type="text" name="title" placeholder="Tender Title" required>
<textarea name="description" placeholder="Tender Description" required></textarea>
<button type="submit" name="publish" class="btn" onclick="return confirmAction()">Publish</button>
</form>

</div>

<?php include("includes/footer.php"); ?>