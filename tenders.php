<?php include("includes/header.php"); ?>

<div class="section">
<h2>Available Tenders</h2>

<?php
$file="data/tenders.txt";
if(file_exists($file)){
$tenders=file($file);
foreach($tenders as $tender){
echo "<div class='card'>$tender</div>";
}
}else{
echo "<p>No tenders published yet.</p>";
}
?>
</div>

<?php include("includes/footer.php"); ?>