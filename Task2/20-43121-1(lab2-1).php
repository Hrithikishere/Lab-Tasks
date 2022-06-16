<?php
$isPost=false;
$username="";

	if(isset($_POST["btnlogin"]))
	{
		$isPost=true;
		if($_POST["uname"]!="")
			$username=$_POST["uname"];
		//echo "button clicked!";
	}
?>

<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">

<?php
	if($isPost==true && $username=="")
	{
		echo "<span style='color:red;'><small>Required</small></span>";
	}
?>

<br><br>

<?php
	$isPost=false;
	$password="";

	if(isset($_POST["btnlogin"]))
	{
		$isPost=true;
		if($_POST["pass"]!="")
			$password=$_POST["pass"];
		//echo "button clicked!";
	}
?>

Password:<input type="password" id="pass" name="pass">

<?php
	if($isPost==true && $password=="")
	{
		echo "<span style='color:red;'><small>Required</small></span>";
	}

?>

<br><br>

<?php
$isPost=false;
$genders="";

if(isset($_POST["radio_gender"]))
{
	$isPost=true;
	if($_POST["gender"]!="")
		$genders=$_POST["gender"];
	//echo "button clicked!";
}
?>

Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others

<?php
if($isPost==true && $genders=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}

?>






<br><br>
Skills:<input type="checkbox" name="skills[]" value="C">C
<input type="checkbox" name="skills[]" value="C++">C++
<input type="checkbox" name="skills[]" value="C#">C#
<input type="checkbox" name="skills[]" value="Python">Python<br><br>






Department:<select name="dept">
<option value="cse">CSE</option>
<option value="eee">EEE</option>
<option value="bba">BBA</option>
</select>


<?php
$isPost=false;
$address="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["address"]!="")
		$address=$_POST["address"];
	//echo "button clicked!";
}
?>

<br><br>
Address:<textarea name="address" rowspan="4" colspan="30"></textarea><br><br>
<input type="submit" value="Log in" name="btnlogin">


<?php
if($isPost==true && $genders=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br> <br>

</form>