<?php
	mysql_connect("localhost", "root", "admin") or die(mysql_error());
	mysql_query("CREATE DATABASE tcc") or die(mysql_error());
	mysql_select_db("tcc") or die(mysql_error());
	mysql_query("CREATE TABLE user(username varchar(20), password varchar(20), level varchar(20))") or die(mysql_error());
	mysql_query("INSERT INTO user(username,password,level) VALUES('ikegaamil','angel','admin')") or die(mysql_error());	

	mysql_query("CREATE TABLE student(Reg No int NOT NULL PRIMARY KEY , Student Name int(100), Course Id int(100), Department Id int(100) , Year of Passing int(4), sex char(1))") or die(mysql_error());		
//	mysql_query("CREATE TABLE me(idnum int NOT NULL PRIMARY KEY , famname varchar(100), firstname varchar(100), midname varchar(100) )") or die(mysql_error());		
//	mysql_query("CREATE TABLE plus(idnum int NOT NULL PRIMARY KEY , famname varchar(100), firstname varchar(100), midname varchar(100) )") or die(mysql_error());		
		header("Location: index.php");
?>