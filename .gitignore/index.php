<?php

	$ldap_dn = "cn=read-only-admin,dc=example,dc=com";
	$ldap_password ="password";
	$ldap_con = ldap_connect("ldap.forumsys.com");
	ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
	if(ldap_bind($ldap_con,$ldap_dn,$ldap_password))
	{
		echo"Bind Sucessful";
	}else
	{
		echo "User nama and password are wrong";
	}

 ?>
