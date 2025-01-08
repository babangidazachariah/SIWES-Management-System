<?php
//http://stackoverflow.com/questions/18758536/sms-text-messages-to-mobile-phone-in-php
	if(!empty($_POST['date']))
	{
	
		require_once '../connection.php';
		$sql = "INSERT INTO tblLearned (theDate, matricNumber, learned)";
	}
	
?>