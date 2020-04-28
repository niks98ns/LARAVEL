<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
</head>

<body>
	<form method="post" enctype="multipart/form-data">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter Your picture </td>
    <td><input type="file" name="picture"/></td>
  </tr>
  <tr>
    <td>Enter Your name </td>
    <td><input type="text" name="name"/></td>
  </tr>
  <tr>
    <td>Enter Your email </td>
    <td><input type="email" name="email"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>

	</form>
</body>
</html>