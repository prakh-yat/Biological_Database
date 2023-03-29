<?php
$type = $_POST['type'];
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$date = $_POST['date'];
$keywords = $_POST['keywords'];
$reference = $_POST['reference'];

echo $type;
echo $id;
echo $name;
echo $description;
echo $date;
echo $keywords;
echo $reference;

$con = mysqli_connect ("localhost","root","","cancer");

$sql = "insert into data(type,id,name,description,date,keywords,reference) values('".$type."','".$id."','".$name."','".$description."','".$date."','".$keywords."','".$reference."')";

mysqli_query ($con,$sql);
mysqli_close ($con);

?>

