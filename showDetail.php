<?php
	include 'connect.php';
	include 'boots.php';

$I_ID = $_GET['I_ID'];

$sql ="select * from info i where i.I_ID = '$I_ID'  ";
$result = mysql_query($sql,$conn)
	or die("Can't query");
$rs = mysql_fetch_array($result);
//หารูป//



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="800" border="1" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><p>&nbsp;</p>
        <form action="addPic.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <table width="402" border="1" align="center" cellpadding="0" cellspacing="0">
			  
            <tbody>
              <tr>
                <td colspan="2" align="center">เพิ่มรูปข่าวประชาสัมพันธ์</td>
              </tr>
              <tr>
                <td>ชื่อข่าวสาร</td>
                <td align="center"><input name="I_name2" type="text" disabled="disabled" id="I_name2" value="<?php echo "$rs[I_name]";?>">
                  </td>
              </tr>
              <tr>
                <td width="127">รายละเอียด</td>
                <td width="269" align="center"><input name="I_detail" type="textarea" disabled="disabled" id="I_detail" value="<?php echo "$rs[I_detail]";?>">
				  </td>
              </tr>
              <?php
				$sql2 ="select * from info i, picinfo p where i.I_ID = '$I_ID' and p.I_ID = i.I_ID ";
				$result2 = mysql_query($sql2,$conn)
					or die("Can't query");
				

					?>
        </table>
		<p>&nbsp;</p>
		<table width="450" border="1"  align="center" cellspacing="0" >
				
	<?php
		while($rs2 = mysql_fetch_array($result2)){
		  ?>		  
			  <tr>
               
                <td align="center">
					<?php
				  if("$rs2[P_name]"!=""){
					  ?>
				  <img src="<?php echo "./picture/$rs2[P_name]";?>" width="200" height="150">
				  <?php
				  }
				  ?>
                  </td>
              </tr>
			  
 <?php
	}
	mysql_close();
?>		  
	  
          </tbody>
        </table>
				<tr>
                <td colspan="2" align="center"><input type="reset" name="reset" align="center" id="reset" class=" btn-info btn-sm  "onClick=history.back(-1) value="ย้อนกลับ"></td>
              </tr>
              
              </tr>
            </tbody>
          </table>
        </form>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
</html>
