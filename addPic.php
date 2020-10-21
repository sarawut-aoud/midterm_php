<?php
	include 'connect.php';
	include 'boots.php';
$I_ID = $_POST['I_ID'];
$fileupload = $_FILES['photo']['tmp_name'];
$fileupload_name = $_FILES['photo']['name'];


		if($fileupload !=""){
			copy($fileupload,"./picture/".$fileupload_name);
			$sql = "INSERT INTO picinfo (P_name,I_ID)VALUES('$fileupload_name','$I_ID')";
		}

    		echo '<div class="alert alert-success" role="alert" > บันทึกข้อมูลเรียบร้อย ! </div> ';
    		echo '<a href="showInfo.php"> 
			<button type="button" class="btn btn-primary"> Back to Homepage </button> </a>' ;
			mysql_query($sql,$conn);
				
		
	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>