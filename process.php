<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$StudentName 		= $_POST['StudentName'];
	$CourseName 		= $_POST['CourseName'];
	$MobileNumber 			= $_POST['MobileNumber'];
	$DOB	= $_POST['DOB'];
	$Address 		= $_POST['Address'];

		$sql = "INSERT INTO registration (StudentName, CourseName, MobileNumber, DOB, Address ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$StudentName, $CourseName, $MobileNumber, $DOB, $Address]);
		if($result){
			echo 'Successfully saved.';


		}else{
			echo 'There were erros while saving the data.';
		}

}else{
	echo 'No data';
}
