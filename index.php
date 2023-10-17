<?php
$server = 'localhost';
$username='root';
$password='';
$db_name='institute';

$conn = new mysqli($server,$username,$password,$db_name);

if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student_info";
$res = $conn->query($sql);

if($res->num_rows > 0)
{
   
  while($row = $res->fetch_assoc())
  {
     echo "ID:".$row['id'].' - Name'.$row['name'].'<br>';
  }
}
else
{
  echo 'Your Table is empty';
}



$conn->close();

?>