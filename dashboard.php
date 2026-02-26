<?php include("includes/header.php"); ?>

<div class="section">
<h2>Transparency Dashboard</h2>

<h3>Registered Contractors</h3>
<?php
if(file_exists("data/contractors.txt")){
foreach(file("data/contractors.txt") as $c){
echo "<div class='card'>$c</div>";
}
}
?>

<h3>Submitted Bids</h3>
<?php
if(file_exists("data/bids.txt")){
foreach(file("data/bids.txt") as $b){
echo "<div class='card'>$b</div>";
}
}
?>

</div>

<?php include("includes/footer.php"); ?>