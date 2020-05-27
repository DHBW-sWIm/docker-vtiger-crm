#/bin/bash

cd /var/www/html/mastercrm-vtiger
echo "<?php \$db_pass = '${MARIADB_PASSWORD}'; ?>" > db_pass.php
echo "<?php \$db_host = '${MARIADB_HOST}'; ?>" > db_host.php
echo "<?php \$db_user = '${MARIADB_USER}'; ?>" > db_user.php
echo "<?php \$db_name = '${MARIADB_DB_NAME}'; ?>" > db_name.php
echo "<?php \$site_URL = '${HOSTNAME}'; ?>" > hostname.php
apache2-foreground