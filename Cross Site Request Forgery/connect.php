<?php
	$dbhost = "127.0.0.1";
	$dbuser = "root"; //Veritabanı Kullanıcı Adı
	$dbpass = "toortoor"; //Veritabanı Şifresi
	$dbname = "csrf"; //Veritabanı Adı
	if (!@mysql_connect($dbhost, $dbuser, $dbpass)) {
			die("Veritabanına bağlanılamadı...<br>HATA: ".mysql_error());
		}else
			{
				/*echo "Database Connected";*/
				 
			}
	if (!@mysql_select_db($dbname)) {
			die("Veritabanı seçilemedi<br>HATA: ".mysql_error());
		}
	//Karakter setinde problem yaşanmaması amacıyla
	mysql_query("SET NAMES utf8"); 
	mysql_query("SET CHARACTER SET 'utf8'"); 
	mysql_query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
?>