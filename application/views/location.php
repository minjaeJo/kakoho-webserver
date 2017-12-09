<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Center Location</title>
</head>
<body>
  <!--<?php echo form_open(); ?>-->
  <form name="otherform" method="POST">
    LocationX:<br>
    <input type="text" name="locationX" id = "locationX"><br>
    LocationY:<br>
    <input type="text" name="locationY" id = "locationY"><br>

    <button type="submit" onclick="othersubmit(1)">입력</buton>
    <button type="submit" onclick="othersubmit(2)">약속장소 찾기</button>
  </form>
  <!--  <?php echo form_close(); ?>-->


</body>
</html>

<script>
function othersubmit(n){
if(n==1){
 document.otherform.action='location/insertLocation';
 }
if(n==2){
 document.otherform.action='location/centerLocation';
}
document.other.submit();
}
</script>
