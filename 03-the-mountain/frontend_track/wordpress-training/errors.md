#### Errors encoutered with XAMPP

#### 1
```
XAMPP: Starting Apache...fail.
XAMPP:  Another web server is already running.
```

To try : `sudo /etc/init.d/apache2 stop` then reboot XAMPP

#### 2 
```
ERROR: "/opt/lampp/bin/mysql.server: 260: kill: No such process"
```

Solution: 
`sudo service mysql stop` then reboot XAMPP
