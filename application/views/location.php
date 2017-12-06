<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Center Location</title>
</head>
<body>
  <?php echo form_open('kakoho-webserver/index.php//location/centerLocation'); ?>
    LocationX:<br>
    <input type="text" name="locationX" id = "locationX"><br>
    LocationY:<br>
    <input type="text" name="locationY" id = "locationY"><br>
    LocationX:<br>
    <input type="text" name="locationX2" id = "locationX"><br>
    LocationY:<br>
    <input type="text" name="locationY2" id = "locationY"><br>
    LocationX:<br>
    <input type="text" name="locationX3" id = "locationX"><br>
    LocationY:<br>
    <input type="text" name="locationY3" id = "locationY">
    <input type="submit">
  <?php echo form_close(); ?>
</body>
</html>
