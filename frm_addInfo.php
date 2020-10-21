<?php
	include 'connect.php';
include'boots.php';
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
        <form action="addInfo.php" method="post" name="form1" id="form1">
          <table width="400" border="1" align="center" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td colspan="2" align="center">เพิ่มข่าวสาร</td>
              </tr>
              <tr>
                <td width="127">ชื่อข่าวสาร</td>
                <td width="267" align="center"><input type="text" name="I_name" id="I_name"></td>
              </tr>
              <tr>
                <td>รายละเอียด</td>
                <td align="center"><textarea name="I_detail" id="I_detail" align="center"></textarea></td>
              </tr>
              <tr>
                <td colspan="2" align="center">
					<input type="submit" name="submit" class=" btn-success btn-sm  "id="submit" value="บันทึก">
                <input type="reset" name="reset" class=" btn-info btn-sm  " id="reset" value="ยกเลิก">
				  
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
