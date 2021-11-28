# assign1_php
assignment one 

kindly replace value of host variable with your RDS host in connection.php .


steps >>>>>

1: install these >>  apache2 / httpd , PHP and MYSQL
2: once mysql is ready Execute following commands:
  
    CREATE DATABASE mydb;     //to create new database
    USE mydb;                 
    CREATE TABLE login (username varchar(50), password varchar(50));    //this command will create new table named as login with username and password attribute
    
    thats it....
    
3: now copy these files all files (index.html, signup.html/php..) to /var/www/html/

4: IMPORTANT STEP:
    
    if you are using UBUNTU server in AWS run following command
      
      sudo cat /etc/mysql/debian.cnf
    
    you will see output like this >
    ---------------------------------------------------------
    # Automatically generated for Debian scripts. DO NOT TOUCH!
      [client]
      host     = localhost
      user     = debian-sys-maint
      password = 24cZSZPgPZECdDyT               
      socket   = /var/run/mysqld/mysqld.sock
      [mysql_upgrade]
      host     = localhost
      user     = debian-sys-maint
      password = 24cZSZPgPZECdDyT
      socket   = /var/run/mysqld/mysqld.sock
   ----------------------------------------------------- 

now open connection.php and replace password value with above value 

save the file and you are good to go...
    


