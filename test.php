<?php
	if(isset($_POST["submit"]))
	{
		$DBServer ="localhos:8080";
		$DBUser ="root";
		$DBPass ="";
		$DBName ="IndustrialTraining";
		$con = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
		/*
		$file = $_FILES['file']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 0;
		require_once 'connection.php';
		
		while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
		{
			if($c > 0){
				$name = $filesop[0];
				$email = $filesop[1];
				print($name ."  " . $email ." <br />");
				
				$sql = "INSERT INTO cvs (name, email) VALUES ('".$name."','".$email."')";
				mysqli_query($con, $sql) or die(mysqli_error($con));
			}else{
				$c += 1;
			}
		}
		
			if($sql){
				echo "You database has imported successfully";
			}else{
				echo "Sorry! There is some problem.";
			}
		*/
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link rel='stylesheet' href='generalCss.css' type='text/css' />
	<link rel='stylesheet' href='menu_asset/style.css' type='text/css' />
</head>

<body
<!--
  ** Style a Select Box Using Only CSS
  ** Source: http://bavotasan.com/2011/style-select-box-using-only-css/
  ** Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/
  ** Source: http://stackoverflow.com/a/5809186
-->
<form name="import" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" /><br />
        <input type="submit" name="submit" value="Submit" />

			<select id="soflow"  name='cboSelectLogin' tabindex="1">
				  <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
				  <option value=''>Select Login Option</option>
				  <option value='8'>IFT Admin</option>
				  <option value='2'>IFT Staff</option>
				  <option value='3'>Institution Admin</option>
				  <option value='4'>Institution Staff</option>
				  <option value='5'>Industry Admin</option>
				  <option value='6'>Industry Staff</option>
				  <option value='7'>Student</option>
				</select>
<button name='sumit'>Submit</button
<div class='container'>
	
	<label>
		Name :
	</label>
	<input type = 'text'>
		
</div>
<div class="styled-select slate">
  <select>
    <option>Here is the first option</option>
    <option>The second option</option>
    <option>The third option</option>
  </select>
</div>

<hr>

<div class="styled-select black rounded">
  <select>
    <option>Here is the first option</option>
    <option>The second option</option>
    <option>The third option</option>
  </select>
</div>

<div class="styled-select green rounded">
  <select>
    <option>Here is the first option</option>
    <option>The second option</option>
    <option>The third option</option>
  </select>
</div>

<div class="styled-select blue semi-square">
  <select>
    <option>Here is the first option</option>
    <option>The second option</option>
    <option>The third option</option>
  </select>
</div>

<div class="styled-select yellow rounded">
  <select>
    <option>Here is the first option</option>
    <option>The second option</option>
    <option>The third option</option>
  </select>
</div>

<hr>

<div id="mainselection">
  <select>
    <option>Select an Option</option>
    <option>Option 1</option>
    <option>Option 2</option>
  </select>
</div>

<hr>

<select id="soflow">
  <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
  <option>Select an Option</option>
  <option>Option 1</option>
  <option>Option 2</option>
</select>

<select id="soflow-color">
  <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
  <option>Select an Option</option>
  <option>Option 1</option>
  <option>Option 2</option>
</select>

</form>
</body>
</html>