# Following these steps to connect LDAP Test Server to your pc

1. Visit the forumsys.com and next go to tutorial and find ldap connective 
http://www.forumsys.com/tutorials/integration-how-to/ldap/online-ldap-test-server/

2. Insert index.php files to your local server

3.If you have ssl protocole add method the optional part

ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);

4.you can test it now
