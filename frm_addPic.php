<?php
	include 'connect.php';
	include 'boots.php';
$I_ID = $_GET['I_ID'];

$sql ="select * from info where I_ID = '$I_ID'";
$result = mysql_query($sql,$conn)
	or die("Can't query");
$rs = mysql_fetch_array($result);

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
          <table width="400" border="1" align="center" cellpadding="0" cellspacing="0">
			  
            <tbody>
              <tr>
                <td colspan="2" align="center">เพิ่มรูปข่าวประชาสัมพันธ์</td>
              </tr>
              <tr>
                <td width="127">ชื่อข่าวสาร</td>
                <td width="267" align="center"><input name="I_name" type="text" disabled="disabled" id="I_name" value="<?php echo "$rs[I_name]";?>">
				  <input name="I_ID" type="hidden" id="I_ID" value="<?php echo"$rs[I_ID]" ; ?>" /></td>
              </tr>
              <tr>
                <td>รูป</td>
                <td align="center"><input type="file" name="photo" id="photo"></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="บันทึก">
                <input type="reset" name="reset" id="reset" onClick=history.back(-1) value="ยกเลิก"></td>
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
