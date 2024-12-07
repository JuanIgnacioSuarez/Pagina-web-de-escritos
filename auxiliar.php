<?php
session_start();

if($_POST['captcha']==$_SESSION['tmptxt']){
echo "captcha correcto";
}
else{
	echo "";
}
?>