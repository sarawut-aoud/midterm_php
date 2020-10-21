<?php
	include 'connect.php';
	include 'boots.php';

	$I_name = $_POST['I_name'];
	$I_detail = $_POST['I_detail'];
if($I_name != NULL ){
		$sql1 = "SELECT * FROM info WHERE I_name = '$I_name' ";
		$result1 = mysql_query($sql1,$conn);
		$total1 = mysql_num_rows($result1);
		////////////
		if($total1 == 0){
		$sql = "insert into Info (I_name,I_detail) value ('$I_name','$I_detail') ";
				echo '<div class="alert alert-success" role="alert" > บันทึกข้อมูลเรียบร้อย ! </div> ';
				echo '<a href="showInfo.php"> 
					<button type="button" class="btn btn-primary"> Back to Homepage </button> </a>' ;
					mysql_query($sql,$conn);
		}			
  		else {
   			echo '<div class="alert alert-danger" role="alert"> ชื่อซ้ำ ! </div>';
			echo '<a href="showInfo.php"> 
			<button type="button" class="btn btn-primary"> Back to Homepage </button>  </a>'  ;
			mysql_close();
  		}
	}
	else {
  		echo mysql_error($conn);
   		echo '<div class="alert alert-danger" role="alert"> ไม่สามารถบันทึกข้อมูลได้ ! </div>';
		echo '<a href="frm_addInfo.php"> 
		<button type="button" class="btn btn-primary"> Back to Homepage </button>  </a>'  ;
		mysql_close();
  	}
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