<?php
/*Database*/
	define("DBHOST","192.168.1.10",true);
	define("DBNAME","medicall_indonesia",true);
	define("DBUsername","dev",true);
	define("DBPassword","dev",true);
	
/*LDAP*/
	define("LdapHost","mail.k24.co.id",true);
	define("LdapPort","389",true);
	define("LdapDomain","@k24.co.id",true);
	define("LdapDN","ou=people,dc=k24,dc=co,dc=id",true);

/*SMS*/	
	define("urlSMS","https://reguler.zenziva.net/apps/smsapi.php",true);
	define("userKeySMS","pax6zy",true);
	define("passKeySMS","MedicallIndo",true);
	
/*Firebase*/	
	define("FireBaseUrl","https://fcm.googleapis.com/fcm/send",true);
	define("FireBaseAPIKey","AIzaSyCV3cscVsG5JX1QibOLE-ThEKxlNszokZo"); //AIzaSyDuYXaP547X2hDaP0nq4WTeKe_Pzd6SfVc
	define("FireBaseCMKey","AIzaSyC7u_8XqXhTC72ympSSTpMjbm_nK3A98aw");
	
?>
