<?php

$myuser = isset($_POST['uname'])?$_POST['uname']:'';
$mypass = isset($_POST['upass'])?$_POST['upass']:'';
echo $myuser;
echo $mypass;
$x = '{"name" : "vasanth","age":"23"}'; 
echo json_encode($x);
$con = mysql_connect("localhost","root","admin");

if (!$con)
{
  die();
}

mysql_select_db("bug",$con);

$result = mysql_query("select * from user where username = '$myuser' and password='$mypass'");


if (mysql_num_rows($result)>0)
{
   $row = mysql_fetch_array($result);

   if ($row[2]==1)

     echo "<script>location.href='userhome.php'</script>";
	 
	 
else
echo "<script>location.href='userhome.php'</script>"; 
 
}
else
{
  echo "<script>alert('you are not a registered user...')</script>";
  echo "<script>location.href='index.html'</script>";
 
}


?>	