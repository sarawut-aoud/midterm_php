<?php
	include 'connect.php';
	include 'boots.php';

	$sql = "SELECT * FROM info ";
$result = mysql_query($sql,$conn)
	or die ("ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SARAWUT_DESIGN</title>
</head>

<body>
<table width="800" border="1" align="center" cellspacing="0" bordercolor="#FF9600" >
  <tbody>
    
    <tr>
      <td><p>&nbsp;</p>
        <form action="showdept.php" method="post" name="form1" id="form1">
          <table width="498" height="29" border="0" align="center" cellspacing="0">
            <tbody>
              <tr style="text-align: right">
                <td width="446" align="left" >ข้อมูลข่าวสาร</td>
				  
                <td width="127" align="center"class="btn-warning btn-sm"> <?php echo "<a  href=\"frm_addInfo.php\"  > "; ?> เพิ่มข้อมูล <?php echo "</a>"; ?> </td>
              </tr>
            </tbody>
          </table>
          <table width="498" border="1" align="center" cellspacing="0" >
            <tbody>
              <tr>
               
				  
                <td width="273" style="text-align: center">หัวข้อข่าว</td>

                <td width="115">&nbsp;</td>
                <td width="96">&nbsp;</td>
                
              </tr>
				
<?php
		while($rs = mysql_fetch_array($result)){
?>
			  <tr>
                <input name="I_ID" type="hidden" id="I_ID" value="<?php echo"$rs[I_ID]" ; ?>" />
                <td align="center"><?php echo"$rs[I_name]";?></td>
				
                <td style="text-align: center"class=" btn-info btn-sm  ">
                    <?php echo "<a href=\"showDetail.php?I_ID=$rs[I_ID] \">"; ?>รายละเอียด<?php echo "</a>";?> </td>
                <td style="text-align: center"class=" btn-secondary  btn-sm active"><?php echo "<a href=\"frm_addPic.php?I_ID=$rs[I_ID] \">"; ?>เพิ่มรูป<?php echo "</a>";?></td>
</tr>
<?php
	}
	mysql_close();
?>
            </tbody>
          </table>
        </form>
      <p>&nbsp;</p></td>
    </tr>
    
  </tbody>
</table>
	
</body>
</html>