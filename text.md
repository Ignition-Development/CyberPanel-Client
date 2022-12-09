# MySQL
This part of the documentation goes over the MySQL part of your CyberPanel let's start logging in your VPS ssh and use this command `nano /etc/mysql/my.cnf` to open the MySQL configration file and paste this on the bottom off the document.
```bash
[mysqld]
bind-address=0.0.0.0
```
After that you have to make some changes into the MariaDB server to. To do that, you have to edit this file `nano /etc/mysql/mariadb.conf.d/50-server.cnf` and replace the 127.0.0.1 address with 0.0.0.0 to allow remote MySQL usage.
```bash
bind-address            = 127.0.0.1 # Shall be 0.0.0.0
```
After that, run `systemctl restart mysql && systemctl restart mariadb` and login into MySQL command terminal using `mysql -u root -p` 
```sql
CREATE USER 'cyclient'@'%' IDENTIFIED BY '<yourpassword>';
GRANT ALL PRIVILEGES ON cyberpanel.* TO 'cyclient'@'%' WITH GRANT OPTION;
```
`REPLACE <yourpassword> WHIT A STRONG PASSWORD`

