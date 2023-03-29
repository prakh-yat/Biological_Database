<head>
<title>Data</title>
<style>
  *{
     background:#fcefd0; /*linear-gradient(to right, #fcefd0 20%,  #91a9f7 80%); */
  }
table{
  border-top:4px;
  border-left: 4px;
  border-bottom:4px;
  border-right:4px;
}
  th{
font-family: 'Ubuntu', sans-serif;
font-size: 20px;
color:black ;
border-color:black;
}
td{
font-family: 'Ubuntu', sans-serif;
font-size: 10px; 
color:black ;  
border-color:black;
}
</style>

<body>
<?php

$id=$_POST['id'];
$keywords=$_POST['keywords'];
$description=$_POST['description'];
$name=$_POST['name'];
$type=$_POST['type'];
$reference=$_POST['reference'];
$date=$_POST['date'];

$con = mysqli_connect("localhost","root","","cancer");

// echo "<h1>$keywords - test</h1>";
// echo "<h1>$id - id</h1>";


$sql = "select * from dataa where id='$id' or (keywords like '%$id%' or name like '%$id%' or description like '%$id%' or type like'%$id%');";
// " select * from data where match (keywords) against ('$keywords' in natural language mode)";
$result = mysqli_query($con,$sql);


if ($result->num_rows > 0) {
  echo "<table width='100%' border='2'><tr><th>Type</th><th>ID</th><th>Name</th><th>Description</th><th width='4%'>Date</th><th>Keywords</th><th>Reference</th></tr>";

    while($row = $result->fetch_assoc()) {
       
        echo "<tr><td>".$row["type"]."</td><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["description"]."</td><td>".$row["date"]."</td><td>".$row["keywords"]."</td><td>".$row["reference"]."</td></tr>";
        // echo 
        // "Type: " . $row["type"]. "<br>"."<br>".
        // "ID: " . $row["id"]. "<br>"."<br>".
        // "Name: " . $row["name"]."<br>"."<br>".
        // "Description: " . $row["description"]. "<br>"."<br>".
        // "Date: " . $row["date"]."<br>"."<br>".
        // "Keywords: " . $row["keywords"]."<br>"."<br>".
        // "Reference: " . $row["reference"]."<br>"."<br>"
        // ;
    }
    echo "</table>";
  } else {
    echo "No results";
  }
  $con->close();
?>
</body>
</head>
