<?php 
/*
	
*/
	$con = mysqli_connect("localhost","root", '') or die(mysqli_connect_error());
	//CREATE DATABSE 
	 $sql = "CREATE DATABASE IF NOT EXISTS IndustrialTraining";
	 mysqli_query($con,$sql) ;
	 
	
	mysqli_select_db($con, "IndustrialTraining");
	
	 //CREATE TABLE ASSOCIATED WITH SIWES STUDENTS
	 $sql = "CREATE TABLE IF NOT EXISTS tblStudents (studentID INTEGER NOT NULL AUTO_INCREMENT,
														schoolIdentificationNumber VARCHAR(40) NOT NULL,
														studentMatricNumber VARCHAR(20) NOT NULL,
														studentSupervisor VARCHAR(20) NOT NULL,
														studentFirstName VARCHAR(30) NOT NULL,
														studentMiddleName VARCHAR(30),
														studentLastName VARCHAR(30) NOT NULL,
														studentEmail VARCHAR(30) NOT NULL,
														studentPassword VARCHAR(256) NOT NULL,
														studentPhoneNumber VARCHAR(15),
														studentResidentialAddress VARCHAR(50),
														studentPermanentAddress VARCHAR(50),
														studentCompleted INTEGER NOT NULL,
														
														
														PRIMARY KEY (studentID)
														)
														ENGINE=MyISAM";
	 
		
	 mysqli_query($con, $sql) or die(mysqli_error($con));
	 
	$sql = "CREATE TABLE IF NOT EXISTS tblPaymentDetails (paymentDetailID INTEGER NOT NULL AUTO_INCREMENT,
														paymentBankID INTEGER NOT NULL,
														studentMatricNumber VARCHAR(20) NOT NULL,
														paymentBankSortCode VARCHAR(15) NOT NULL,
														paymentAccountNumber VARCHAR(20) NOT NULL,
														paymentAccountName VARCHAR(50) NOT NULL,
														
														PRIMARY KEY (paymentDetailID)
														)
														ENGINE=MyISAM";
	 
		
	 mysqli_query($con, $sql) or die(mysqli_error($con));
	 
	 
	 $sql = "CREATE TABLE IF NOT EXISTS tblDailyActivity (activityID INTEGER NOT NULL AUTO_INCREMENT,
														studentMatricNumber VARCHAR(20) NOT NULL,
														
														activityDate DATE NOT NULL,
														activityDescription VARCHAR(200) NOT NULL,
														activityComment VARCHAR(150),
														activitySnapshot VARCHAR(40),
														industrialSupervisorComment VARCHAR(150),
														schoolSupervisorComment VARCHAR(150),
														itfSupervisorComment VARCHAR(150),
														
														PRIMARY KEY (activityID)
														)
														ENGINE=MyISAM";
	 
		
	 mysqli_query($con, $sql) or die(mysqli_error($con));
	 //CREATE TABLES ASSOCIATED WITH ITF
	 //Admin users
	 /*
		$sql = "CREATE TABLE IF NOT EXISTS tblAdmin(adminID INTEGER NOT NULL AUTO_INCREMENT,
															
															adminFirstName VARCHAR(30) NOT NULL,
															
															adminLastName VARCHAR(30) NOT NULL,
															
															adminUsername VARCHAR(50) NOT NULL,
															adminPassword VARCHAR(50) NOT NULL,
															adminEmail VARCHAR(50) NOT NULL,
															adminDesignation  VARCHAR(10) NOT NULL,
															adminStatus  VARCHAR(2) NOT NULL,".//To determined whether admin is still permitted or not if 1, permitted and if 0, not permitted.
															"PRIMARY KEY (adminID)
															)
															ENGINE=MyISAM";
															
		mysqli_query($con, $sql) or die(mysqli_error($con));
		*/
		
		$sql = "CREATE TABLE IF NOT EXISTS tblStaff(staffID INTEGER NOT NULL AUTO_INCREMENT,
															
															staffNumber VARCHAR(20) NOT NULL,
															staffFirstName VARCHAR(30) NOT NULL,
															staffMiddleName VARCHAR(30),
															staffLastName VARCHAR(30) NOT NULL,
															staffPassword VARCHAR(256) NOT NULL,
															staffEmail VARCHAR(30) NOT NULL,
															staffDesignation VARCHAR(30) NOT NULL,
															staffStatus  VARCHAR(2) NOT NULL,
															staffPhoneNumber VARCHAR(15),
															staffResidentialAddress VARCHAR(50),
															staffPermanentAddress VARCHAR(50),
															
															PRIMARY KEY (staffID)
															)
															ENGINE=MyISAM";
															
		mysqli_query($con, $sql) or die(mysqli_error($con));
		
		
		//CREATE BANKS TABLE
		
		$sql = "CREATE TABLE IF NOT EXISTS tblBanks(bankID INTEGER NOT NULL AUTO_INCREMENT,
															
															bankName VARCHAR(30) NOT NULL,
															bankStatus VARCHAR(2) NOT NULL,
															
															PRIMARY KEY (bankID)
															)
															ENGINE=MyISAM";
															
		mysqli_query($con, $sql) or die(mysqli_error($con));
		
		
		//CREATE INDUSTRIES RELATED TABLES
		
		$sql = "CREATE TABLE IF NOT EXISTS tblIndustries(industryID INTEGER NOT NULL AUTO_INCREMENT,
															
															industryRegistrationNumber VARCHAR(20) NOT NULL,
															industryName VARCHAR(100) NOT NULL,
															
															industryBankSortCode VARCHAR(20) NOT NULL,
															industryBankAccountNumber VARCHAR(30) NOT NULL,
															industryBankAccountName VARCHAR(100) NOT NULL,
															
															industryStatus VARCHAR(2) NOT NULL,
															industryOffice VARCHAR(150) NOT NULL,
															
															PRIMARY KEY (industryID)
															)
															ENGINE=MyISAM";
															
		mysqli_query($con, $sql) or die(mysqli_error($con));
		
		$sql = "CREATE TABLE IF NOT EXISTS tblIndustryStaff(industryStaffID INTEGER NOT NULL AUTO_INCREMENT,
															
															industryRegistrationNumber VARCHAR(20) NOT NULL,
															industryStaffNumber VARCHAR(30) NOT NULL,
															industryStaffFirstName VARCHAR(30) NOT NULL,
															industryStaffMiddleName VARCHAR(30),
															industryStaffLastName VARCHAR(30) NOT NULL,
															industryStaffEmail VARCHAR(30) NOT NULL,
															industryStaffPhoneNumber VARCHAR(15),
															industryStaffPassword VARCHAR(256) NOT NULL,
															industryStaffDesignation VARCHAR(10) NOT NULL,
															idustryStaffStatus VARCHAR(2) NOT NULL,
															
															PRIMARY KEY (industryStaffID)
															)
															ENGINE=MyISAM";
															
		mysqli_query($con, $sql) or die(mysqli_error($con));
		
		
		$sql = "CREATE TABLE IF NOT EXISTS tblIndustryAddresses(industryAddressID INTEGER NOT NULL AUTO_INCREMENT,
															
															industryRegistrationNumber VARCHAR(20) NOT NULL,
															industryAddress VARCHAR(30) NOT NULL,
															industryDesignation VARCHAR(25),
															
															PRIMARY KEY (industryAddressID)
															)
															ENGINE=MyISAM";
															
		mysqli_query($con, $sql) or die(mysqli_error($con));
		
		
		//CREATE TABLES RELATED TO SCHOOLS
		
		$sql = "CREATE TABLE IF NOT EXISTS tblSchools(schoolID INTEGER NOT NULL AUTO_INCREMENT,
															
															schoolIdentificationNumber VARCHAR(20) NOT NULL,
															schoolName VARCHAR(100) NOT NULL,
															
															schoolStatus VARCHAR(2) NOT NULL,
															schoolOffice VARCHAR(150) NOT NULL,
															PRIMARY KEY (schoolID)
															)
															ENGINE=MyISAM";
															
		mysqli_query($con, $sql) or die(mysqli_error($con));
		
		$sql = "CREATE TABLE IF NOT EXISTS tblSchoolStaff(schoolStaffID INTEGER NOT NULL AUTO_INCREMENT,
															schoolIdentificationNumber VARCHAR(20) NOT NULL,
															schoolStaffRegistrationNumber VARCHAR(20) NOT NULL,
															schoolStaffFirstName VARCHAR(30) NOT NULL,
															schoolStaffMiddleName VARCHAR(30),
															schoolStaffLastName VARCHAR(30) NOT NULL,
															schoolStaffEmail VARCHAR(30) NOT NULL,
															
															schoolStaffPhoneNumber VARCHAR(15),
															schoolStaffPassword VARCHAR(256) NOT NULL,
															schoolStaffDesignation VARCHAR(10) NOT NULL,
															schoolStaffStatus VARCHAR(2) NOT NULL,
															
															PRIMARY KEY (schoolStaffID)
															)
															ENGINE=MyISAM";
															
		mysqli_query($con, $sql) or die(mysqli_error($con));
		
		//GENERAL TABLES
		
		$sql = "CREATE TABLE IF NOT EXISTS tblStates(stateID INTEGER NOT NULL AUTO_INCREMENT,
															
														stateName VARCHAR(20) NOT NULL,
														
														PRIMARY KEY (stateID)
														)
														ENGINE=MyISAM";
															
		mysqli_query($con, $sql) or die(mysqli_error($con));
		
		$sql = "CREATE TABLE IF NOT EXISTS tblApplications(applicationID INTEGER NOT NULL AUTO_INCREMENT,
														applicationType VARCHAR(2) NOT NULL,
														applicationNumber VARCHAR(20) NOT NULL,
														applicationName VARCHAR(100) NOT NULL,
														applicationEmail VARCHAR(50) NOT NULL,
														applicationStatus VARCHAR(2) NOT NULL,
														applicationOffice  VARCHAR(150) NOT NULL,
														PRIMARY KEY (applicationID)
														)
														ENGINE=MyISAM";
															
		mysqli_query($con, $sql) or die(mysqli_error($con));
		
		
		//Check and ADD Default Admin
		$sql = "SELECT * FROM tblStaff";
		$result = mysqli_query($con, $sql) or die(mysqli_error($con));
		if(mysqli_num_rows($result) < 1)
		{
			
			$pass = password_hash('0000',PASSWORD_DEFAULT);
			$sql = "INSERT INTO tblStaff (staffNumber,staffFirstName, staffLastName,staffPassword,staffEmail,staffDesignation,staffStatus )
										VALUES('123456789','Babangida', 'Zachariah', '".$pass."', 'daddonyone@gmail.com','Admin', '1')";
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
		}
?>



