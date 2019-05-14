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

$result = mysqli_query($db,"SELECT * FROM textsummary where article_no = '$a' ");
if (!$result) {
    die("Query to show fields from table failed");
}
echo "<center>";


// printing table rows
if($b=='text_rank')
{
  while($row = mysqli_fetch_array($result))
{
	$m1=$row['article_text'];
  $m2=$row['text_rank'];
}   

    echo "</tr>\n";
}

if($b=='lexical')
{
  while($row = mysqli_fetch_array($result))
{
  $m1=$row['article_text'];
  $m2=$row['lexical'];
}   

    echo "</tr>\n";
}
if($b=='lda')
{
  while($row = mysqli_fetch_array($result))
{
  $m1=$row['article_text'];
  $m2=$row['lda'];
}   

    echo "</tr>\n";
}
if($b=='lsi')
{
  while($row = mysqli_fetch_array($result))
{
  $m1=$row['article_text'];
  $m2=$row['lsi'];
}   

    echo "</tr>\n";
}
if($b=='plsi')
{
  while($row = mysqli_fetch_array($result))
{
  $m1=$row['article_text'];
  $m2=$row['plsi'];
}   

    echo "</tr>\n";
}
if($b=='Proposed_Model')
{
  while($row = mysqli_fetch_array($result))
{
  $m1=$row['article_text'];
  $m2=$row['Proposed_Model'];
}   

    echo "</tr>\n";
}

mysqli_free_result($result);

echo "<div class='card border-success mb-3' style='max-width: 20rem;''>
  <div class='card-header'>TEXT</div>
  <div class='card-body'>
    
    <p class='card-text'>$m1</p>
  </div> </div>";

echo "<div class='card border-success mb-3' style='max-width: 20rem;''>
  <div class='card-header'>$b</div>
  <div class='card-body'>
    
    <p class='card-text'>$m2</p>
  </div>";


echo "</center>";

// $sql = "truncate prediction;";

// if($db->query($sql))
// {

// }



?>
</body></html>