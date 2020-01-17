#/bin/bash

sleep 20
while ! mysqladmin ping -h mariadb -u root -p"${MARIADB_PASSWORD}" --silent; do
	sleep 10
	echo Waiting for database server to start...
done

cd /var/www/html/mastercrm-vtiger
echo "<?php \$dbpass = '${MARIADB_PASSWORD}'; ?>" > db_pass.php
echo "<?php \$site_URL = '${HOSTNAME}'; ?>" > hostname.php
apache2-foreground