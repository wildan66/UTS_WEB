<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Uts</title>
</head>
<body>
<?php
// mengisis array dengan variabel
$No             = array(1,2,3,);
$Nama           = array("Cristiano Messi","Bejo Leonardo","Alfa Midi");
$Tinggi_Badan   = array(180, 167,190);
$Posisi         = array("Striker","Midfielder","Defender");

 
// hitung total array
$totalArray = count($No);
 
echo '<table class="table table-bordered table-striped">';
echo "<tr>";
echo "<th>No</th>";
echo "<th>Nama</th>";
echo "<th>Tinggi Badan</th>";
echo "<th>Posisi</th>";
echo "</tr>";
// looping datanya
for ($i=0; $i < $totalArray; $i++) { 
  echo "<tr>";
  echo "<td>$No[$i]</td>";
  echo "<td>$Nama[$i]</td>";
  echo "<td>$Tinggi_Badan[$i]</td>";
  echo "<td>$Posisi[$i]</td>";
  echo "</tr>";
}
echo "</table>";
 
?>
</body>
</html>