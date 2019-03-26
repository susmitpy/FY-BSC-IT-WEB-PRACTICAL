<?php
$conn = mysqli_connect("server", 'username', 'password');
if ($conn)
{
  echo "Connected to mysql succesfully<br>";
  $query = "CREATE DATABASE COMPANY";
  $create_db = mysqli_query($conn,$query);
  if ($create_db)
  {
    echo "Database Connected Succesfully<br>";
  }
  else {
    echo "Error in connecting to the database<br>";
  }
  mysqli_select_db($conn,"COMPANY");
  $query1 = "CREATE TABLE EMPLOYEES (
    Name VARCHAR(30) NOT NULL,
    ID INT(2)
  )";
  $create_table= mysqli_query($conn,$query1);
  if($create_table)
  {
    echo "Table Created Succesfully<br>";
  }
  else {
    echo "Error while creting a table<br>";
  }

  $query2_1 = "INSERT INTO EMPLOYEES (Name, ID) VALUES ('Python', 01)";
  $query2_2 = "INSERT INTO EMPLOYEES (Name, ID) VALUES ('Susmit', 03)";

  $insert_values1 = mysqli_query($conn, $query2_1);
  $insert_values2 = mysqli_query($conn, $query2_2);

  if($insert_values1 && $insert_values2)
  {
    echo "Data Inserted Succesfully<br>";
  }
  else {
    echo "Error while inserting the data<br>";
  }
  $query3 = "SELECT * FROM EMPLOYEES";
  $f = mysqli_query($conn, $query3);
  while ($r = mysqli_fetch_array($f)) {
    // code...
    echo "$r[Name]";
    echo "\t";
    echo "$r[ID]";
    echo "<br>";
  }
  mysqli_close($conn);
}
else {
  echo "Error in connecting to mysql<br>";
}
 ?>
