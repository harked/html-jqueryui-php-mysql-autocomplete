<?php
//connect to your database
  mysql_connect("localhost","root","");
  mysql_select_db("student");

// Using term variable to extract input from user
$term = trim(strip_tags($_GET['term']));
$query = "  SELECT id, student_name 
			FROM student_info 
			WHERE student_name LIKE '".$term."%'
        ";
$result = mysql_query($query);
 
while ($row = mysql_fetch_array($result))
{
    $row['value']= htmlentities(stripslashes($row['student_name']));
    $row['id']= (int)$row['id'];
    // create an array to be converted to json
    $row_set[] = $row;
}

//query will send back as json format
echo json_encode($row_set);
?>