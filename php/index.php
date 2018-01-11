<html lang="en">
  <head>
    <title>Task 1</title>
  </head>
  <body>

<table border=1>

  <tr>
     <th>category</th>
     <th>type</th>
     <th>location</th>
     <th>outcode</th>
   </tr>

<?php
# Our Current Location
$location = ['51.301819','-0.337613']; # longitude and latitude

$link = mysqli_connect("localhost","root","root","postboxes");
$result = $link->query("SELECT * FROM boxes WHERE lat LIKE '%51%' AND lng LIKE '%-0.33%' LIMIT 10");
$output = "<table>";
while($row = mysqli_fetch_array($result)) {
  $output .= "<tr>";
    $output .= "<td>".$row['category']."</td>";
    $output .= "<td>".$row['type']."</td>";
    $output .= "<td>".$row['location']."</td>";
    $output .= "<td>".$row['depot']."</td>";
    $output .= "<td>".$row['outcode']."</td>";
    $output .= "<td>Collected At: ".$row['collection']."</td>";
  $output .= "</tr>";
}

echo $output;

?>

</body>

</html>
