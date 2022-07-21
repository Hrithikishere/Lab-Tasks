<?php
$servername="localhost";
$username="root";
$password="";
$dbname="database1";

//$name="sadia";
//$email="sadia@gmail.com";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	//$q="INSERT INTO Student(ID,Name,Email,Salary) VALUES(20024,'".$name."','".$email."',50000)";
	$q = "UPDATE Student SET Name = 'Kazi Sadia', Email = 'sadia@gmail.com', Salary = '65000' WHERE Student.ID = 20024";
	$result=$conn->query($q);
	
	if($result){

		echo "data inserted successfully";
    }
	else{

		echo "data not inserted";
    }
}

?>