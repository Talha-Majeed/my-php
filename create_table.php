<?php
include 'collection.php';

$pages="CREATE TABLE IF NOT EXISTS pages(
	page_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	page_title VARCHAR(30),
	page_des TEXT
	
)";
if(mysqli_query($connect,$pages)){
	echo "<br>table created";
}else{
	echo"table error";
}
?>