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
$result = mysqli_query($db,"SELECT algo , method_name , article ,$b FROM accuracyscore where article = '$a' order by method_name ");
if (!$result) {
    die("Query to show fields from table failed");
}
echo "<center>";


// printing table rows
$fields_num = mysqli_num_fields($result);


echo "<br><br><br>";
echo "<h1>Table:</h1>";


echo "<table class = 'table table-hover ' border='1'><tr class ='table-default'>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysqli_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysqli_fetch_row($result))
{
    echo "<tr class ='table-default'>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysqli_free_result($result);

?>
</body></html>