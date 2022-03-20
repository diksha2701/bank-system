<?php
include 'database.php';
$username= $_POST['username'];
$amount =$_POST['amount'];

$sql = "INSERT INTO `transport`.`transport`( `username`, `amount`) 
			VALUES ('$username','$amount')";
			if (mysqli_query($conn, $sql)) {
				echo "successfull connection to the DATABASE";
			} 
			else {
				echo " Connection failure";
			}
?>