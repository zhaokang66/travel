<?php
	session_start();    //�����Ự
	session_unset();    //ɾ���Ự
	session_destroy();  //�����Ự
	header("location: index.php");
?>