<html><head><title>MySQL Table Viewer</title>
<link rel="stylesheet" href="css/bootstrap1.css"></head><body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
           
  </div>
</nav>

<br><br>
<?php
include ('config.php');

// sending query
$a= $_POST['ID'];
$b= $_POST['model'];
$c= $_POST['type'];

$result = mysqli_query($db,"SELECT * FROM accuracyscore where article = '$a' AND  algo= '$b' AND method_name= '$c' ");
if (!$result) {
    die("Query to show fields from table failed");
}
echo "<center>";


// printing table rows
while($row = mysqli_fetch_array($result))
{
	$m1=$row['pre'];
  $m2=$row['recall'];
   $m3=$row['f1_score']; 

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
 
    


    echo "</tr>\n";
}
mysqli_free_result($result);

echo "<div class='card border-success mb-3' style='max-width: 20rem;''>
  <div class='card-header'>Precision</div>
  <div class='card-body'>
    
    <p class='card-text'>$m1</p>
  </div> </div>";

echo "<div class='card border-success mb-3' style='max-width: 20rem;''>
  <div class='card-header'>Recall</div>
  <div class='card-body'>
    
    <p class='card-text'>$m2</p>
  </div></div>";
echo "<div class='card border-success mb-3' style='max-width: 20rem;''>
  <div class='card-header'>Accuracy Score</div>
  <div class='card-body'>
    
    <p class='card-text'>$m3</p>
  </div></div>";

echo "</center>";

// $sql = "truncate prediction;";

// if($db->query($sql))
// {

// }



?>
</body></html>